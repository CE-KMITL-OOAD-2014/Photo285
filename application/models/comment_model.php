<?php
	class Comment_model extends CI_Model{
		function addcomment($data){
			//ทำเลข ID เพิ่มไปเรื่อยๆของ comment
			$this->db->select_max('ID'); // ดึงค่าไอดีล่าสุดมา
			$sID = $this->db->get('comment'); //ดึงค่ามาจาก table comment
			$sID = $sID->result_array();
			foreach($sID as $row) $sID = $row['ID']+1; // ทำการ + ค่าเข้าไป 1 เพื่อนำไปจัดเก็บต่อไป
			$datadb = array('ID'=>$sID,'comment'=>$data['comment'],'idphoto'=>$data['idphoto'],'nameuser'=>$data['iduser']);
			$this->db->insert('comment',$datadb); // จัดเก็บรายละเอียด comment ลง database
			echo "<script language='javascript'>
					window.location.href = '../../../../onephoto/show/".$data['idphoto']."/'; 
				</script>";
		}	
	}
?>                                                               