<?php
	class Photo_model extends CI_Model{
		function addPhoto($data){
			$this->db->insert('picture',$data);	
		}	
		
		function addAlbum($data){
			$this->db->insert('album',$data);
		
		}
		
		function getPhoto($dataID){
			$ID = $dataID['ID'];
			$show = $this->db->where('ID',$ID)->get('picture');
			return $show;
		}
		
		function getAlbum($albumID){
			$ID = $albumID['ID'];
			$show = $this->db->where('ID',$ID)->get('album');
			return $show;
		}
		
		function number(){
			$this->db->select_max('ID');
			$ID = $this->db->get('picture');
			return $ID->result_array();
		}
		
		function getphotom1($iduser){
			$check = $this->db->where('nameuser',$iduser)->where('showm1',1)->count_all_results('picture');
				if(check == 1){
					$show = $this->db->where('nameuser',$iduser)->where('showm1',1)->get('picture');
					$show = $show->result_array();
					foreach($show as $row) $show = $row['ID'];
					return $show;
				}
				else return 0;
		}
	
	}
?>