<?php
	class Updelphoto_model extends CI_Model{
		
		public function upphoto($data){
			$datadb = array ('ID'=>$data['ID'],'nameuser'=>$data['nameuser'],'namealbum'=>$data['namealbum']);
			$this->db->insert('picture',$data);
		}
		
		public function delphoto($data){
			$this->db->delete('picture', array('ID' => $data));
		}
			
	}
?>                                                               