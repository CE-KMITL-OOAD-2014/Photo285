<?php
	class Photo_model extends CI_Model{
		function addPhoto($data){
			$this->db->insert('picture',$data);	
		}	
	}
?>