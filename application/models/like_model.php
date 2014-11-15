<?php
	class Like_model extends CI_Model{
		function addlike($data){
			$check = $this->db->where('idphoto',$data['idphoto'])->where('nameuser',$data['iduser'])->count_all_results('likedb');
			if($check==1){
				echo "<script language='javascript'>
						window.location.href = '../../../../onephoto/show/".$data['idphoto']."/';
					</script>";
			}
			
			else{
				$this->db->select_max('ID');
				$sID = $this->db->get('likedb');
				$sID = $sID->result_array();
				foreach($sID as $row) $sID = $row['ID']+1;
				$likeup = 1;
				$datadb = array('ID'=>$sID,'likeup'=>$likeup,'idphoto'=>$data['idphoto'],'nameuser'=>$data['iduser']);
				$this->db->insert('likedb',$datadb);
				echo "<script language='javascript'>
						window.location.href = '../../../../onephoto/show/".$data['idphoto']."/';
					</script>";
			}
		}	
	}
?>                                                               