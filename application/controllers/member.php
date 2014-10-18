<?
class Member extends CI_Controller {
	public function register(){
			$ID = $_POST["ID"];
			$pass = md5($_POST["pass"]);
			$name = $_POST["name"];
			$sname = $_POST["sname"];
			$address = $_POST["address"];
			$data = array('ID'=>$ID,'ids'=>$ids,'pass'=>$pass,'name'=>$name,'sname'=>$sname,'address'=>$address);
			$this->load->model('member_model');	
			$this->member_model->register($data);
		}
}
?>