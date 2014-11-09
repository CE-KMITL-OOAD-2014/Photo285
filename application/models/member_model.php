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
		function getName(){
			if($this->session->userdata('ID')){ 
				$ID = $this->session->all_userdata();
				$ID = "".$ID['ID'];
				//echo $ID;
				echo "<script>alert($ID);</script>";
			}
			//$ID = $this->session->all_userdata();
			//echo "<script>alert('test');</script>";
			//$name = $this->db->where('name',$ID['ID'])->get('account');
			//foreach($name->result_array() as $row){
			//	return $row['name'];
			//}
			else echo "<script>alert('fail');</script>";
		}
		
	}
?>