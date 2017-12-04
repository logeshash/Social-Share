<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Social_shares extends MY_Controller
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
        $ss_list = SocialShare::all();
        $view_data['social_shares'] = $ss_list; // can be change according to views
        $this->load->template('admin/social_shares/index.php', $view_data); // this will load the view file
    }
}

/* End of file social_shares.php */
/* Location: ./application/controllers/social_shares.php */