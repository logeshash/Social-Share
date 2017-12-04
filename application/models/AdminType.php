<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class AdminType extends ActiveRecord\Model
{
    static $has_many = [
        [
            'admin',
        ]
    ];

}