<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Onephoto extends CI_Controller {

	public function show(){
		$this->load->view('navbar');
		$this->load->view('onephoto');
		
	}	
	
}

?>