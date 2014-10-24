<?
if($this->session->userdata('ID')){
	$test = $this->session->all_userdata();
	echo $test['ID'];
 }
?>