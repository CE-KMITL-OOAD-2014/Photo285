<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function show(){
		if ($this->uri->segment(3) === FALSE){
			$test = 0;
		}
		else{
			$test = $this->uri->segment(3);
			echo $test;
		}
	}
}

