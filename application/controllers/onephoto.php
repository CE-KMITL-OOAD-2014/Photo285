<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Onephoto extends CI_Controller {

	public function show(){
		$idphoto = $this->uri->segment(3); //จัดเก็บ idphoto
		$callprofile = $this->db->where('ID',$idphoto)->get('picture'); //ดึงชื่อเจ้าของรูปออกมาจัดเก็บจาก database
		$callprofile = $callprofile->result_array(); 
		foreach($callprofile as $row){
			$idprofile = $row['nameuser']; // จัดเก็บชื่อเจ้าของรูป
		}
		
		//load photo หน้าหลัก
		$this->load->model('like_model','like_model');
		$numlike = $this->like_model->getlike($idphoto); //ดึงค่า like มาจาก database โดยการส่ง idphoto เข้าไปที่ like_model
		
		$data = array('idprofile' => $idprofile,'numlike'=>$numlike);
		$this->load->view('onephoto',$data);
		
	}	
	
}

?>