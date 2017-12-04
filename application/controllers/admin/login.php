<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller 
{
	private $admin_login_id;

	public function __construct()
	{
        parent::__construct();
		$this->admin_login_id = $this->session->userdata('admin_id');
	}

	public function index()
	{
		if ($this->admin_login_id)
		{
			redirect(site_url(ADMIN_PATH));
		}
		$view_data['test']         = "Your Application Title"; // can be change according to views
		$view_data['body_class']   = "hold-transition login-page";
		$view_data['hide_header']  = "hidden";
		$view_data['hide_sidebar'] = "hidden";
		$view_data['hide_footer']  = "hidden";
        $this->load->template('admin/login/index.php', $view_data); // this will load the view file 
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */