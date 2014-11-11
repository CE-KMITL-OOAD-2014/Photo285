<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index(){
		$check = $this->db->where('nameuser','admin');
		echo "".$check;
	}
	
}

