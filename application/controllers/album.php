<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Album extends CI_Controller {

	public function show(){
		if ($this->uri->segment(3) === FALSE){ //ตรวจสอบว่ามี segment ที่ 3 ไหมถ้าไม่มีให้ redirect ไปหน้าแรก
			echo"<script language='javascript'>
			window.location.href = '../../';
			</script>";
		}
		else{
			$check = $this->db->where('ID',$this->uri->segment(3))->count_all_results('account'); //เก็บค่าว่าใน db มีโปรไฟล์นี้หรือไม่
			if($check==1){ // เช็คว่าใส่ profile ถูกไหม
				$id = $this->uri->segment(3); // ถ้ามี / อันที่ 3 เช่น (web.net/profile/show/admin) user คือ admin ก็เอามาเก็บในตัวแปล id
			
				//load all
				$this->load->model('member_model');
				$name = $this->member_model->getName($id);
				$email = $this->member_model->getEmail($id);
				$resume = $this->member_model->getResume($id);
				$data = array('name' => $name , 'id' => $id , 'email' => $email, 'resume' => $resume);
				$this->load->view('navbar');
				$this->load->view('albumpage',$data); //ส่งค่าต่างๆไปโชว์ที่ albumpage
			}
			else echo"<script language='javascript'>window.location.href = '../../';</script>"; //ถ้า profile ไม่ถูก redirect ไปหน้าแรก
		}
	}
	
	public function create(){ // create album
		$namealbum = $_POST["namealbum"];
		$ID = $this->session->all_userdata();
		$check = $this->db->where('nameuser',$ID['ID'])->where('namealbum',$namealbum)->count_all_results('album'); //เก็บค่าว่า user เคยสร้างชื่อ album นี้แล้วหรือยัง
		
		if($check==1){ //กรณีนี้เคยแล้วให้ redirect ไป หน้า album
			echo "<script language='javascript'>
					alert('duplicate album');
					window.location.href = 'show/".$ID['ID']."';
				</script>";
		}
		else { // กรณีนี้ยังไม่เคย ไปเรียกใช้ function ใน model เพื่อสร้าง album
			$data = array('namealbum' => $namealbum,'nameuser'=> $ID['ID']);
			$this->load->model('album_model','album_model');
			$this->album_model->create($data);
		}
	}
	
	public function delete(){ // delete album
		$checkdelete = $_POST["checkdelete"]; // เก็บชื่อ album ที่ต้องการจะ delete
		$ID = $this->session->all_userdata();
		$data = array('nameuser' => $ID['ID'] , 'namealbum'=>$checkdelete);
		$this->load->model('album_model','album_model');
		$this->album_model->delete($data); //ส่งค่าที่เก็บไปทำงานที่ function ใน model เพื่อ delete album
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */