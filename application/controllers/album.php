<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Album extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function show(){
		if ($this->uri->segment(3) === FALSE){ // ถ้าไม่มี / อันที่ 3 ให้เซตค่า 0
			echo"<script language='javascript'>
			window.location.href = '../../';
			</script>";
		}
		else{
			$check = $this->db->where('ID',$this->uri->segment(3))->count_all_results('account');
			if($check==1){ // เช็คว่าใส่ profile ถูกไหม
				$id = $this->uri->segment(3); // ถ้ามี / อันที่ 3 เช่น (web.net/profile/show/admin) user คือ admin ก็เอามาเก็บในตัวแปล id
			
				//load all
				$this->load->model('member_model');
				$name = $this->member_model->getName($id);
				$email = $this->member_model->getEmail($id);
				$resume = $this->member_model->getResume($id);
				$data = array('name' => $name , 'id' => $id , 'email' => $email, 'resume' => $resume);
				//$data2
				//$data3 = array('account'=>$data , 'album'=>$data2);
				$this->load->view('navbar');
				$this->load->view('albumpage',$data);
			}
			else echo"<script language='javascript'>window.location.href = '../../';</script>"; //ถ้า profile ไม่ถูก redirect ไปหน้าแรก
		}
	}
	
	public function create(){
		$namealbum = $_POST["namealbum"];
		$ID = $this->session->all_userdata();
		$check = $this->db->where('nameuser',$ID['ID'])->where('namealbum',$namealbum)->count_all_results('account');
		if($check==1){
			echo "<script language='javascript'>
					alert('มีอัลบั้มนี้แล้ว');
					window.location.href = '../../';
				</script>";
		}
		else {
			$data = array('nameuser'=>$ID['ID'],'namealbum'=>$namealbum);
			$this->db->insert('album',$data);
		}
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */