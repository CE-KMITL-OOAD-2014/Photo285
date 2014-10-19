<?

class Member extends CI_Controller {
	public function register(){
			$ID = $_POST["ID"];
			$pass = md5($_POST["pass"]);
			$name = $_POST["name"];
			$email = $_POST["email"];
			$data = array('ID'=>$ID,'pass'=>$pass,'name'=>$name,'email'=>$email);
			$this->load->model('member_model');	
			$this->member_model->register($data);
			$this->load->view('mainsite');
		}
}
?>