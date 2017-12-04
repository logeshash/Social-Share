<?php
/**
 * MY Controller
 */
class MY_Controller extends CI_Controller
{
    protected $layout_view = 'admin';
    protected $current_controller;
    protected $router_class;
    protected $model    = "";
    protected $content_view = "";
    protected $view_data = [];
    protected $template_url = "";
    protected $action = "";
    protected $action_id = "";
    protected $salt = "";


    public function __construct()
    {
        parent::__construct();
        ActiveRecord\DateTime::$DEFAULT_FORMAT = 'db';
        $this->current_controller = get_called_class();
        $this->salt               = get_salt_string();
        $this->router_class       = $this->router->fetch_class();
        $this->action             = $this->uri->segment(3);
        if(empty($this->action))
        {
            $this->template_url = ADMIN_PATH .'/'. $this->router_class;
        }
        else
        {
            $this->template_url = ADMIN_PATH .'/'. $this->router_class .'/' . $this->action;
        }
        if (empty($this->model))
        {
            $this->model = ucwords($this->current_controller, '_');
            $this->model = str_replace('_', '', $this->model);
            $this->model = substr($this->model, 0, -1);
        }
    }

    public function new_form($resource = NULL)
    {
        $model = $this->model;
        if (empty($this->page_title))
        {
            $this->page_title = "Create New " . $this->model;
        }
        if ($resource == NULL)
        {
            $this->resource = new $model;
        }
        $this->view_data['resource']   = $this->resource;
        $this->view_data['page_title'] = $this->page_title;
        $this->load->template($this->template_url, $this->view_data); // this will load the view file
    }

    public function create()
    {
        $model        = $this->model;
        $post_input   = $this->input->post();
        if(in_array($model, $this->config->item('reg_login_model')))
        {
        	$new_password                   = $post_input['password'];
            $post_input['decrypt_password'] = $new_password;
            $post_input['password']         = crypt($new_password, $this->salt);
        }

        $post_input['created_at'] = date('Y-m-d H:i:s');
            $this->resource = $model::create($post_input);
        if (!$this->resource->is_new_record())
        {
            $this->session->set_flashdata("alert", "Your details has been saved successfully.");
            redirect(resource_path($this->router_class, "index"));
        }
        else
        {
            $errors= $this->resource->errors->full_messages();
            $this->router->method = "new";
            $this->new($this->resource);
            $this->view_data['errors'] = $errors;
        }
    }

    public function edit($id)
    {
        $model = $this->model;
        $this->resource = $model::find($id);
        $this->view_data['resource'] = $this->resource;
        $this->page_title = "Editing - " . $model;
        $this->load->template($this->template_url, $this->view_data); // this will load the view file
    }

    public function update($id)
    {
        $model = $this->model;
        $this->resource = $model::find($id);
        $post_input = $this->input->post();
        if(in_array($model, $this->config->item('reg_login_model')))
        {
            if(empty($post_input['password']))
            {
                $existing_password              = $this->resource->password;
                $post_input['password']         = $existing_password;
            }
            else
            {
                $update_password                = $post_input['password'];
                $post_input['decrypt_password'] = $update_password;
                $post_input['password']         = crypt($update_password, $this->salt);
            }
        }
        $post_input['updated_at'] = date('Y-m-d H:i:s');
        $this->resource->update_attributes($post_input);
        if ($this->resource->is_valid())
        {
            $this->session->set_flashdata("alert", "Your details has been updated successfully.");
            redirect(resource_path($this->router_class, "index"));
        }
        else
        {
            $this->router->method = "edit";
            $this->view_data['errors'] = $this->resource->errors->full_messages();
            $this->edit($id);
        }
    }

    public function delete($id)
    {
        $model = $this->model;
        $this->resource = $model::find($id);
        if (!$this->resource->delete())
        {
            $this->view_data['errors'] = array("Could not delete this item");
        }
        else
        {
            $this->session->set_flashdata("alert", "Your record has been deleted successfully.");
        }

        /* Redirect to previous page */
        $current_page = $this->session->flashdata('current_page');
        if(empty($current_page))
            $current_page = $_SERVER['HTTP_REFERER'];
        redirect($current_page);
    }

    public function publish($id)
    {
        $model = $this->model;
        try
        {
            $this->resource = $model::find($id);
        }
        catch(Exception $ex)
        {
            $this->router->show_404();
            return;
        }

        $this->resource->is_published = !($this->resource->is_published);
        $this->resource->save(false);
        $this->session->set_flashdata("alert", ($this->resource->is_published) ? 'published' : 'unpublished');

        /* Redirect to previous page */
        $current_page = $this->session->flashdata('current_page');
        if(empty($current_page))
            $current_page = $_SERVER['HTTP_REFERER'];

        redirect($current_page);
    }

    /**
     * hash_password function.
     *
     * @access private
     * @param mixed $password
     * @return string|bool could be a string on success, or bool false on failure
     */
    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
}

/**
 * MY API Controller
 */
class MY_API_Controller extends MY_Controller
{
    public $default_response              = [];
    public $api_response                  = [];

    /**
     * Whether to check or skip login details and other things
     * set as true if the request is meant for CI & FLIP structure
     */
    protected static $for_only_ci_structure  = false;


    public function __construct()
    {

        parent::__construct();

        ob_end_clean();
        header('Content-Type: application/json');

        $this->default_response['success'] = false;
        $this->default_response['error']   = "Sorry, you don't have access to this area!";
        /* TO OVERCOME ERROR/MESSAGE API RESPONSE CODE CONFLICT */
        $this->default_response['message'] = $this->default_response['error'];
    }


    /**
     * API Response
     * @param array $api_response array to convert as object
     * @param boolean $force_json_object - option to forcefully convert the response as object
     */
    protected function _api_output($api_response = [], $force_json_object = false)
    {

        if($force_json_object)
            echo json_encode($api_response, JSON_FORCE_OBJECT);
        else
            echo json_encode($api_response);
        die();
    }
}
?>