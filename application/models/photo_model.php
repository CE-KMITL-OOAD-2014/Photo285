<?php
	class Photo_model extends CI_Model{
		function addPhoto($data){
			$this->db->insert('picture',$data);	
		}	
		
		function number(){
			$this->db->select('ID');
			echo $this->db->get('picture');
			return $this->db->get('picture');
		}
	}
?>