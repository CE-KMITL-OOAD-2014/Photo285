<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {

	public function sendcommend(){
		$comment = $_POST["comment"];
		$idphoto = $this->uri->segment(3); //ดึงค่าไอดี photo มาเก็บจาก segment ที่ 3
		$iduser = $this->uri->segment(4); //ดึงค่าไอดี user มาเก็บจาก segment ที่ 4
		$data = array('comment'=>$comment , 'idphoto'=>$idphoto ,'iduser'=>$iduser);
		$this->load->model('comment_model','comment_model');
		$this->comment_model->addcomment($data); // ส่งค่าทั้งหมดเข้าไปทำใน comment_model เพื่อจัดเก็บ comment
	}
}
