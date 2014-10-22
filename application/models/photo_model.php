<?php
	class Photo_model extends CI_Model{
		function addPhoto($data){
			$this->db->insert('picture',$data);	
		}	
		
		function number(){
			$this->db->select_max('ID');
			return $this->db->get('picture');
		}
	}
?>