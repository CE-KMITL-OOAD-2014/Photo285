<?php
	class Member_model extends CI_Model{
		function register($data){
			$this->db->insert('account',$data);	
		}	
		
		/*
		function showProfile($data){
			$ID = $dataID['ID'];
			$show = $this->db->where('ID',$ID)->get('account');
			return $show;
		}
		*/
		function getName($data){
			$name = $this->db->where('ID',$data)->get('account');
			foreach($name->result_array() as $row){
				return $row['name'];
			}
		}
		
		function getEmail($data){
			$email = $this->db->where('ID',$data)->get('account');
			foreach($email->result_array() as $row){
				return $row['email'];
			}
		}
		
		function getDetail($data){
			$email = $this->db->where('ID',$data)->get('account');
			foreach($email->result_array() as $row){
				return $row['detail'];
			}
		}
		
		function getResume($data){
			$email = $this->db->where('ID',$data)->get('account');
			foreach($email->result_array() as $row){
				return $row['resume'];
			}
		}
	}
?>