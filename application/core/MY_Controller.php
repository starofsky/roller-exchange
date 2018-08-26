<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller{
	public $layout = "home-layout";

	function __construct()
	{
		parent::__construct();
		$this->load->library(['session','email','user_agent','apis','curl']);
		$this->load->helper(['functions','url','form','language']);
		$this->api_setup();
	}
	

	/*
	Get Layout 
	*/
	public function getLayout(){
		$file = VIEWPATH.$this->layout.".php";
		if(file_exists($file)){
			return true;
		}
		return false;
	}

	/*
	Login Member
	*/

	public function is_login(){

		if($this->session->userdata("is_login")){
			return true;
		}else{
			return false;
		}
	}

	public function is_verify2fa()
    {
	    if (!$this->session->userdata("is_2fa") ||
            ($this->session->userdata("is_2fa") && $this->session->userdata("is_verify2fa")))
        {
            return true;
        }
        return false;
    }

	public function checkAccess(){
		if(!$this->is_login() || !$this->is_verify2fa()){
			$this->go(false,"access/login");
		}
		return true;
	}
	/*
	Return View
	*/
	public function view($layout, $data=[]){
		
		$is_login = $this->is_login();
		$data = array_merge($data,["is_login" => $is_login]);
		
		if($this->getLayout()){

			$data = $this->load->view($layout, $data, true);
			return $this->load->view($this->layout,["content" => $data, "flash" => $this->get_flash(), "header" => "","is_login" => $is_login]);
		}else{
			return $this->load->view($layout, $data);
		}
	}

	/*
	Note Flash Member
	*/
	public function flash($key, $content=""){
		$this->session->set_flashdata($key, $content);
	}
	public function get_flash(){
		$html = "";
		if($this->session->flashdata("error")){
			$html = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>'.lang("error").'!</strong> '.$this->session->flashdata("error").'.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
		}

		if($this->session->flashdata("success")){
			$html = '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  <strong>'.lang("success").'!</strong> '.$this->session->flashdata("success").'.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
		}


		if($this->session->flashdata("warning")){
			$html = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>'.lang("warning").'!</strong> '.$this->session->flashdata("warning").'.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
		}


		return $html;
	}

	public function go($type="", $url=""){
		if($type == "admin"){
			redirect(admin_url($url));
		}else{
			redirect(store_url($url));
		}
		exit();
	}


	public function api_setup(){
		
		$config['server'] = "https://api.btcrip.co/api/";
		$config['send_cookies'] = "";
		$config['api_name'] = "";
		$config['api_key'] = "";
		$config['http_auth'] = "";
		$config['http_user'] = "";
		$config['http_pass'] = "";
		$config['ssl_verify_peer'] = "";
		$config['ssl_cainfo'] = "";
		$this->apis->initialize($config);
        
	}
	
}

class AdminController extends BaseController{
	function __construct()
	{
		parent::__construct();
	}
}

class HomeController extends BaseController{
	function __construct()
	{
		parent::__construct();
	}
}

class AccountController extends BaseController{
	function __construct()
	{
		parent::__construct();
		
		$login = $this->apis->post("account/checklogin");
		if(!isset($login->status) || $login->status != "login"){
			redirect(store_url("access/logout"));
			exit();
		}
		
	}
}

class AccessController extends BaseController{
	function __construct()
	{
		parent::__construct();
	}
}
class ApiController extends CI_Controller{
}
