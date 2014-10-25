<?
if($this->session->userdata('ID')){
	$ID = $this->session->all_userdata();
	echo $ID['ID'];
	$data = $this->db->where('ID'=>$ID)->get('acount');
	echo $data['name'];
	echo $data['email'];
 }
?>