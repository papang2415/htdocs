<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$this->load->view("main_view"); 
	}

	public function form_validation() {
		echo "OK";
	}
}