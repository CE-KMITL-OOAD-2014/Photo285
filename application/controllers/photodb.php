<?php
class Photodb extends CI_Controller {

	public function uploadprofile(){
		$ID = $this->session->all_userdata();
		
		$this->config =  array(
			'file_name'    => "".$ID['ID'].".jpg", //name
			'upload_path'     => "./photo/profile",
			'allowed_types'   => "jpg",
			'overwrite'       => TRUE,
			'max_size'        => "1000KB",
			'max_height'      => "768",
			'max_width'       => "1024"  
		);
		$this->load->library('upload', $this->config);
		
		if($this->upload->do_upload()){
			$ID = $this->session->all_userdata();
			echo "<script language='javascript'>
					alert('Upload Complete');
					window.location.href = '../../profile/show/".$ID['ID']."';
				</script>";
			
		}
		else{
			echo "<script language='javascript'>
					alert('Upload Fail');
					window.location.href = '../../member/editprofile';
				</script>";
		}
		
	}
	
	public function upphoto(){
		$ID = $this->session->all_userdata();
		
		//૿ŧ db
		$this->db->select_max('ID');
		$sID = $this->db->get('picture'); // �����ID �ͧ  picture
		$sID = $sID->result_array();
		foreach($sID as $row) $sID = $row['ID']+1;
		$data = array('ID'=>$sID,'nameuser'=>$ID['ID'],'namealbum'=>$this->uri->segment(3));
		
		//������ŧ server
		$this->config =  array(
			'file_name'    => "".$sID.".jpg", //name
			'upload_path'     => "./photo/",
			'allowed_types'   => "jpg",
			'overwrite'       => TRUE,
			'max_size'        => "1000KB",
			'max_height'      => "768",
			'max_width'       => "1024"  
		);
		$this->load->library('upload', $this->config);
		
		if($this->upload->do_upload()){ // ��� upload �����
			$ID = $this->session->all_userdata();
			echo "<script language='javascript'>
					alert('Upload Complete');
					window.location.href = '../../../../photo/show/".$ID['ID']."/".$this->uri->segment(3)."';
				</script>";
			$this->db->insert('picture',$data); // ૿ŧ DB
		}
		else{
			echo "<script language='javascript'>
					alert('Upload Fail');
					window.location.href = '../../../../album/show/".$ID['ID']."';
				</script>";
		}
	}
	
	public function deletephoto(){
		$checkdelete = $this->uri->segment(3);
		echo "".$checkdelete;
		$this->db->delete('picture', array('ID' => $checkdelete));
		$this->load->helper('file');
		delete_files('./path/to/directory/',$checkdelete.".jpg");
		
		
	}
	
}
?>