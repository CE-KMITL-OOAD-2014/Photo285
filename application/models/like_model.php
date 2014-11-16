<?php
	class Like_model extends CI_Model{
		function addlike($data){ //จัดเก็บ like ลง database
			$check = $this->db->where('idphoto',$data['idphoto'])->where('nameuser',$data['iduser'])->count_all_results('likedb'); // จัดเก็บค่าที่เช็คว่า user เคยทำการกด like รูปภาพนี้แล้วหรือยัง
			if($check==1){ // ถ้าเคยกดแล้วให้กลับไปแสดงผลหน้าเดิมไม่มีอะไรเปลี่ยนแปลง
				$this->db->delete('likedb', array('nameuser' => $data['iduser'],'idphoto'=>$data['idphto'])); // ส่งค่าเข้าไปจัดเก็บใน database
				echo "<script language='javascript'>
						window.location.href = '../../../../onephoto/show/".$data['idphoto']."/';
					</script>";
			}
			
			else{ //ถ้ายังไม่เคยกดให้ทำการเก็บค่าลง database
				$this->db->select_max('ID'); //ดึงค่า ID ล่าสุดมาจาก database
				$sID = $this->db->get('likedb');
				$sID = $sID->result_array();
				foreach($sID as $row) $sID = $row['ID']+1; //ทำการ + ค่าเข้าไป 1 เพื่อไว้จัดเก็บ
				$likeup = 1; 
				$datadb = array('ID'=>$sID,'likeup'=>$likeup,'idphoto'=>$data['idphoto'],'nameuser'=>$data['iduser']);
				$this->db->insert('likedb',$datadb); //ส่งค่าการกด like จัดเก็บลง database
				echo "<script language='javascript'>
						window.location.href = '../../../../onephoto/show/".$data['idphoto']."/';
					</script>";
			}
		}
		
		function getlike($idphoto){ //ดึงค่า like ของแต่ละรูปจาก database โดยใส่ id ของรูปเข้ามา
			$numlike = $this->db->where('idphoto',$idphoto)->count_all_results('likedb'); // ดึงค่า like จาก database
			return $numlike; //ส่งค่า like กลับไป
		}
		
	}
?>                                                               