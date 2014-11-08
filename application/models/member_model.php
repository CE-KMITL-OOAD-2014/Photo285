<?php
	class Member_model extends CI_Model{
		function register($data){
			$this->db->insert('account',$data);	
		}	
		
		function showProfile($data){
			$ID = $dataID['ID'];
			$show = $this->db->where('ID',$ID)->get('account');
			return $show;
		}
		
		function getName(){
			$ID = $this->session->all_userdata();
			$show = $this->db->where('name',$ID)->get('account');
			return $show;
		}
		
	}
?>