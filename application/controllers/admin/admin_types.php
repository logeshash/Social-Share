<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_types extends MY_Controller
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
        $admin_type_list = AdminType::all();
        $view_data['admin_types'] = $admin_type_list;
        $this->load->template('admin/admin_types/index.php', $view_data);
    }
    /*public function new_form($resource = NULL)
    {
    }*/
    public function ajax_sub()
    {     

     $view_data['admin_types'] = $_POST['certified_details'];
        $this->load->template('admin/admin_types/new_form.php', $view_data);   
    }
}

/* End of file admin_types.php */
/* Location: ./application/controllers/admin_types.php */