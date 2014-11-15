<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {

	public function sendcommend(){
		$comment = $_POST["comment"];
		$idphoto = $this->uri->segment(3);
		$iduser = $this->uri->segment(4);
		$data = array('comment'=>$comment , 'idphoto'=>$idphoto ,'iduser'=>$iduser);
		echo "".$comment;
		echo " ".$idphoto;
		echo " ".$iduser;
		//load photo หน้าหลัก
		$this->load->model('comment_model','comment_model');
		//$this->comment_model->addcomment($id);
		
		
	}
	
}
