<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Like extends CI_Controller {

	public function sendcommend(){
		$idphoto = $this->uri->segment(3);
		$iduser = $this->uri->segment(4);
		$data = array('idphoto'=>$idphoto ,'iduser'=>$iduser);
		$this->load->model('like_model','like_model');
		$this->like_model->addlike($data);	
	}
}
