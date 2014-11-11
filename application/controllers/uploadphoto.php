<?php
class Uploadphoto extends CI_Controller {

	public function uploadprofile(){
		$ID = $this->session->all_userdata();
		
		$this->config =  array(
			'file_name'    => "".$ID['ID'].".jpg", //name
			'upload_path'     => "./photo/profile",
			'allowed_types'   => "jpg",
			'overwrite'       => TRUE,
			'max_size'        => "1000KB",
			'max_height'      => "768",
			'max_width'       => "1024"  
		);
		$this->load->library('upload', $this->config);
		
		if($this->upload->do_upload()){
			$ID = $this->session->all_userdata();
			echo "<script language='javascript'>
					alert('Upload Complete');
					window.location.href = '../../profile/show/".$ID['ID']."';
				</script>";
			
		}
		else{
			echo "<script language='javascript'>
					alert('Upload Fail');
					window.location.href = '../../member/editprofile';
				</script>";
		}
		
	}
	/*
	public function uploaded(){

		$this->config =  array(
			'file_name'    => "eiei.jpg", //ส่วนเปลี่ยนชื่อรูป
			'upload_path'     => "./files/",
			'allowed_types'   => "gif|jpg|png|jpeg",
			'overwrite'       => TRUE,
			'max_size'        => "1000KB",
			'max_height'      => "768",
			'max_width'       => "1024"  
		);
		$this->load->library('upload', $this->config);
		
		if($this->upload->do_upload()){
			echo "file upload success";
		}
		else{
			echo "file upload failed";
		}
	}
	*/
}
?>