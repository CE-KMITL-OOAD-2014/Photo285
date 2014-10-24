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
		$this->load->view('signupdone.html');
	}
	public function login(){
		$ID = $_POST["ID"];
		$pass = $_POST["pass"];
		$check = $this->db->where('ID',$ID)->where('pass',$pass)->count_all_results('account');
		if($check==1){
			$newdata = array('ID' => $ID,'logged_in' => TRUE);
			$this->session->set_userdata($newdata);
			$this->load->view('test2');
		}
		else echo "fail";
	}
}
?>