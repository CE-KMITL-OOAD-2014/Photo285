<?php
	class Member_model extends CI_Model{
		function register($data){ // สมัครสมาชิก
			$this->db->insert('account',$data); //ส่งค่าไปจัดเก็บใน database	
		}	
		
		function login($data){ //เข้าสู่ระบบ
			$newdata = array('ID' => $data['ID'],'logged_in' => TRUE);
			$this->session->set_userdata($newdata); //สร้าง session ขึ้นมาให้ user
			echo"<script language='javascript'>window.location.href = '../profile/show/".$data['ID']."';</script>"; //redirect หน้าหลัง login
		}
		
		function logout(){ // ออกจากระบบ
			$this->session->sess_destroy(); //ทำลาย session  ของ user ทิ้ง
			echo"<script language='javascript'>window.location.href = '../../';</script>";
		}
		
		
		function editprofile($data){ // แก้ไขโปรไฟล์ รับค่าข้อมูลที่จะแก้ไขทั้งหมดมาจาก controller
			$ID = $this->session->all_userdata(); //เก็บ ID ของ user
			$this->db->where('ID', $ID['ID']);
			$this->db->update('account', $data); // ส่งค่าเข้าไปจัดเก็บใน database
			echo"<script language='javascript'>window.location.href = '../profile/show/".$ID['ID']."';</script>";
		}

		function getName($data){ // ดึงค่า name จาก database โดยการส่ง ID ผู้ใช้งานเข้ามา
			$name = $this->db->where('ID',$data)->get('account');
			foreach($name->result_array() as $row){
				return $row['name'];
			}
		}
		
		function getEmail($data){ // ดึงค่า email จาก database โดยการส่ง ID ผู้ใช้งานเข้ามา
			$email = $this->db->where('ID',$data)->get('account');
			foreach($email->result_array() as $row){
				return $row['email'];
			}
		}
		
		function getDetail($data){ // ดึงค่า detail จาก database โดยการส่ง ID ผู้ใช้งานเข้ามา
			$email = $this->db->where('ID',$data)->get('account');
			foreach($email->result_array() as $row){
				return $row['detail'];
			}
		}
		
		function getResume($data){ // ดึงค่า resume จาก database โดยการส่ง ID ผู้ใช้งานเข้ามา
			$email = $this->db->where('ID',$data)->get('account');
			foreach($email->result_array() as $row){
				return $row['resume'];
			}
		}
	}
?>