<?php
/**
 * 
 */
class MY_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
}

class DB_Model extends CI_Model
{
	public $is_public = false;
	public $is_private = true;
	public $business = false;
	public $limit_connect = false;
	
	function __construct()
	{
		parent::__construct();
	}
}