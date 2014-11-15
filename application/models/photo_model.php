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
		
		function setphotom1($idphoto){ // set mainphoto อันที่ 1
			$callprofile = $this->db->where('ID',$idphoto)->get('picture'); // ดึงชื่อ user ออกมา
			$callprofile = $callprofile->result_array();
			foreach($callprofile as $row) $callprofile = $row['nameuser']; // เก็บค่าชื่อ user 
			$checkmainphoto = $this->db->where('nameuser',$callprofile)->where('showm1',1)->count_all_results('picture'); // ดึงค่าจาก db มาตรวจสอบว่ามีการเซต mainphoto1 ไปแล้วหรือยัง
			if($checkmainphoto==0){ // ถ้ายังไม่เคยเซตค่าใดๆเลย
				$m1set = 1;
				$data = array('showm1'=>$m1set);
				$this->db->where('ID',$idphoto);
				$this->db->update('picture',$data); //ส่งค่าไปเซตเก็บไว้ใน db
			}
			else { // เคยตั้งรูป mainphoto ไว้ก่อนแล้ว
				//reset ค่าที่เคยตั้งรูปไว้
				$m1reset = 0;
				$dataReset = array('showm1'=>$m1reset);
				$this->db->where('nameuser',$callprofile); //หาโปรไฟล์ที่เซตค่า mainphoto1 ไว้
				$this->db->update('picture',$dataReset); //ส่งค่าไป reset การตั้งค่าออก
				//set รูปใหม่
				$m1set = 1;
				$dataSet = array('showm1'=>$m1set);
				$this->db->where('ID',$idphoto); // หารูปที่ต้องการจะ set จาก db
				$this->db->update('picture',$dataSet); // ส่งค่า set ไปที่รูปต้องการจะ set เป็น mainphoto1
			
			}
		}
		
		function setphotom2($idphoto){ // set mainphoto อันที่ 2
			$callprofile = $this->db->where('ID',$idphoto)->get('picture'); // ดึงชื่อ user ออกมา
			$callprofile = $callprofile->result_array();
			foreach($callprofile as $row) $callprofile = $row['nameuser']; // เก็บค่าชื่อ user 
			$checkmainphoto = $this->db->where('nameuser',$callprofile)->where('showm2',1)->count_all_results('picture'); // ดึงค่าจาก db มาตรวจสอบว่ามีการเซต mainphoto2 ไปแล้วหรือยัง
			if($checkmainphoto==0){ // ถ้ายังไม่เคยเซตค่าใดๆเลย
				$m2set = 1;
				$data = array('showm2'=>$m2set);
				$this->db->where('ID',$idphoto);
				$this->db->update('picture',$data); //ส่งค่าไปเซตเก็บไว้ใน db
			}
			else { // เคยตั้งรูป mainphoto ไว้ก่อนแล้ว
				//reset ค่าที่เคยตั้งรูปไว้
				$m2reset = 0;
				$dataReset = array('showm2'=>$m2reset);
				$this->db->where('nameuser',$callprofile); //หาโปรไฟล์ที่เซตค่า mainphoto2 ไว้
				$this->db->update('picture',$dataReset); //ส่งค่าไป reset การตั้งค่าออก
				//set รูปใหม่
				$m2set = 1;
				$dataSet = array('showm2'=>$m2set);
				$this->db->where('ID',$idphoto); // หารูปที่ต้องการจะ set จาก db
				$this->db->update('picture',$dataSet); // ส่งค่า set ไปที่รูปต้องการจะ set เป็น mainphoto2
			
			}
		}
		
		function setphotom3($idphoto){
			echo "m3 ".$idphoto;
		}
		
		function setphotom4($idphoto){
			echo "m4 ".$idphoto;
		}
		
		
	}
?>