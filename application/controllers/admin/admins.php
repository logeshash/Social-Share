<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends MY_Controller
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
        $admin_list = Admin::all();
        $view_data['admins'] = $admin_list;
        $this->load->template('admin/admins/index.php', $view_data);
    }

    public function new_form($resource=NULL)
    {
        $view_data['admin_group_types'] =  $this->admin_types();
        $this->load->template('admin/admins/new_form.php', $view_data);
    }

    public function edit($id)
    {
        $admin_details = Admin::find_by_id($id);
        $view_data['page_title']        = 'Admin';
        $view_data['resource']          = $admin_details;
        $view_data['select_admin_type'] = $admin_details->admin_type->id;
        $view_data['admin_group_types'] = $this->admin_types();
        $this->load->template('admin/admins/edit.php', $view_data);
    }

    private function admin_types()
    {
        $result = [];
        $admin_types = AdminType::all([
            'conditions' => [
                'is_published' => 1
            ]
        ]);
        foreach ($admin_types as $admin)
        {
            $result[$admin->id] = $admin->group_name;
        }
        return $result;
    }
}

/* End of file admins.php */
/* Location: ./application/controllers/admins.php */