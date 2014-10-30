<?php
require_once(APPPATH . '/controllers/test/Toast.php');	// Use TOAST - Unit Testing for CodeIgniter v. 1.5
class Addphoto_tests extends Toast{
	function Addphoto_tests(){
		parent::Toast(__FILE__);
		$this->load->model('photo_model');	
	}
		/* TESTS BELOW */
	function test_addphoto(){	
		$data = array(	'ID' => '99',
						'nameuser' => 'test',
						'namealbum' => 'testalbum',
						'show1' => '1',
						'show2' => '0',
						'show3' => '0',
						'show4' => '0'
		);
		$this->photo_model->addPhoto($data);
		$getdata = $this->photo_model->getPhoto($data);
		foreach($getdata->result_array() as $row){}
		$this->_assert_equals($data['ID'],$row['ID']);
		$this->_assert_equals($data['nameuser'],$row['nameuser']);
		$this->_assert_equals($data['show1'],$row['show1']);
		$this->_assert_equals($data['show2'],$row['show2']);
		$this->_assert_equals($data['show3'],$row['show3']);
		$this->_assert_equals($data['show3'],$row['show4']);
	}
}