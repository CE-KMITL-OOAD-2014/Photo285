<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//redirect ไปหน้า profile กรณี login แล้ว
		if($this->session->userdata('ID')){ // แสดงชื่อโปรไฟล์ตัวเอง
			$ID = $this->session->all_userdata();
			 header('Location: '.'../../../../profile/show/'.$ID["ID"]);
		}
		
		$this->load->view('mainsite'); //เรียกใช้ mainsite เป็นหน้าเว็บหลัก
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */