<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Like extends CI_Controller {

	public function sentlike(){
		$idphoto = $this->uri->segment(4); // ดึงค่า idphoto มาเก็บไว้จาก segment 4
		$iduser = $this->uri->segment(3); // ดึงค่า iduser มาเก็บไว้จาก segment 3
		$data = array('idphoto'=>$idphoto ,'iduser'=>$iduser); 
		$this->load->model('like_model','like_model');
		$this->like_model->addlike($data);	//ส่งค่าเข้าไปทำที่ like_model
	}

}
