<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function show(){
		if ($this->uri->segment(3) === FALSE){
			$id = 0;
		}
		else{
			$id = $this->uri->segment(3);
			$data['id'] = $id;
			$this->load->view('profile',$data);
			/*
			//
			echo $id."<br/>";
			$data = $this->db->where('ID',$id)->get('account');
			foreach($data->result_array() as $row){
				echo"name: ".$row['name']."<br/>";
				echo"email: ".$row['email']."<br/>";
			}
			
			//IDpicture photom1 if "1" in database show picture
			$datam1 = $this->db->where('nameuser',$id)->where('showm1',"1")->get('picture');
			foreach($datam1->result_array() as $row){
				echo"Photom1ID: ".$row['ID']."<br/>";
			}
							
			//IDpicture photom2 if "1" in database show picture
			$datam2 = $this->db->where('nameuser',$id)->where('showm2',"1")->get('picture');
			foreach($datam2->result_array() as $row){
				echo"Photom2ID: ".$row['ID']."<br/>";
			}
							
			//IDpicture photor1 if "1" in database show picture
			$datar1 = $this->db->where('nameuser',$id)->where('showr1',"1")->get('picture');
			foreach($datar1->result_array() as $row){
				echo"Photor1ID: ".$row['ID']."<br/>";
			}
							
			//IDpicture photor2 if "1" in database show picture
			$datar2 = $this->db->where('nameuser',$id)->where('showr2',"1")->get('picture');
			foreach($datar2->result_array() as $row){
				echo"Photor2ID: ".$row['ID']."<br/>";
			}
							
			//IDpicture photor3 if "1" in database show picture
			$datar3 = $this->db->where('nameuser',$id)->where('showr3',"1")->get('picture');
			foreach($datar3->result_array() as $row){
				echo"Photor3ID: ".$row['ID']."<br/>";
			}
							
			//IDpicture photor4 if "1" in database show picture
			$datar4 = $this->db->where('nameuser',$id)->where('showr4',"1")->get('picture');
			foreach($datar4->result_array() as $row){
				echo"Photor4ID: ".$row['ID']."<br/>";
			}
			*/
		}
	}
}

