<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends AccountController {
	public function index(){
		$this->db->group_by("symbol");
		$data = $this->db->get("symbol")->result();
		
		$apis = $this->apis->post("account/wallet");
		return $this->view("account/myaccount",["data" => $data]);
	}

	public function register(){
		return $this->view("account/register");
	}


	public function login(){
		return $this->view("account/login");
	}

	public function logout(){
		return $this->view("account/myaccount");
	}

}