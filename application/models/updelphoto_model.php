<?php
	class Updelphoto_model extends CI_Model{
		
		public function upphoto($data){ // จัดเก็บ photo ลง database
			$datadb = array ('ID'=>$data['ID'],'nameuser'=>$data['nameuser'],'namealbum'=>$data['namealbum']);
			$this->db->insert('picture',$data); //ส่งข้อมูลไปจัดเก็บลง database
		}
		
		public function delphoto($data){ // ลบ photo ออกจาก database
			$this->db->delete('picture', array('ID' => $data)); // ส่งค่าไปลบออกจาก database
		}
			
	}
?>                                                               