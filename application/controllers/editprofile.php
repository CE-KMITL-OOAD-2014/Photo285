<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editprofile extends CI_Controller {

	public function index(){
		if($this->session->userdata('ID')){
			$ID = $this->session->all_userdata();
			
			//load all
			$this->load->model('member_model');
			$name = $this->member_model->getName($ID['ID']);
			$data['name'] = $name;
			echo "test".$name;
			//
			$this->load->view('editprofile',$data);
		}
		else $this->load->view('mainsite');
	}
}
