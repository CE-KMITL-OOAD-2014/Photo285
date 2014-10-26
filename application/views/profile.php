<?
if($this->session->userdata('ID')){
	$ID = $this->session->all_userdata();
	echo $ID['ID']."<br/>";
	
	$data = $this->db->where('ID',$ID['ID'])->get('account');
	foreach($data->result_array() as $row){
		echo"".$row['name']."<br/>";
		echo"".$row['email']."<br/>";
	}
	
	//รูปตรงกลางอันบน
	$datam1 = $this->db->where('nameuser',$ID['ID'])->where('showm1',"1")->get('picture');
	echo $datam1['ID'];
	foreach($datam1->result_array() as $row){
		echo"".$row['ID']."<br/>";
	}
	
	/*
	//รูปตรงกลางอันล่าง
	$datam2 = $this->db->where('nameuser',$ID['ID'])->where('showm2',"1")->get('picture');
	echo $datam2['ID'];
	foreach($datam2->result_array() as $row){
		echo"Photom2ID: ".$row['ID']."<br/>";
	}
	
	//รูปด้านขวาอันที่ 1
	$datar1 = $this->db->where('nameuser',$ID['ID'])->where('showr1',"1")->get('picture');
	echo $datar1['ID'];
	foreach($datar1->result_array() as $row){
		echo"Photor1ID: ".$row['ID']."<br/>";
	}
	
	//รูปด้านขวาอันที่ 2
	$datar2 = $this->db->where('nameuser',$ID['ID'])->where('showr2',"1")->get('picture');
	echo $datar2['ID'];
	foreach($datar2->result_array() as $row){
		echo"Photor2ID: ".$row['ID']."<br/>";
	}
	
	//รูปด้านขวาอันที่ 3
	$datar3 = $this->db->where('nameuser',$ID['ID'])->where('showr3',"1")->get('picture');
	echo $datar3['ID'];
	foreach($datar3->result_array() as $row){
		echo"Photor3ID: ".$row['ID']."<br/>";
	}
	
	//รูปด้านขวาอันที่ 4
	$datar4 = $this->db->where('nameuser',$ID['ID'])->where('showr4',"1")->get('picture');
	echo $datar4['ID'];
	foreach($datar4->result_array() as $row){
		echo"Photor4ID: ".$row['ID']."<br/>";
	}
	*/
 }
?>