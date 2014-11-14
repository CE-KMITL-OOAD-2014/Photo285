<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photo285 : Upload Your Picture</title>

    <!-- Bootstrap -->
    <link href="../../../../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
  .link<!--เปนส่วนตั้งค่าให้ button ที่มี href มีอักษรเป็นสีขาว -->
{
   color:white;
   text-decoration: none; 
   background-color: none;
}
  </style>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> <!--เป็น template ที่ import ค่าตามbootstrap.com-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../../js/bootstrap.min.js"></script>
	<script src="js/font-awesome.min.css"></script>
	<script>
  $(document).ready(function(){
  $("#mytextbox").on("keypress", function(event) {

    // Disallow anything not matching the regex pattern (A to Z uppercase, a to z lowercase and white space)
    // For more on JavaScript Regular Expressions, look here: https://developer.mozilla.org/en-US/docs/JavaScript/Guide/Regular_Expressions
    var englishAlphabetAndWhiteSpace= /[A-Z0-9a-z]/g;
   
    // Retrieving the key from the char code passed in event.which
    // For more info on even.which, look here: http://stackoverflow.com/q/3050984/114029
    var key = String.fromCharCode(event.which);
    
    //alert(event.keyCode);
    
    // For the keyCodes, look here: http://stackoverflow.com/a/3781360/114029
    // keyCode == 8  is backspace
    // keyCode == 37 is left arrow
    // keyCode == 39 is right arrow
    // englishAlphabetAndWhiteSpace.test(key) does the matching, that is, test the key just typed against the regex pattern
	 if (event.keyCode == 8 || englishAlphabetAndWhiteSpace.test(key)) {
        return true;
    }

    // If we got this far, just return false because a disallowed key was typed.
    return false;
});

$('#mytextbox').on("paste",function(e)
{
    e.preventDefault();
});
});
  </script>
  <script>
						<!--เช็คpassword ว่าตรงกับ comfirm ไหม -->
						function checkPasswordMatch() {
							var password = $("#pass").val();
							var confirmPassword = $("#cpass").val();
							if (password != confirmPassword){
								  $("#cpass").css( "background-color", "#F78181" );
								  $("#regisbutton").prop("type", "button");	 
							}
							else{//เปลี่ยนสี
								$("#cpass").css( "background-color", "#9FF781" );
								$("#regisbutton").prop("type", "submit");
							}
						}
						$(document).ready(function () {
						   $("#cpass").keyup(checkPasswordMatch);					
						});
						</script>
  
  <body>
    
	<nav class="navbar navbar-default" role="navigation"><!---นำ template จาก bootstrap.com มาต่อเติม-->
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> 
					 <a class="navbar-brand" href="../../../../" > Photo285</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
				
				<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
				<ul class="nav navbar-nav"> <!-----เปิด NAVBAR ฝั่งซ้าย--->
				<?
					if($this->session->userdata('ID')){ // เปลี่ยนรูปแบบปุ่มเมื่อไม่ได้ login
						$ID = $this->session->all_userdata();
						echo "<a href='../../../../member/editprofile'><button type='input' class='btn btn-warning navbar-btn'><div class='link'>Edit Profile</div></button></a>"; // <!------edit profile------>
						echo "  ";
						echo "<a href='../../../../album/show/".$ID['ID']."'><button type='button' class='btn btn-primary navbar-btn'><div class='link'>Manage Album</div></button></a>"; // <!------Manage Album------>
						echo "  ";
					}
				?>
				</ul> <!-----ปิด NAVBAR ฝั่งซ้าย--->
				<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
				
				<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
				  <ul class="nav navbar-nav navbar-right"><!-----เปิด NAVBAR ฝั่งขวา--->
				  <?
					if($this->session->userdata('ID')){ // เปลี่ยนรูปแบบปุ่มเมื่อไม่ได้ login
						echo "<a href='../../../../member/logout'><button type='input' class='btn btn-danger navbar-btn'><div class='link'>Log out</div></button></a>";
					}
					else echo "<button type='input' class='btn btn-primary navbar-btn' data-toggle='modal' data-target='.bs-example-modal-lg7'><div class='link'>Sign Up</div></button>	
					<a href='#'><button type='input' class='btn btn-success navbar-btn' data-toggle='modal' data-target='.bs-example-modal-lg2'><div class='link'>Log in</div></button></a>";
				  ?>
					 <li ><a href="../../../../profile/show/<? // redirect ไปโชว์โปรไฟล์ตัวเอง
						if($this->session->userdata('ID')){ 
							$ID = $this->session->all_userdata();
							echo "".$ID['ID'];
						} ?>">
						<?
						if($this->session->userdata('ID')){ // แสดงชื่อโปรไฟล์ตัวเอง
							$ID = $this->session->all_userdata();
							echo "".$ID['ID'];
						}
						else echo "";
						?>
						</a></li>
				  </ul><!-----ปิด NAVBAR ฝั่งขวา--->
				<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
				
				
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		
	
	
	
	 <!-- Modal ส่วน SIGN UP-->
	<div class="modal fade bs-example-modal-lg7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!--ส่วนเชื่อม แถบเด้งๆ---ของ SIGN UP------->
		<div class="modal-dialog modal-lg">
			<div class="modal-content"> 
				<div class= "row">
					<form role="form" action="../member/register" method="post">  
						<br/>
						<div class="col-md-12">  <!--ส่วนกรอก username----A-->
								<div class="form-group">
									<div class="col-md-12">
										<label for="exampleInputUsername1">Username</label>
									</div>
									<div class="col-md-12">
										<input type="text" name="ID" class="form-control" pattern=".{6,15}" required title="6 to 15 characters" width = "50%" id="mytextbox" placeholder="Enter username" required autofocus>
									</div>
								</div>
						</div> <!--ส่วนกรอก username------>
						
						<div class="col-md-12"> <!--ส่วนกรอก NAME----A-->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputName1">Name</label>
								</div>
								<div class="col-md-12">
									<input type="text" name="name" class="form-control" pattern=".{6,15}" required title="6 to 15 characters" id="exampleInputName1" placeholder="Enter name" required autofocus>
								</div>
							</div>
						</div>  <!--ส่วนกรอก NAME------>
	
						<div class="col-md-12">  <!--ส่วนกรอก EMAIL----A-->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputEmail1">Email address</label>
								</div>
								<div class="col-md-12">
									<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required autofocus>
								</div>
							</div>
						</div>  <!--ส่วนกรอก EMAIL------>
						
						<div class="col-md-12"> <!--ส่วนกรอก PASSWAORD--A-->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputPassword1">Password</label>
								</div>
								<div class="col-md-12">
									<input type="password" name="pass" class="form-control" pattern=".{6,12}" required title="6 to 12 characters" id="pass" placeholder="Password" required autofocus>
								</div>
							</div>
						</div> <!--ส่วนกรอก PASSWAORD---->
						
						<div class="col-md-12"> <!--ส่วนกรอก CONFIRMPASSWAORD--A-->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputPassword1">Confirm Password</label>
								</div>
								<div class="col-md-12">
									<input type="password" name="cpass" class="form-control" id="cpass" placeholder="Password" required autofocus>
								</div>
							</div>
						</div> <!--ส่วนกรอก CONFIRMPASSWAORD---->
						
						
						<div class="col-md-12"> <!------ส่วนกด SUMMIT--->
							<div class="col-md-12">
							<button type="submit" value="OK" id ="regisbutton" class="btn btn-default">Submit</button>
							</div>
						</div> <!------ส่วนกด SUMMIT--->
					</form>
				</div>
			</div>
		</div>
	</div>  <!--ปิดส่วนเชื่อม แถบเด้งๆ-----ของ SIGN UP----->
	
		<!---ส่วน modal ที่จะเด้งเป็นหน้า login ขึ้นมา--->
		<div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">  <!-- LOG IN------->
		<div class="modal-dialog modal-lg">
			<div class="modal-content"> 
				<div class= "row">
					<form action="../../../../member/login"  method="post" role="form">
						<div class="col-md-12">
							<div class="col-md-12">
							<h2 class="form">Please log in</h2>
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-12">
							<input type="username" name="ID" id="ID" class="form-control" placeholder="Username" required autofocus>
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-12">
								<input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-12">
								<div class="row"><div<em><label><font color="white">Don't have an account?</font></label></em></div>
								<button class="btn btn-lg btn-success btn-block" type="submit">Log in</button></br>
							</div>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> <!---LOG IN------->
	
  </body>
</html>
