<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Member_model extends CI_Model{
		function register($data){
			$this->db->insert('UserDBE',$data);	
		}	
	}
?>