<?

class Member extends CI_Controller {
	public function register(){
			$username = $_POST["username"];
			$password = md5($_POST["password"]);
			$namejing = $_POST["namejing"];
			$data = array('username'=>$username,'password'=>$password,'namejing'=>$namejing);
			$this->load->model('member_model');	
			$this->member_model->register($data);
		}
}
?>