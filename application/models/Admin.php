<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Admin extends ActiveRecord\Model
{
    static $belongs_to = [
        [
            'admin_type',
        ]
    ];

    /**
     * Stores admin user details in session
     */
    public function admin_session()
    {
        $CI = & get_instance();

        $session_id = $CI->session->userdata('session_id');
        $user_data = [
            'admin_id'   => $this->id,
            'session_id' => $session_id,
        ];
        $CI->session->set_userdata($user_data);
        
        $this->session_id = $session_id;
        $this->save(FALSE);
    }
}