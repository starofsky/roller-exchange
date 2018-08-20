<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends AccessController {
	function __construct()
	{
		parent::__construct();
		$this->layout = "access-layout";
		
	}

	public function register(){
		$this->view("account/register");
	}


	public function login(){
		//print_r($this->apis->post("account/test"));
		$this->view("account/login");
	}

	public function rpclogin(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$data = $this->apis->post("public/login",["email" => $email, "password" => $password]);

		if($data){
			if(isset($data->id) && intval($data->id) > 0){
				$this->session->set_userdata(["is_login" => $data->id,"session_id" => @$data->session_id]);
				$this->flash("success", lang("success_login"));
				
				redirect(store_url("account"));
			}else{
				$this->flash("error", lang("error_login"));
				redirect(store_url("access/login"));
			}
		}
		
	}


	public function logout(){
		$user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    	$this->session->sess_destroy();

		redirect(store_url("access/login"));
	}

}