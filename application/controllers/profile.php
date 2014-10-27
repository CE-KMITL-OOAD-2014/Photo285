<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function show(){
		if ($this->uri->segment(3) === FALSE){
			$profileID = 0;
		}
		else{
			$profileID = $this->uri->segment(3);
			$this->load->model('view/profile');
			$this->profile->show($profileID);
		}
	}
}

