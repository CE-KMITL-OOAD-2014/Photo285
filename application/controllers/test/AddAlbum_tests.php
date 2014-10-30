<?php
require_once(APPPATH . '/controllers/test/Toast.php');	// Use TOAST - Unit Testing for CodeIgniter v. 1.5
class AddAlbum_tests extends Toast{
	function AddAlbum_tests(){
		parent::Toast(__FILE__);
		$this->load->model('photo_model');	
	}
		/* TESTS BELOW */
	function test_AddAlbum(){	
		$data = array(	'ID' => 'admin',
						'album' => 'chiangmai'
		);
		$this->photo_model->addAlbum($data);
		$getdata = $this->photo_model->getAlbum($data);
		foreach($getdata->result_array() as $row){}
		$this->_assert_equals($data['ID'],$row['ID']);
		$this->_assert_equals($data['album'],$row['album']);
	}
}