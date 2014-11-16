<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo extends CI_Controller {

	public function show(){
		$id = $this->uri->segment(3); // ถ้ามี / อันที่ 3 เช่น (web.net/profile/show/admin) user คือ admin ก็เอามาเก็บในตัวแปล id
		$albumname = $this->uri->segment(4); //จัดเก็บชื่อ album จาก segment 4
		//load all
		$this->load->model('member_model'); //ดึงรายละเอียดของโปรไฟล์ต่างๆจาก member_model
		$name = $this->member_model->getName($id);
		$email = $this->member_model->getEmail($id);
		$resume = $this->member_model->getResume($id);
		$data = array('name' => $name , 'id' => $id , 'email' => $email, 'resume' => $resume , 'albumname' => $albumname);
		$this->load->view('navbar');
		$this->load->view('photopageall',$data);
		
	}	
}

?>