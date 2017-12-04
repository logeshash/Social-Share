<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('admin_id'))
        {
            redirect(site_url(ADMIN_PATH.'/login'));
        }
    }

    public function index()
    {
        $user_count  = User::count();
        $admin_count = Admin::count();
        $share_count = SocialShare::count();
        $view_data['user_count'] = $user_count; // can be change according to views
        $view_data['admin_count'] = $admin_count; // can be change according to views
        $view_data['share_count'] = $share_count; // can be change according to views
        $this->load->template('admin/dashboard/index.php', $view_data); // this will load the view file
    }

    public function change_password()
    {
        $post_input      = $this->input->post();
        if($post_input)
        {
            $old_password    = $post_input['old_password'];
            $new_password    = $post_input['new_password'];
            $logged_admin_id = $this->session->userdata('admin_id');
            $admin_details   = Admin::find($logged_admin_id);
            if($admin_details->password == crypt($old_password, $this->salt))
            {
                $admin_details->password         = crypt($new_password, $this->salt);
                $admin_details->decrypt_password = $new_password;
                $admin_details->save();
                $this->session->set_flashdata("alert", "Password saved successfull!");
                redirect(site_url(ADMIN_PATH . "/dashboard/change_password"));
                return true;
            }
            else
            {
                $this->session->set_flashdata("error", "Old password is incorrect");
                redirect(site_url(ADMIN_PATH . "/dashboard/change_password"));
                return false;
            }
        }
        $this->load->template('admin/dashboard/change_password.php');
    }

    public function logout()
    {

        if ($this->session->userdata('admin_id'))
        {
            $this->session->sess_destroy();
        }
        redirect(site_url(ADMIN_PATH.'/login'));
    }
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */