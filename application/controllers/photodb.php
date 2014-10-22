<?

class Photodb extends CI_Controller {
	public function addPhoto(){
		$ID = $_POST["ID"];
		$nameuser = $_POST["nameuser"];
		$namealbum = $_POST["namealbum"];
		$data = array('ID'=>$ID,'nameuser'=>$nameuser,'namealbum'=>$namealbum);
		$this->load->model('photo_model');	
		$this->photo_model->addPhoto($data);
	}
}
?>