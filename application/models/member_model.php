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
			echo "d1".$data."<br/>";
			echo "d2".$name."<br/>";
			foreach($name->result_array() as $row){
				echo "d3".$row['name']."<br/>";
				return $row['name'];
			}
			
		}
	}
?>