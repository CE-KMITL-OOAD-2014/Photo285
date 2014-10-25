<?
if($this->session->userdata('ID')){
	$ID = $this->session->all_userdata();
	echo $ID['ID']."<br/>";
	
	$data = $this->db->where('ID',$ID['ID'])->get('account');
	foreach($data->result_array() as $row){
		echo"".$row['name']."<br/>";
		echo"".$row['email'];
	}
	/*
	$data = $this->db->where('ID'=>$ID['ID'])->get('account');
	echo $data['name'];
	echo $data['email'];

	*/
 }
?>