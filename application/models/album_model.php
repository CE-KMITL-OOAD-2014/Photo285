<?php
	class Album_model extends CI_Model{
		
		public function create($data){ // create album
			
			$this->db->select_max('ID'); //ดึงค่า ID ล่าสุดของ album ออกมา
			$sID = $this->db->get('album'); // ดึงมาจาก table ชื่อ album
			$sID = $sID->result_array();
			foreach($sID as $row) $sID = $row['ID']+1; // นำค่านั้นไป +1 เพื่อใช้สร้างเป็นไอดีของใหม่
			$datadb = array('ID'=>$sID,'nameuser'=>$data['nameuser'],'namealbum'=>$data['namealbum']);
			$this->db->insert('album',$datadb); // ส่งค่าเก็บลง database album
			echo"<script language='javascript'>window.location.href = 'show/".$data['nameuser']."';</script>"; //redirect ไปหน้า album
	
		}
		
		public function delete($data){ // delete album
			$this->db->delete('album', array('nameuser' => $data['nameuser'],'namealbum'=>$data['namealbum'])); //ส่งค่าที่รับมาจาก controller ไปลบที่ database
			echo"<script language='javascript'>window.location.href = 'show/".$data['nameuser']."';</script>";
		}
			
	}
?>                                                               