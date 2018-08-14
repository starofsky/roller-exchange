<?php
defined('ADMIN') OR exit('No direct script access allowed');

class Ann extends AdminController {

	public function index()
	{
		$data = $this->db->get("symbol")->result();
		
		$this->view('ann/coind',["data" => $data]);
	}

	public function create(){
		$data = $this->apis->get("market/symbol");
		$this->view('ann/create',["data" => $data]);
	}


	public function validate_create_ann(){
		$status = ($this->input->post("status") ? $this->input->post("status") : 0);
		$icon = ($this->input->post("icon") ? $this->input->post("icon") : "/uploads/coind.png");
		list($base, $symbol, $name) = explode('-',$this->input->post("coind"));
		$arv = [
			"icon" => $icon,
			"name" => $name,
			"symbol" => $symbol,
			"base" => $base,
			"status" => $status
		];
		$this->db->insert("symbol", $arv);
		$this->go("admin","ann");
	}
}