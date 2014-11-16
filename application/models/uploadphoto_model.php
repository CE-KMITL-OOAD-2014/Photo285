<?php
	class Uploadphoto_model extends CI_Model{
		
		public function upphoto($data){
			$datadb = array ('ID'=>$data['ID'],'nameuser'=>$data['nameuser'],'namealbum'=>$data['namealbum']);
			$this->db->insert('picture',$data);
		}
			
	}
?>                                                               