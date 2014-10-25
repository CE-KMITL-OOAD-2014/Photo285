<?
if($this->session->userdata('ID')){
	$ID = $this->session->all_userdata();
	echo $ID['ID'];
	$data = $this->db->where('ID'=>$ID['ID'])->get('account');
	echo $data['name'];
	echo $data['email'];

 }
?>