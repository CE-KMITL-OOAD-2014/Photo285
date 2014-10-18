<?php

class pages extends CI_Controller {
	public function index()
	{
		$this->load->view('home.php');
	}
	public function register()
	{
		$this->load->view('register.php');
	}
	public function login(){
		$this->load->view('login.php');	
	}
}
?>