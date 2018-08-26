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
			    $user = $this->db->get_where("account",["id" => $data->id])->row();
				$this->session->set_userdata(["is_login" => $data->id,"session_id" => @$data->session_id]);

			    if ($user->validate_f2a_code != null && $user->validate_f2a_code != "")
                {
                    $this->session->set_userdata(["is_2fa" => true]);
                    redirect(store_url("access/verify2fa"));
                }
                else
                {
                    $this->session->set_userdata(["is_2fa" => false]);
				$this->flash("success", lang("success_login"));
				redirect(store_url("account"));
                }
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

    public function verify2fa(){

        if(!$this->is_login()){
            $this->flash("error", 'Bạn cần đăng nhập hệ thống');
            redirect(store_url("access/login"));
        }

        if($this->input->post("verify") == 1){
            $verification_code = $this->input->post("2fa");

            if ($verification_code == "")
            {
                $this->flash("error", "Vui lòng nhập 2FA code");
                redirect(store_url('access/verify2fa'));
            }

            $this->load->library('GoogleAuthenticator');
            $ga = new GoogleAuthenticator();
            $user = $this->db->get_where("account",["id" => $this->session->userdata("is_login")])->row();
            $ciphertext = $user->validate_f2a_code;
            $secret = encrypt_decrypt("decrypt", $ciphertext);

            if ($ga->verifyCode($secret, $verification_code, 2)) {
                $this->session->set_userdata(["is_verify2fa" => true]);
                $this->session->set_flashdata('msg', 'Đăng nhập thành công hiện tại bạn có thể sử dụng chức năng này');
                redirect(store_url("account"));
            }
            else
            {
                $this->session->set_flashdata('error', 'Có lỗi xảy ra, vui lòng thử lại.');
                redirect(store_url('access/verify2fa'));
            }
        }

        $this->view("account/verify2fa");
    }

}