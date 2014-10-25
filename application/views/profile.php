<?
if($this->session->userdata('ID')){
	$ID = $this->session->all_userdata();
	echo $ID['ID'];
	echo $ID['ID'];
	echo $ID['pass'];
 }
?>