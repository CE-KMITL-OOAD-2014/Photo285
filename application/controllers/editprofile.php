<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editprofile extends CI_Controller {

	public function index(){
		if($this->session->userdata('ID')){
			$ID = $this->session->all_userdata();
			$this->load->view('editprofile');
		}
		else $this->load->view('mainsite');
	}
}
