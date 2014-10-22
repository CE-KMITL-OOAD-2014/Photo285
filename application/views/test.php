<?

class Test extends CI_Controller {
	public function addPhoto(){
		$ID = 1;
		$nameuser = admin;
		$namealbum = albumtest;
		$data = array('ID'=>$ID,'nameuser'=>$nameuser,'namealbum'=>$namealbum);
		$this->load->model('photo_model');	
		$this->member_model->addPhoto($data);
	}
}
?>