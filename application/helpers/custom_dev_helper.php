<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    /*
    * Date Format
    **/
    function format_date($date, $format = null, $str_no_date = ' - ')
	{
		if ($date)
		{
			if(!is_numeric($date))
				$date = strtotime($date);
			if(empty($format))
				$format = 'd-m-Y';
			if($date>0)
				return date($format,$date);
		}
		return $str_no_date;
	}
	/*
    * Password Salt
    **/
	function get_salt_string()
	{
		$CI = & get_instance();
		$salt = $CI->config->item('password_salt');
		return ($salt);
	}
?>