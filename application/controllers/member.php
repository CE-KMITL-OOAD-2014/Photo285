<?
class Member extends CI_Controller {
$ID = 1;
	public function register(){
			$ID = $ID+1;
			$ids = $_POST["ids"];
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