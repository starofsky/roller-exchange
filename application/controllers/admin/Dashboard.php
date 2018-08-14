<?php
defined('ADMIN') OR exit('No direct script access allowed');

class Dashboard extends AdminController {

	public function index()
	{
		$data = $this->apis->get("market/symbol");
		
		$this->view('dashboard',["data" => $data]);
	}
}