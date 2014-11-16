<?php
	class Album_model extends CI_Model{
		
		public function create($data){ // create album
			
			$this->db->select_max('ID');
			$sID = $this->db->get('album');
			$sID = $sID->result_array();
			foreach($sID as $row) $sID = $row['ID']+1;
			$datadb = array('ID'=>$sID,'nameuser'=>$data['nameuser'],'namealbum'=>$data['namealbum']);
			$this->db->insert('album',$datadb);
			echo"<script language='javascript'>window.location.href = 'show/".$data['nameuser']."';</script>";
	
		}
		
		public function delete(){ // delete album
			$checkdelete = $_POST["checkdelete"];
			$ID = $this->session->all_userdata();
			$this->db->delete('album', array('nameuser' => $ID['ID'],'namealbum'=>$checkdelete));
			echo"<script language='javascript'>window.location.href = 'show/".$ID['ID']."';</script>";
		}
			
		
		
	}
?>                                                               