<?php
class Uploadphoto extends CI_Controller {

	public function uploadprofile(){
		$ID = $this->session->all_userdata();
		
		$this->config =  array(
			'file_name'    => "".$ID.".jpg", //name
			'upload_path'     => "./photo/",
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
	/*
	public function uploaded(){

		$this->config =  array(
			'file_name'    => "eiei.jpg", //��ǹ����¹�����ٻ
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