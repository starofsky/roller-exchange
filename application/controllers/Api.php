<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends HomeController {
	public $json = [];
	public function toJson(){
		header("Content-type: application/json; charset=utf-8");
		print_r(json_encode($this->json));
	}
	public function trade($s,$b){
		$this->json = $this->apis->get("market/trade",["trade" => "{$b}/{$s}"]);
		$this->toJson();
	}
}
?>