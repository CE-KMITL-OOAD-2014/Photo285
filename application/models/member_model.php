<?php
	class Member_model extends CI_Model{
		function register($data){
			$this->db->insert('account',$data);	
		}	
		
		function login($ID, $pass){
			$this -> db -> select('ID,pass');
			$this -> db -> from('account');
			$this -> db -> where('ID', $ID);
			$this -> db -> where('pass',$pass);
			$this -> db -> limit(1);
			$query = $this -> db -> get();
			if($query -> num_rows() == 1){
				 return $query->result();
			}
			else{
			return false;
			}
		}
	}
?>