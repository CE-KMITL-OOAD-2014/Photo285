<?php
	class Like_model extends CI_Model{
		function addlike($data){
			$this->db->select_max('ID');
			$sID = $this->db->get('likedb');
			$sID = $sID->result_array();
			foreach($sID as $row) $sID = $row['ID']+1;
			$likeup = 1;
			$datadb = array('ID'=>$sID,'likeup'=>$likeup,'idphoto'=>$data['idphoto'],'nameuser'=>$data['iduser']);
			$this->db->insert('like',$datadb);
			echo "<script language='javascript'>
					window.location.href = '../../../../onephoto/show/".$data['idphoto']."/';
				</script>";
		}	
	}
?>                                                               