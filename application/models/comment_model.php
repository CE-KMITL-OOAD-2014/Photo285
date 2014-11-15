<?php
	class Comment_model extends CI_Model{
		function addcomment($data){
			//ทำเลข ID เพิ่มไปเรื่อยๆของ comment
			$this->db->select_max('ID');
			$sID = $this->db->get('comment');
			$sID = $sID->result_array();
			foreach($sID as $row) $sID = $row['ID']+1;
			$datadb = array('ID'=>$sID,'comment'=>$data['comment'],'idphoto'=>$data['idphoto'],'nameuser'=>$data['iduser']);
			$this->db->insert('comment',$datadb);
			echo "<script language='javascript'>
					alert('Set Complete');
					window.location.href = '../../../../onephoto/show/".$idphoto."/';
				</script>";
		}	
	}
?>                                                               