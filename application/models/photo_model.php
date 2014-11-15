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
		
		function getphotom1($iduser){ // รูปโชว์หน้าหลักรูปแรก
			$check = $this->db->where('nameuser',$iduser)->where('showm1',1)->count_all_results('picture');
				if($check == 1){
					$show = $this->db->where('nameuser',$iduser)->where('showm1',1)->get('picture');
					$show = $show->result_array();
					foreach($show as $row) $show = $row['ID'];
					return $show;
				}
				else return 0;
		}
		
		function getphotom2($iduser){ //รูปโชว์หน้าหลักรูปสอง
			$check = $this->db->where('nameuser',$iduser)->where('showm2',1)->count_all_results('picture');
				if($check == 1){
					$show = $this->db->where('nameuser',$iduser)->where('showm2',1)->get('picture');
					$show = $show->result_array();
					foreach($show as $row) $show = $row['ID'];
					return $show;
				}
				else return 0;
		}
		
		function getphotom3($iduser){ //รูปโชว์หน้าหลักรูปสาม
			$check = $this->db->where('nameuser',$iduser)->where('showm3',1)->count_all_results('picture');
				if($check == 1){
					$show = $this->db->where('nameuser',$iduser)->where('showm3',1)->get('picture');
					$show = $show->result_array();
					foreach($show as $row) $show = $row['ID'];
					return $show;
				}
				else return 0;
		}
		
		function getphotom4($iduser){
			$check = $this->db->where('nameuser',$iduser)->where('showm4',1)->count_all_results('picture');
				if($check == 1){
					$show = $this->db->where('nameuser',$iduser)->where('showm4',1)->get('picture');
					$show = $show->result_array();
					foreach($show as $row) $show = $row['ID'];
					return $show;
				}
				else return 0;
		}
		
		function setphotom1($idphoto){
			$callprofile = $this->db->where('ID',$idphoto)->get('picture'); // ดึงชื่อ user ออกมา
			$callprofile = $callprofile->result_array();
			foreach($callprofile as $row) $callprofile = $row['nameuser']; // ได้ชื่อ user 
			echo "nameprofile: ".$callprofile;
			$checkmainphoto = $this->db->where('nameuser',$callprofile)->where('showm1',1)->count_all_results('picture'); // ดึงค่าจาก db มาตรวจสอบว่ามีการเซต mainphoto1 ไปแล้วหรือยัง
			if($checkmainphoto==0){
				$showm1 = 1;
				$data = array('showm1'=>$showm1);
				$this->db->where('ID',$idphoto);
				$this->db->update('picture',$data);
			}
			//else {
			//	$showm1 = 0;
			//	$this->db->where('nameuser',$callprofile)->update('picture',$showm1);
			//
			//}
		}
		
		function setphotom2($idphoto){
			echo "m2 ".$idphoto;
		}
		
		function setphotom3($idphoto){
			echo "m3 ".$idphoto;
		}
		
		function setphotom4($idphoto){
			echo "m4 ".$idphoto;
		}
		
		
	}
?>