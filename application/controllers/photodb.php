<?

class Photodb extends CI_Controller {
	public function addPhoto(){
		$this->load->model('photo_model');
		$ID = $this->photo_model->number();
		foreach($ID->result_array() as $row)
		echo"".$row['ID'];
		
		
	}
}
?>