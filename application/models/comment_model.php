<?php
	class Comment_model extends CI_Model{
		function addcomment($data){
			echo "".$data['comment'];
			echo " ".$data['idphoto'];
			echo " ".$data['iduser'];
			//ทำเลข ID เพิ่มไปเรื่อยๆของ comment
			$this->db->select_max('ID');
			$sID = $this->db->get('comment');
			$sID = $sID->result_array();
			foreach($sID as $row) $sID = $row['ID']+1;
			echo " ".$sID;
		}	
	}
?>                                                               