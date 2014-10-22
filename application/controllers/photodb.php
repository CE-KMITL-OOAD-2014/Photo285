<?

class Photodb extends CI_Controller {
	public function addPhoto(){
		$this->load->model('photo_model');
		$ID = $this->photo_model->number();
		echo"".$ID['ID']." ".$ID['nameuser']." ".$ID['namealbum'];
		$nameuser = $_POST["nameuser"];
		$namealbum = $_POST["namealbum"];
		$data = array('ID'=>$ID,'nameuser'=>$nameuser,'namealbum'=>$namealbum);	
		$this->photo_model->addPhoto($data);
		
	}
}
?>