<?
class Member extends CI_Controller {
	public function register(){
			$ids = $_POST["ids"];
			$pass = md5($_POST["pass"]);
			$name = $_POST["name"];
			$sname = $_POST["sname"];
			$address = $_POST["address"];
			$data = array('ids'=>$ids,'pass'=>$pass,'name'=>$name,'sname'=>$sname,'address'=>$address);
			$this->load->models('member_model');	
			$this->member_model->register($data);
		}
}
?>