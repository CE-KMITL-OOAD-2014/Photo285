<?

class Member extends CI_Controller {
	public function register(){
			$username = $_POST["username"];
			$password = md5($_POST["password"]);
			$namejing = $_POST["namejing"];
			$data = array('username'=>$username,'password'=>$password,'namejing'=>$namejing);
			$this->load->models('member_model');	
			$this->load->models>member_model->register($data);
		}
}
?>