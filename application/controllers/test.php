<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index(){
		$check = $this->db->where('nameuser','admin');
		foreach($data->result_array() as $row){
			echo"".$row['namealbum'];
		}
	}	
}

