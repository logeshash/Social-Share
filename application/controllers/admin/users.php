<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Controller
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
		$user_list = User::all();
		$view_data['users'] = $user_list; // can be change according to views
        $this->load->template('admin/users/index.php', $view_data); // this will load the view file
	}
}

/* End of file users.php */
/* Location: ./application/controllers/users.php */