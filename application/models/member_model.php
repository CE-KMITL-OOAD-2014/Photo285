<?php
	class Member_model extends CI_Model{
		function register($data){
			$this->db->insert('paeeiei',$data);
		}	
		function memberDetail(){
			$plist = $this->db->get('member');
		}
	}
?>