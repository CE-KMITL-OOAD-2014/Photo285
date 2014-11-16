<?
class Member extends CI_Controller {
	public function register(){ //สมัครสมาชิก
		$ID = $_POST["ID"];
		$pass = md5($_POST["pass"]);
		$name = $_POST["name"];
		$email = $_POST["email"];
		$data = array('ID'=>$ID,'pass'=>$pass,'name'=>$name,'email'=>$email);
		$check = $this->db->where('ID',$ID)->count_all_results('account'); //เช็คว่าใน database มี ID นี้แล้วหรือยัง
		if($check==0){ //ถ้ายังไม่มี
			$this->load->model('member_model');	
			$this->member_model->register($data); //ส่งข้อมูลเข้าจัดเก็บใน database ผ่าน member_model
			echo"<script language='javascript'>
				alert('Signup done');
				window.location.href = '../../';
				</script>";
		}
		else { //ถ้ามีแล้วให้ส่งความไปว่า Have Already ID
			echo "<script language='javascript'>
					alert('Have already ID');
					window.location.href = '../../';
				</script>";
		}

	}
	
	public function login(){ //เข้าสู่ระบบ
		$ID = $_POST["ID"];
		$pass = md5($_POST["pass"]);
		$check = $this->db->where('ID',$ID)->where('pass',$pass)->count_all_results('account'); // ตรวจสอบและจัดเก็บว่าไอดี และ พาส ที่ส่งเข้ามาถูกต้องหรือไม่
		if($check==1){ // ถ้าถูกต้องให้เข้าไปทำต่อใน member_model login
			$data = array('ID'=>$ID);
			$this->load->model('member_model','member_model');
			$this->member_model->login($data); //ส่งข้อมูลไปทำต่อใน member_model
		}
		else {
			echo "<script language='javascript'>
					alert('login fail');
					window.location.href = '../';
				</script>";
		}
	}
	
	public function logout(){ // ออกจากระบบ
		$this->load->model('member_model','member_model');
		$this->member_model->logout(); //เรียก member_modl logout เพื่อให้ไปทำลาย session
	}
	
	public function editProfile(){ //แก้ไขโปรไฟล์
		if($this->session->userdata('ID')){ // ตรวจสอบว่ามีการล็อคอินอยู่หรือไม่
			$ID = $this->session->all_userdata(); //จัดเก็บไอดีที่ล็อคอินอยู่
			
			//load ค่าผู้ใช้ต่างๆจาก member_model
			$this->load->model('member_model');
			$name = $this->member_model->getName($ID['ID']);
			$email = $this->member_model->getEmail($ID['ID']);
			$detail = $this->member_model->getDetail($ID['ID']);
			$resume = $this->member_model->getResume($ID['ID']);
			$data = array('name' => $name , 'id' => $ID['ID'] , 'email' => $email , 'detail' => $detail , 'resume' => $resume);
			$this->load->view('navbar');
			$this->load->view('editprofile',$data);
		}
		else $this->load->view('mainsite'); // ถ้าไม่ได้ล็อคอินให้ redirect ไปหน้า mainsite (เขียนดักไว้ในการใช้งานปกติจะไม่มีปุ่ม editprofile ขึ้นมาให้กดอยู่แล้วถ้าไม่ล็อคอิน)
	}
	
	public function editProfileSend(){ //ส่งการ editprofile ไปที่ database
		$name = $_POST["name"];
		$resume = $_POST["resume"];
		$detail = $_POST["detail"];
		$data = array('name'=>$name,'resume'=>$resume,'detail'=>$detail); 
		$this->load->model('member_model');
		$this->member_model->editprofile($data); //ส่งค่าไปทำต่อใน function editprofile
	}
	
}
?>