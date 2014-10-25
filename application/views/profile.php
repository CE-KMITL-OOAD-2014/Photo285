<?
if($this->session->userdata('ID')){
	$ID = $this->session->all_userdata();
	echo $ID['ID'];
	$check = $this->db->where('ID',$ID)->where('pass',$pass);
	echo $check['pass'];
 }
?>