<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_function extends MY_API_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function admin_login_form()
    {
        $response = [
            'message'  => '',
            'redirect' => '',
            'status'   => false
        ];
        $salt           = get_salt_string();
        $username       = $this->input->post('username');
        $login_password = $this->input->post('password');
        $redirect = site_url('/admin/dashboard');

        $condition = [
            'username'     => $username,
            'is_published' => 1
        ];
        $admin_data = Admin::find($condition);
        $password   = crypt($login_password, $salt);
        
        if(!empty($admin_data))
        {
            if ($admin_data->password == $password)
            {
                $response = [
                    'redirect' => $redirect,
                    'status'   => true
                ];
                $admin_data->admin_session();

            }
            else
            {
                $response = [
                    'message' => "Please enter a valid email ID/password",
                ];
            }
        }
        else
        {
            $response = [
                'message' => "Username account doesn't exist/inactive",
            ];
        }

        $this->api_response = $response;
        self::_api_output();
    }

    /**
     * Get the Output
     */
    public function _api_output()
    {
        parent::_api_output($this->api_response);
    }
}

/* End of file ajax_function.php */
/* Location: ./application/controllers/ajax_function.php */