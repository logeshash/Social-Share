<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('resource_path()'))
{
	function resource_path($path = NULL, $action = NULL, $id = NULL)
	{
		if ($path == NULL)
		{
			return base_url();
		}
		$CI = & get_instance();
		$route_path = "";

		if ($CI->router->directory != NULL) $route_path = $CI->router->directory;

		switch ($action)
		{
			case "new_form":
				$route_path.= $path . "/" . $action;
				break;

			case "index":
			case "create":
				$route_path.= $path;
				break;

			case "show":
			case "update":
			case "delete":
				$route_path.= $path . "/" . $id;
				break;

			case "edit":
				$route_path.= $path . "/" . $id . "/" . $action;
				break;
		}
		return site_url($route_path);
	}
}