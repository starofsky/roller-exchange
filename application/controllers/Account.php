<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends AccountController {
	public function index(){
		return $this->profiles();
	}

	public function profiles(){
		$this->db->group_by("symbol");
		$data = $this->db->get("symbol")->result();
		
		$apis = $this->apis->post("account/wallet");
		return $this->view("account/myaccount",["data" => $data]);
	}

	/*
	Wallet Member
	*/
	public function wallet(){
		$this->db->group_by("symbol");
		$data = $this->db->get("symbol")->result();
		
		$apis = $this->apis->post("account/wallet");
		return $this->view("account/myaccount",["data" => $data]);
	}

	/*
	F2A authentication
	*/
	public function authentication(){
		$this->db->group_by("symbol");
		$data = $this->db->get("symbol")->result();
		
		$apis = $this->apis->post("account/wallet");
		return $this->view("account/myaccount",["data" => $data]);
	}


	/*
	referrals
	*/
	public function referrals(){
		$this->db->group_by("symbol");
		$data = $this->db->get("symbol")->result();
		
		$apis = $this->apis->post("account/wallet");
		return $this->view("account/myaccount",["data" => $data]);
	}


	/*
	password
	*/
	public function password(){
		$this->db->group_by("symbol");
		$data = $this->db->get("symbol")->result();
		
		$apis = $this->apis->post("account/wallet");
		return $this->view("account/myaccount",["data" => $data]);
	}


	/*
	history
	*/
	public function history(){
		$this->db->group_by("symbol");
		$data = $this->db->get("symbol")->result();
		
		$apis = $this->apis->post("account/wallet");
		return $this->view("account/myaccount",["data" => $data]);
	}


	/*
	api
	*/
	public function api(){
		$this->db->group_by("symbol");
		$data = $this->db->get("symbol")->result();
		
		$apis = $this->apis->post("account/wallet");
		return $this->view("account/myaccount",["data" => $data]);
	}

	/*
	api
	*/
	public function notifications(){
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