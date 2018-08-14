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
		$data = $this->apis->get("market/symbol");
		
		$this->view('dashboard',["data" => $data]);
	}

	public function exchange($base, $pair)
	{
		$data = $this->apis->get("market/symbol");
		$info = $data->{$base}->{$pair};
		$this->view('exchange',["data" => $data, "base" => $base, "pair" => $pair, "info" => $info]);
	}


	public function exchange_main(){
		$data = $this->db->get("symbol")->result();
		$this->view("exchange_main",["data" => $data]);
	}
}
