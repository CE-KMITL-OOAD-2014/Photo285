<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
		
	public function show(){ // เช็ค / อันที่ 3 ให้เป็นชื่อ username
		if ($this->uri->segment(3) === FALSE){ // ถ้าไม่มี / อันที่ 3 ให้เซตค่า 0
			echo"<script language='javascript'>
			window.location.href = '../../';
			</script>";
		}
		else{
			$check = $this->db->where('ID',$this->uri->segment(3))->count_all_results('account');
			if($check==1){ // เช็คว่าใส่ profile ถูกไหม
				$id = $this->uri->segment(3); // ถ้ามี / อันที่ 3 เช่น (web.net/profile/show/admin) user คือ admin ก็เอามาเก็บในตัวแปล id
	
				//loadรายละเอียดส่วนตัวต่างๆ ชื่อ อีเมลล์ ข่าวสาร ประวัติส่วนตัว
				
				$this->load->model('member_model','member_model');
				$name = $this->member_model->getName($id);
				$email = $this->member_model->getEmail($id);
				$detail = $this->member_model->getDetail($id);
				$resume = $this->member_model->getResume($id);
				
				//load ชื่อ photo ที่จะให้แสดงผลในหน้าหลัก 
				$this->load->model('photomain_model','photomain_model');
				$photom1 = $this->photomain_model->getphotom1($id);
				$photom2 = $this->photomain_model->getphotom2($id);
				$photom3 = $this->photomain_model->getphotom3($id);
				$photom4 = $this->photomain_model->getphotom4($id);
				
				$data = array('name' => $name , 'id' => $id , 'email' => $email , 'detail' => $detail , 'resume' => $resume , 'photom1' => $photom1 , 'photom2' => $photom2 , 'photom3' => $photom3 ,'photom4' => $photom4);
				
				$this->load->view('navbar');
				$this->load->view('profile',$data);
			}
			else echo"<script language='javascript'>window.location.href = '../../';</script>"; //ถ้า profile ไม่ถูก redirect ไปหน้าแรก

		}
	}
}

