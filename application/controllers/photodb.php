<?php
class Photodb extends CI_Controller {

	public function uploadprofile(){
		$ID = $this->session->all_userdata(); // จัดเก็บชื่อ user ที่ทำการ login อยู่
		
		$this->config =  array( // upload photo เข้าไปเก็บไว้ใน server
			'file_name'    => "".$ID['ID'].".jpg", //name
			'upload_path'     => "./photo/profile",
			'allowed_types'   => "jpg|png|jpeg|gif",
			'overwrite'       => TRUE,
			'max_size'        => "1000KB",
			'max_height'      => "2000",
			'max_width'       => "2000"  
		);
		$this->load->library('upload', $this->config);
		
		if($this->upload->do_upload()){ // ถ้าทำการ upload สำเร็จ
			$ID = $this->session->all_userdata();
			echo "
			    <div class='progress progress-striped active'>
				<div class='bar' style='width: 40%;'></div>
				</div>
			<script language='javascript'>
					alert('Upload Complete');
					window.location.href = '../../profile/show/".$ID['ID']."';
				</script>";
			
		}
		else{ // ถ้าทำการ upload ไม่สำเร็จ
			echo "<script language='javascript'>
					alert('Upload Fail');
					window.location.href = '../../member/editprofile';
				</script>";
		}
		
	}
	
	public function upphoto(){ //upload photo ปกติ
		$ID = $this->session->all_userdata(); // เก็บ id user ที่ทำการ login อยู่
		
		$this->db->select_max('ID'); //ดึงค่า ID photo ล่าสุดใน db ออกมา
		$sID = $this->db->get('picture'); // ดึงจากใน picture
		$sID = $sID->result_array();
		foreach($sID as $row) $sID = $row['ID']+1; // นำไอดีมาทำการ +1
		$data = array('ID'=>$sID,'nameuser'=>$ID['ID'],'namealbum'=>$this->uri->segment(3));
		
		$this->config =  array( // จัดเก็บรูปลง server 
			'file_name'    => "".$sID.".jpg", //name
			'upload_path'     => "./photo/",
			'allowed_types'   => "jpg|png|jpeg|gif",
			'overwrite'       => TRUE,
			'max_size'        => "1000KB",
			'max_height'      => "2000",
			'max_width'       => "2000"  
		);
		$this->load->library('upload', $this->config);
		
		if($this->upload->do_upload()){ // ถ้า upload สำเร็จ
			$ID = $this->session->all_userdata();
			echo "<script language='javascript'>
					alert('Upload Complete');
					window.location.href = '../../../../photo/show/".$ID['ID']."/".$this->uri->segment(3)."';
				</script>";
			$this->load->model('updelphoto_model','updelphoto_model');
			$this->updelphoto_model->upphoto($data); // เอาข้อมูล photo ไปจัดเก็บใน database ผ่าน updelphoto_model
			
		}
		else{ // ถ้า upload ไม่สำเร็จ
			echo "<script language='javascript'>
					alert('Upload Fail');
					window.location.href = '../../../../album/show/".$ID['ID']."';
				</script>";
		}
	}
	
	public function deletephoto(){ // ลบรูปทิ้ง
		$idphoto = $this->uri->segment(3); // ดึงค่า idphoto มาจาก segment ที่ 3
		$callprofile = $this->db->where('ID',$idphoto)->get('picture'); // เอาค่า idphoto ไปหาชื่อเจ้าของรูปและชื่ออัลบั้ม
		$callprofile = $callprofile->result_array();
		foreach($callprofile as $row){
			$idprofile = $row['nameuser']; // เก็บชื่อเจ้าของรูป
			$idalbum = $row['namealbum']; // เก็บชื่ออัลบั้ม
		}
		
		$this->load->model('updelphoto_model','updelphoto_model');
		$this->updelphoto_model->delphoto($idphoto); //ส่งไปที่ updelphoto_model เพื่อไปเรียกใช้ delphoto ทำการลบรูป
		echo "<script language='javascript'>
					alert('Delete Complete');
					window.location.href = '../../../../photo/show/".$idprofile."/".$idalbum."';
				</script>";
	}
		
	public function setmainphoto(){ //set รูปให้อยู่ที่หน้าหลักมี 4 รูป
		$setmain = $_POST["setmain"]; //เก็บค่าว่าจะไปเซตที่รูปไหน 1 2 3 หรือ 4
		
		//set main photo 
		$this->load->model('photomain_model','photomain_model');
		if($setmain == 1){ // ถ้า set ให้อยู่ตำแหน่งที่ 1
			$this->photomain_model->setphotom1($this->uri->segment(3));
		}
		
		if($setmain == 2){ // ถ้า set ให้อยู่ตำแหน่งที่ 2
			$this->photomain_model->setphotom2($this->uri->segment(3));
		}
		
		if($setmain == 3){ // ถ้า set ให้อยู่ตำแหน่งที่ 3
			$this->photomain_model->setphotom3($this->uri->segment(3));
		}
		
		if($setmain == 4){ // ถ้า set ให้อยู่ตำแหน่งที่ 4
			$this->photomain_model->setphotom4($this->uri->segment(3));
		}
		
	}
}
?>