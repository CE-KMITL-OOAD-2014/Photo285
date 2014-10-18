<?

class Member extends CI_Controller {
	public function register(){
			$ID = $_POST["ID"];
			$pass = md5($_POST["pass"]);
			$name = $_POST["name"];
			$data = array('ID'=>$ID,'pass'=>$pass,'name'=>$name);
			$this->load->models('member_model');	
			$this->member_model->register($data);
		}
}
?>