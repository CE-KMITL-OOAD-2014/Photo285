<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {

	public function sendcommend(){
		$comment = $_POST["comment"];
		echo "".$comment;
		
	}
	
}
