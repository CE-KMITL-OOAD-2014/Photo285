<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo extends CI_Controller {

	public function show(){
		$this->load->view('navbar');
		echo "test";
		//echo $this->uri->segment(3); // nameuser
		//echo $this->uri->segment(4); // namealbum
		//$showpic = $this->db->where('nameuser',$this->uri->segment(3))->where('namealbum',$this->uri->segment(4))->get('picture');
		//foreach($showpic->result_array() as $row){
		//	echo "".$row['ID']." ";
		//}

		$this->load->view('photopage');
	}
	
	public function addphoto(){
		
	
	}
}
