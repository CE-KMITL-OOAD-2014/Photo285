<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Photo285 : Upload Your Picture</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<style> <!--ส่วนตั้งค่ารูป-->
.dynamicTile .col-sm-2.col-xs-4{
    padding:5px;
}

.dynamicTile .col-sm-4.col-xs-8{
    padding:5px;
}

#tile1{
    background: rgb(0,172,238);
}

#tile2{
    background: rgb(243,243,243);
}

#tile3{
    background: rgb(71,193,228);
}

#tile4{
	background: white;
}

#tile5{
    background: rgb(175,26,63);
}

#tile6{
    background: rgb(62,157,215);
}

#tile7{
    background: white;
}

#tile8{
    background: rgb(209,70,37);
}

#tile9{
    background: rgb(0,142,0);
}

#tile10{
    background: rgb(71,193,228);
;
}

.tilecaption{
    position: relative;
    top: 100%;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%); 
    margin:0!important;
    text-align: center;
    color:white;
    font-family: Segoe UI;
    font-weight: lighter;
}

	</style>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/font-awesome.min.css"></script>
	<script> <!--ส่วนตั้งเวลา ไสลด์รูป-->
		$(window).resize(function() {
		if(this.resizeTO) clearTimeout(this.resizeTO);
		this.resizeTO = setTimeout(function() {
			$(this).trigger('resizeEnd');
		}, 10);
		});
	</script>
  </head>
  <body background="img/back.jpg">
  
	<?//redirect ไปหน้า profile กรณี login แล้ว
		if($this->session->userdata('ID')){ // แสดงชื่อโปรไฟล์ตัวเอง
			$ID = $this->session->all_userdata();
			echo"<script language='javascript'>window.location.href = 'profile/show/".$ID['ID']."';</script>";
		}
	?>
	
	<nav class="navbar navbar-default" role="navigation">   <!--เริ่ม NAVBAR--------------->
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Photo285</a> <!---------------ชื่อ PHOTO285------------------->
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> <!-----เปิด NAVBARCOLLAPSE---->
				<ul class="nav navbar-nav"> <!-----เปิด NAVBAR ฝั่งซ้าย--->
					<button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target=".bs-example-modal-lg1">Sign Up</button> <!------------------------SIGN UP-->
				</ul> <!-----ปิด NAVBAR ฝั่งซ้าย--->
				<ul class="nav navbar-nav navbar-right"> <!-----เปิด NAVBAR ฝั่งขวา--->
					<button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target=".bs-example-modal-lg2"><a href = "#">Log in</a></button> <!------LOG IN------>
				</ul>   <!-----ปิด NAVBAR ฝั่งขวา--->
			</div><!-- ปิด COLLAPSE -->
		</div><!-- /.container-fluid -->
	</nav> <!--  จบ NAVBAR------------------->
	
	<div class="container-fluid dynamicTile"> <!--ส่วนแสดงรูปภาพ ไสลด์อยู่ใน container-->
		<div class="row ">
			<div class="col-sm-2 col-xs-4"> 
				<div id="tile1" class="tile">
					<div class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
							   <img src="img/Jellyfish.jpg" class="img-responsive"/>
							</div>
							<div class="item">
							   <img src="img/Koala.jpg" class="img-responsive"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2 col-xs-4"> 
				<div id="tile2" class="tile">
					<div class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
							  <img src="img/Woman.jpg" class="img-responsive"/>
							</div>
							<div class="item">
							  <img src="img/Flowers.jpg" class="img-responsive"/>
							</div>
							<div class="item">
							  <img src="img/Icemountain.jpg" class="img-responsive"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2 col-xs-4"> 
				<div id="tile3" class="tile">
					<div class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
							   <img src="img/Fiord.jpg" class="img-responsive"/>
							</div>
							<div class="item">
							   <img src="img/Chrysanthemum.jpg" class="img-responsive"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2 col-xs-4"> 
				<div id="tile4" class="tile">
					<div class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
							  <img src="img/Beach.jpg" class="img-responsive"/>
							</div>
							<div class="item">
							  <img src="img/Hydrangeas.jpg" class="img-responsive"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2 col-xs-4">
				<div id="tile5" class="tile">
					<div class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
							  <img src="img/Desert.jpg" class="img-responsive"/>
							</div>
							<div class="item">
							  <img src="img/Tulips.jpg" class="img-responsive"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2 col-xs-4">
				<div id="tile6" class="tile">
					<div class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
							  <img src="img/Lighthouse.jpg" class="img-responsive"/>
							</div>
							<div class="item">
							  <img src="img/Penguins.jpg" class="img-responsive"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-xs-12 col-md-4" >
				<div id="tile7" class="tile">
					<div class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
							  <img src="img/Serf.jpg" class="img-responsive"/>
							</div>
							<div class="item">
							  <img src="img/Tiger.jpg" class="img-responsive"/>
							</div>
							<div class="item">
							  <img src="img/House.jpg" class="img-responsive"/>
							</div>
						</div>
					</div>
				</div>
				<br>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="row">
					<div class="col-sm-6 col-xs-6">
						<div id="tile8" class="tile">
							<div class="carousel slide" data-ride="carousel">
								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
									   <img src="img/Green.jpg" class="img-responsive"/>
									</div>
									<div class="item">
									   <img src="img/Swan.jpg" class="img-responsive"/>
									</div>
									</div>
							</div> 
						</div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div id="tile9" class="tile">
							<div class="carousel slide" data-ride="carousel">
								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
									  <img src="img/Yellow.jpg" class="img-responsive"/>
									</div>
									<div class="item">
									  <img src="img/Lotus.jpg" class="img-responsive"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-sm-6 col-xs-6">
						<div id="tile8" class="tile">
							<div class="carousel slide" data-ride="carousel">
								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
									   <img src="img/Greendrop.jpg" class="img-responsive"/>
									</div>
									<div class="item">
									   <img src="img/Fish.jpg" class="img-responsive"/>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-xs-6">
						<div id="tile9" class="tile">
							<div class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
									  <img src="img/Pink.jpg" class="img-responsive"/>
									</div>
									<div class="item">
									  <img src="img/Wolf.jpg" class="img-responsive"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</br>
			</div>			
			<div class="col-sm-4 col-xs-12">
				<div id="tile7" class="tile">
					<div class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
							  <img src="img/Drop.jpg" class="img-responsive"/>
							</div>
							<div class="item">
							  <img src="img/Cat.jpg" class="img-responsive"/>
							</div>
							<div class="item">
							  <img src="img/Redpanda.jpg" class="img-responsive"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Modal ส่วน SIGN UP-->
	<div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!--ส่วนเชื่อม แถบเด้งๆ---ของ SIGN UP------->
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
										<input type="text" name="ID" class="form-control" pattern=".{6,12}" required title="6 to 12 characters" width = "50%" id="exampleInputUsername1" placeholder="Enter username" required autofocus>
									</div>
								</div>
						</div> <!--ส่วนกรอก username------>
						
						<div class="col-md-12"> <!--ส่วนกรอก NAME----A-->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputName1">Name</label>
								</div>
								<div class="col-md-12">
									<input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Enter name" required autofocus>
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
	
	<!-- Modal LOG IN-->
	<div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">  
		<div class="modal-dialog modal-lg">
			<div class="modal-content"> 
				<div class= "row">
					<form action="../member/login"  method="post" role="form">
						<div class="col-md-12">
							<div class="col-md-12">
								<h2 class="form">Please sign in</h2>
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
								<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></br>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> <!----ปิดส่วน modal LOG IN------->
  </body>
</html>