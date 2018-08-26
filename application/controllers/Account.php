<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends AccountController {
	function __construct()
	{
		parent::__construct();
		//$this->checkAccess();

	}
	public function index(){
		return $this->profiles();
	}

	public function profiles(){
		
		//$apis = $this->apis->post("account/profiles");
		return $this->view("account/profiles",["data" => []]);
	}

	/*
	Wallet Member
	*/
	public function wallet(){
		$this->db->group_by("symbol");
		$data = $this->db->get("symbol")->result();
		
		$apis = $this->apis->post("account/wallet");

		$arv = [];
		$arv["BTC"] = new stdClass();
		$arv["BTC"]->name = "Bitcoin";
		$arv["BTC"]->symbol = "BTC";
		$arv["BTC"]->wallet = $apis->BTC->btc_address;
		$arv["BTC"]->main_amount = $apis->BTC->btc_amount;
		$arv["BTC"]->deposit_amount = $apis->BTC->btc_deposit;
		$arv["BTC"]->trade_amount_avalible = $apis->BTC->btc_trade_avalible;
		$arv["BTC"]->trade_amount_block = $apis->BTC->btc_block_balancer;
		$arv["BTC"]->status = ($apis->BTC->server && $apis->BTC->status == 1 ? 1 : 0);
		 
		foreach ($data as $key => $value) {
			$arv[$value->symbol] = $value;
			$arv[$value->symbol]->wallet = @$apis->{$value->symbol}->alt_address;
			$arv[$value->symbol]->main_amount = @$apis->{$value->symbol}->alt_amount;
			$arv[$value->symbol]->deposit_amount = @$apis->{$value->symbol}->alt_deposit;
			$arv[$value->symbol]->trade_amount_avalible = @$apis->{$value->symbol}->alt_trade_avalible;
			$arv[$value->symbol]->trade_amount_block = @$apis->{$value->symbol}->alt_block_balancer;
			$arv[$value->symbol]->status = (@$arv[$value->symbol]->server && $arv[$value->symbol]->status == 1 ? 1 : 0);
			
		}

		return $this->view("account/wallet",["data" => $arv]);
	}


	public function renderwallet($symbol){
		$data = $this->apis->post("account/gender_wallet",["symbol" => $symbol]);
		
		if($data){
			$this->flash("success", lang("success_wallet_gender"));
			redirect(store_url("account/wallet"));
		}else{
			$this->flash("error", lang("error_wallet_gender"));
			redirect(store_url("account/wallet"));
		}
	}

	/*
	Remove Task
	*/

	public function removetask($id){
		$this->apis->post("account/cancel",["id" => $id]);
		redirect(store_url("exchange"));
	}

	/*
	F2A authentication
	*/
	public function authentication(){
        $this->load->library('GoogleAuthenticator');
        $ga = new GoogleAuthenticator();
        $user = $this->db->get_where("account",["id" => $this->session->userdata("is_login")])->row();
        $email = $user->email;
        $actived_2fa = ($user->validate_f2a_code == null || $user->validate_f2a_code == "")? false : true;
		
        if ($this->input->post("security") == 1) {
            $secret = $this->input->post("secret");
            $verification_code = $this->input->post("verification_code");

            if ($secret == "")
            {
                $this->flash("error", "Vui lòng nhập 2FA code");
                redirect(store_url('account/authentication'));
            }

            if ($ga->verifyCode($secret, $verification_code, 2)) {
                $ciphertext = encrypt_decrypt("encrypt",$secret);

                $data = $this->db->update("account",["validate_f2a_code" => $ciphertext],["id" => $this->session->userdata("is_login")]);

                if ($data) {
                    $this->flash("success", "Kích hoạt 2FA thành công");
                    redirect(store_url('account/authentication'));
                } else {
                    $this->flash("error", "Kích hoạt 2FA lỗi, vui lòng thử lại.");
                    redirect(store_url('account/authentication'));
                }
            } else {
                $this->flash("error", "Sai mã xác thực.");
                redirect(store_url('account/authentication'));
            }
        } else if ($this->input->post("security") == 2) {
            $verification_code = $this->input->post("verification_code");
            $ciphertext = $user->validate_f2a_code;
            $secret = encrypt_decrypt("decrypt", $ciphertext);

            if ($ga->verifyCode($secret, $verification_code, 2)) {
                $data = $this->db->update("account",["validate_f2a_code" => ""],["id" => $this->session->userdata("is_login")]);

                if($data)
                {
                    $this->flash("success", "Tắt 2FA thành công.");
                    redirect(store_url('account/authentication'));
                }
                else
                {
                    $this->flash("error", 'Có lỗi xảy ra, vui lòng thử lại.');
                    redirect(store_url('account/authentication'));
                }
            }
            else
            {
                $this->flash("error", 'Có lỗi xảy ra, vui lòng thử lại.');
                redirect(store_url('account/authentication'));
            }
        }

        $secret = $ga->createSecret();
        $qrCodeUrl = $ga->getQRCodeGoogleUrl($email, $secret, 'roller-exchange');

		return $this->view("account/authentication",["secret" => $secret, "qrCodeUrl" => $qrCodeUrl, "actived_2fa" => $actived_2fa]);
	}


	/*
	referrals
	*/
	public function referrals(){
		
		return $this->view("account/referrals",["data" => ""]);
	}


	/*
	password
	*/
	public function password(){
		
		return $this->view("account/password",["data" => ""]);
	}


	/*
	history
	*/
	public function history(){
		$this->db->group_by("symbol");
		$data = $this->db->get("symbol")->result();
		
		$apis = $this->apis->post("account/wallet");
		return $this->view("account/wallet",["data" => $data]);
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
	
	/*
	Make Wallet
	*/

	public function gender_wallet($symbol){
		return $this->apis->post("account/gender_wallet",["symbol" => $symbol]);
	}


	/*
	Coind Master
	*/

	public function coindmaster(){
		return $this->view("account/coindmaster");
	}

}