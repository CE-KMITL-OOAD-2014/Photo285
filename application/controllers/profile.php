<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function show(){ // เช็ค / อันที่ 3 ให้เป็นชื่อ username
		if ($this->uri->segment(3) === FALSE){ // ถ้าไม่มี / อันที่ 3 ให้เซตค่า 0
			$id = 0;
		}
		else{
			$id = $this->uri->segment(3); // ถ้ามี / อันที่ 3 เช่น (web.net/profile/show/admin) user คือ admin ก็เอามาเก็บในตัวแปล id
			$data['id'] = $id;
			$this->load->view('userpage',$data);
		}
	}
}

