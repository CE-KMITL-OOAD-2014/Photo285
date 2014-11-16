<?
class Member extends CI_Controller {
	public function register(){
		$ID = $_POST["ID"];
		$pass = md5($_POST["pass"]);
		$name = $_POST["name"];
		$email = $_POST["email"];
		$data = array('ID'=>$ID,'pass'=>$pass,'name'=>$name,'email'=>$email);
		$check = $this->db->where('ID',$ID)->count_all_results('account');
		if($check==0){
			$this->load->model('member_model');	
			$this->member_model->register($data);
			echo"<script language='javascript'>
				alert('Signup done');
				window.location.href = '../../';
				</script>";
		}
		else {
			echo "<script language='javascript'>
					alert('Have already ID');
					window.location.href = '../../';
				</script>";
		}

	}
	
	public function login(){
		$ID = $_POST["ID"];
		$pass = md5($_POST["pass"]);
		$check = $this->db->where('ID',$ID)->where('pass',$pass)->count_all_results('account');
		if($check==1){
			$data = array('ID'=>$ID);
			$this->load->model('member_model','member_model');
			$this->member_model->login($ID);
		}
		else {
			echo "<script language='javascript'>
					alert('login fail');
					window.location.href = '../';
				</script>";
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		echo"<script language='javascript'>window.location.href = '../../';</script>";
	}
	
	public function editProfile(){
		if($this->session->userdata('ID')){
			$ID = $this->session->all_userdata();
			
			//load all
			$this->load->model('member_model');
			$name = $this->member_model->getName($ID['ID']);
			$email = $this->member_model->getEmail($ID['ID']);
			$detail = $this->member_model->getDetail($ID['ID']);
			$resume = $this->member_model->getResume($ID['ID']);
			$data = array('name' => $name , 'id' => $ID['ID'] , 'email' => $email , 'detail' => $detail , 'resume' => $resume);
			$this->load->view('navbar');
			$this->load->view('editprofile',$data);
		}
		else $this->load->view('mainsite');
	}
	
	public function editProfileSend(){
		$name = $_POST["name"];
		$resume = $_POST["resume"];
		$detail = $_POST["detail"];
		$data = array('name'=>$name,'resume'=>$resume,'detail'=>$detail);
		$this->load->model('member_model');
		$this->member_model->editprofile($data);
		//echo"<script language='javascript'>
		//	alert('Edit done');
		//	window.location.href = '../';
		//	</script>";
	
	}
	
}
?>