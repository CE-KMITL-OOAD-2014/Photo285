<?

class Photodb extends CI_Controller {
	public function addPhoto(){
		$this->load->model('photo_model');
		$ID = $this->photo_model->number();
		$nameuser = $_POST["nameuser"];
		$namealbum = $_POST["namealbum"];
		$data = array('ID'=>$ID,'nameuser'=>$nameuser,'namealbum'=>$namealbum);	
		$this->photo_model->addPhoto($data);
		
	}
}
?>