<?
		/*
		if($this->session->userdata('ID')){
			$ID = $this->session->all_userdata();
			echo "username: ".$ID['ID']."<br/>";
						
			$data = $this->db->where('ID',$ID['ID'])->get('account');
			foreach($data->result_array() as $row){
				echo"name: ".$row['name']."<br/>";
				echo"email: ".$row['email']."<br/>";
			}
		*/
		echo $id."<br/>";
		$data = $this->db->where('ID',$id)->get('account');
		foreach($data->result_array() as $row){
			echo"name: ".$row['name']."<br/>";
			echo"email: ".$row['email']."<br/>";
		}
		
		//รูปตรงกลางอันบน
		$datam1 = $this->db->where('nameuser',$id)->where('showm1',"1")->get('picture');
		foreach($datam1->result_array() as $row){
			echo"Photom1ID: ".$row['ID']."<br/>";
		}
						
		//รูปตรงกลางอันล่าง
		$datam2 = $this->db->where('nameuser',$id)->where('showm2',"1")->get('picture');
		foreach($datam2->result_array() as $row){
			echo"Photom2ID: ".$row['ID']."<br/>";
		}
						
		//รูปด้านขวาอันที่ 1
		$datar1 = $this->db->where('nameuser',$id)->where('showr1',"1")->get('picture');
		foreach($datar1->result_array() as $row){
			echo"Photor1ID: ".$row['ID']."<br/>";
		}
						
		//รูปด้านขวาอันที่ 2
		$datar2 = $this->db->where('nameuser',$id)->where('showr2',"1")->get('picture');
		foreach($datar2->result_array() as $row){
			echo"Photor2ID: ".$row['ID']."<br/>";
		}
						
		//รูปด้านขวาอันที่ 3
		$datar3 = $this->db->where('nameuser',$id)->where('showr3',"1")->get('picture');
		foreach($datar3->result_array() as $row){
			echo"Photor3ID: ".$row['ID']."<br/>";
		}
						
		//รูปด้านขวาอันที่ 4
		$datar4 = $this->db->where('nameuser',$id)->where('showr4',"1")->get('picture');
		foreach($datar4->result_array() as $row){
			echo"Photor4ID: ".$row['ID']."<br/>";
		}			
?>