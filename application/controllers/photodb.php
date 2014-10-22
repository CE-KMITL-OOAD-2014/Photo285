<?

class Photodb extends CI_Controller {
	public function addPhoto(){
		$this->load->model('photo_model');
		//ส่วนออโต้เลขไอดี
		$ID = $this->photo_model->number();
		foreach($ID as $row)
		$ID = $row['ID']+1;
		echo $ID;
		//
		$nameuser = $_POST["nameuser"];
		$namealbum = $_POST["namealbum"];
		$data = array('ID'=>$ID,'nameuser'=>$nameuser,'namealbum'=>$namealbum);	
		$this->photo_model->addPhoto($data);
		
	}
}
?>