<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <style>
  .link
{
   color:white;
   text-decoration: none; 
   background-color: none;
}
  </style>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <body>
    
	<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> 
					 <a class="navbar-brand" href="#" > Photo285</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav"> <!-----เปิด NAVBAR ฝั่งซ้าย--->
				<a href="../../member/editprofile"><button type="input" class="btn btn-warning navbar-btn"><div class="link">Edit Profile</div></button></a> <!------Manage Album------>
					<button type="button" class="btn btn-primary navbar-btn">Manage Album</a></button> <!------Manage Album------>
				</ul> <!-----ปิด NAVBAR ฝั่งซ้าย--->
				  <ul class="nav navbar-nav navbar-right">
					
					 <li ><a href="<? // redirect ไปโชว์โปรไฟล์ตัวเอง
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
						</a></li>   <!--ตรงนี้ต้องเอาโค้ด php มาตรวจสอบ session มาตรวจสอบว่า เป็นหน้าไหนแล้ว ดูตามเป้-->
				  </ul>
				</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
  </body>
</html>
