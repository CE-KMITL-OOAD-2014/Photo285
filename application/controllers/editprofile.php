<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editprofile extends CI_Controller {

	public function index(){
		if($this->session->userdata('ID')){
			$ID = $this->session->all_userdata();
			
			//load all
			$this->load->model('member_model');
			$name = $this->member_model->getName($ID['ID']);
			//$email = $this->member_model->getEmail($ID['ID']);
			$data = array('name' => $name , 'id' => $ID['ID']);
			//$temp = array( 'detail' => $detail, 'pdata' => $pdata);
			$this->load->view('editprofile',$data);
		}
		else $this->load->view('mainsite');
	}
}
