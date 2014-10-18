<?
class Member extends CI_Controller {
	public function register(){
			$id = $_POST["id"];
			$pass = md5($_POST["pass"]);
			$name = $_POST["name"];
			$sname = $_POST["sname"];
			$address = $_POST["address"];
			$data = array('id'=>$id,'pass'=>$pass,'name'=>$name,'sname'=>$sname,'address'=>$address);
			$this->load->models('member_model');	
			$this->member_model->register($data);
		}
	public function login(){
			$id = $_POST["id"];
			$pass = $_POST["pass"];
			$check = $this->db->where('id',$id)->where('pass',md5($pass))->count_all_results('id');
			if($check>0){
					$this->session->userdata['session_id'];
					$this->session->userdata['ip_address'];
					$this->session->userdata['user_agent'];
					$this->session->userdata['last_activity'];
				}	
		}
	public function logout(){
			
		}

}
?>