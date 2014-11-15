<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Onephoto extends CI_Controller {

	public function show(){
		$idphoto = $this->uri->segment(3);
		$callprofile = $this->db->where('ID',$idphoto)->get('picture');
		$callprofile = $callprofile->result_array();
		foreach($callprofile as $row){
			$idprofile = $row['nameuser']; // ส่ง ID photo เข้าไป load id profile
		}
		
		//load photo หน้าหลัก
		$this->load->model('like_model','like_model');
		$numlike = $this->like_model->getlike($idphoto);
		
		$data = array('idprofile' => $idprofile,'numlike'=>$numlike);
		$this->load->view('onephoto',$data);
		
	}	
	
}

?>