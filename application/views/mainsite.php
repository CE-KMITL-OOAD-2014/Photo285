
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
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

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">   <!--------------------------เปิดโค้ดส่วน ไสลด์รูป>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> 

  <!-- xWrapper for slides -->
  <div class="carousel-inner"> 
    <div class="item active">
		<img class="img-responsive center-block" src="img/Tulips.jpg" alt="...">
		<div class="carousel-caption">
			ดอกไม้
		</div>
	</div>
    <div class="item">
      <img class="img-responsive center-block" src="img/Desert.jpg" alt="...">
      <div class="carousel-caption">
			ทะเลทราย
      </div>
    </div>
	<div class="item">
      <img class="img-responsive center-block" src="img/Koala.jpg" alt="...">
      <div class="carousel-caption">
			โคอาล่า
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <!-- เปิด ส่วนที่ทำให้รูปสไลด์ไปทางซ้าย---------->
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a> <!--ปิด ส่วนที่ทำให้รูปสไลด์ไปทางซ้าย---------->
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <!-- เปิด ส่วนที่ทำให้รูปสไลด์ไปทางขวา---------->
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a> <!--ปิด ส่วนที่ทำให้รูปสไลด์ไปทางขวา---------->
</div> <!--ปิดโค้ดส่วนสไลด์รูป---------------------->


    <!-- Modal -->
	<div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!--ส่วนเชื่อม แถบเด้งๆ---ของ SIGN UP------->
		<div class="modal-dialog modal-lg">
			<div class="modal-content"> 
				<div class= "row">
					<form role="form" action="../member/register" method="post">  
					
						<div class="col-md-12">  <!--ส่วนกรอก username----A-->
								<div class="form-group">
									<div class="col-md-12">
										<label for="exampleInputUsername1">Username</label>
									</div>
									<div class="col-md-12">
										<input type="text" name="ID" class="form-control " width = "50%" id="exampleInputUsername1" placeholder="Enter username">
									</div>
								</div>
						</div> <!--ส่วนกรอก username------>
						
						<div class="col-md-12"> <!--ส่วนกรอก NAME----A-->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputName1">Name</label>
								</div>
								<div class="col-md-12">
									<input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Enter name">
								</div>
							</div>
						</div>  <!--ส่วนกรอก NAME------>
						
						<div class="col-md-12">  <!--ส่วนกรอก EMAIL----A-->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputEmail1">Email address</label>
								</div>
								<div class="col-md-12">
									<input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
									$this->load->helper('email');
									if (valid_email('email'))
									{
										echo 'email is valid';
									}
									else
									{
										echo 'email is not valid';
									}
								</div>
							</div>
						</div>  <!--ส่วนกรอก EMAIL------>
						
						<div class="col-md-12"> <!--ส่วนกรอก PASSWAORD--A-->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputPassword1">Password</label>
								</div>
								<div class="col-md-12">
									<input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
							</div>
						</div> <!--ส่วนกรอก PASSWAORD---->
						
						<div class="col-md-12"> <!--ส่วนกรอก CONFIRMPASSWAORD--A-->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputPassword1">Confirm Password</label>
								</div>
								<div class="col-md-12">
									<input type="password" name="cpass" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
							</div>
						</div> <!--ส่วนกรอก PASSWAORD---->
						
						<div class="col-md-12"> <!------ส่วนกด SUMMIT--->
							<div class="col-md-12">
							<button type="submit" value="OK" class="btn btn-default">Submit</button>
							</div>
						</div> <!------ส่วนกด SUMMIT--->
					</form>
				</div>
			</div>
		</div>
	</div>  <!--ปิดส่วนเชื่อม แถบเด้งๆ-----ของ SIGN UP----->
	
	 <!-- Modal -->
	<div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">  <!--ส่วนเชื่อม แถบเด้งๆ---ของ LOG IN------->
		<div class="modal-dialog modal-lg">
			<div class="modal-content"> 
					<form class="form-signin" role="form">
						<div class="col-md-12">
							<h2 class="form-signin-heading">Please sign in</h2>
						</div>
						<div class="col-md-12">
							<input type="email" class="form-control" placeholder="Email address" required autofocus>
						</div>
						<div class="col-md-12">
							<input type="password" class="form-control" placeholder="Password" required>
						</div>
						<div class="col-md-12">
							<label class="checkbox">
								<div class="col-md-12">
									<input type="checkbox" value="remember-me"> Remember me
								</div>
							</label>
						</div>
						<div class="col-md-12">
							<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
						</div>
					</form>
			</div>
		</div>
	</div> <!--ส่วนเชื่อม แถบเด้งๆ---ของ LOG IN------->
  </body>
</html>