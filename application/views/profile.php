<?
if($this->session->userdata('ID')){
	$ID = $this->session->all_userdata();
	echo $ID['ID']."<br/>";
	
	$data = $this->db->where('ID',$ID['ID'])->get('account');
	foreach($data->result_array() as $row){
		echo"".$row['name']."<br/>";
		echo"".$row['email']."<br/>";
	}
	
	$datam1 = $this->db->where('nameuser',$ID['ID'])->where('showm1',"1")->get('picture');
	if($datam1 == NULL) echo "fail";
	foreach($datam1->result_array() as $row){
		echo"Photom1ID: ".$row['ID']."<br/>";
	}
	
	
	
	
	/*
	$data = $this->db->where('ID'=>$ID['ID'])->get('account');
	echo $data['name'];
	echo $data['email'];

	*/
 }
?>