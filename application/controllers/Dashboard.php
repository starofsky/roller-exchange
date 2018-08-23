<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends HomeController {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = $this->db->get("symbol")->result();
		
		$this->view('exchange_main',["data" => $data]);
	}

	public function exchange($base, $pair)
	{
		$data = [];
		$this->db->group_by("base");
		$symbol = $this->db->get("symbol")->result();
		$this->session->set_userdata(["base" => $base, "symbol" => $pair]);
		foreach ($symbol as $key => $value) {
			$data[$value->base] = $this->db->get_where("symbol",["base" => $value->base])->result();
		}
		$info = $this->db->get_where("symbol",["base" => $base, "symbol" => $pair])->row();
		$this->view('exchange',["data" => $data, "base" => $base, "pair" => $pair, "info" => $info]);
	}


	public function exchange_main(){
		$base = $this->session->userdata("base");
		$symbol = $this->session->userdata("symbol");
		if(!$base) $base = "BTC";
		if(!$symbol) $symbol = "ROL";
		redirect(store_url("exchange/".$base."/".$symbol));
	}

	/*
	Load reset Chart
	*/
	public function displatchart(){
		$this->load->view("chart");
	}

	/*
	Get My Task
	*/

	public function mytask(){
		if(!$this->is_login()) return false;
		$data = $this->apis->post("account/mytask");
		//print_r($data); exit();
		return $this->load->view("account/mytask",["data" => $data]);
	}

}
