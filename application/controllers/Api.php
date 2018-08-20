<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends HomeController {
	public $json = [];
	
	public function toJson(){
		header("Content-type: application/json; charset=utf-8");
		print_r(json_encode($this->json));
	}

	public function mywallet(){
		$this->json = $this->apis->post("account/mywallet");
		$this->toJson();
	}

	public function trade($s,$b){
		$this->json = $this->apis->get("market/trade",["trade" => "{$b}/{$s}"]);
		
		$this->toJson();
	}

	public function buy($s,$b){
		$this->json = $this->apis->post("account/buy",["trade" => "{$b}/{$s}","amount" => $this->input->post("amount"),"prices" => $this->input->post("prices")]);
		$this->toJson();
	}

	public function sell($s,$b){
		$this->json = $this->apis->post("account/sell",["trade" => "{$b}/{$s}","amount" => $this->input->post("amount"),"prices" => $this->input->post("prices")]);
		$this->toJson();
	}

	public function chat(){
		$text = $this->input->post("text");
		$this->json = $this->apis->post("public/chat",["text" => $text]);
		$this->toJson();
	}

	public function chart(){
		print_r(file_get_contents("https://api.bitfinex.com/v2/candles/trade:5m:tBTCUSD/hist?limit=500"));
	}
}
?>