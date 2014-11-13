<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo extends CI_Controller {

	public function show(){
		echo $this->uri->segment(3);
		echo $this->uri->segment(4);
	
	
	}
}
