<?php
	class Member_model extends CI_Model{
		function register($data){
			$this->db->insert('account',$data);	
		}	
		
		function login($data){
			$newdata = array('ID' => $data['ID'],'logged_in' => TRUE);
			$this->session->set_userdata($newdata);
			echo"<script language='javascript'>window.location.href = '../profile/show/".$data['ID']."';</script>"; //redirect หน้าหลัง login
		}
		
		function logout(){
			$this->session->sess_destroy();
			echo"<script language='javascript'>window.location.href = '../../';</script>";
		}
		
		
		function editprofile($data){
			$ID = $this->session->all_userdata();
			$this->db->where('ID', $ID['ID']);
			$this->db->update('account', $data);
			echo"<script language='javascript'>window.location.href = '../profile/show/".$ID['ID']."';</script>";
		}

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