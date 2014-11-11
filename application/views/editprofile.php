<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
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
  <script src="../js/bootstrap.min.js"></script>
  
  <body background="img/white.jpg">
    <form role="form" action="../member/editProfileSend" method="post"> 
		<div class ="col-md-2"></div>	
		<div class ="col-md-8">	
			<h2> Edit Profile</h2>
			<hr>
			<div class ="col-md-4">	
				<div class="col-md-12 col-xs-12 col-sm-12">
					<center>
						<a href="#aboutModal" ><img src="../img/user.jpg" name="aboutme" width="140" height="140" class="img-circle"></a>
						<div class="row">
							<center>
								<br>
								<a class="btn btn-primary " data-toggle="modal" data-target=".bs-example-modal-sm">Upload photo</a>	
							</center>
							</ul>
						</div>
					</center>
				</div>
			</div>
			<div class ="col-md-8">	
				<div class="col-md-12">  <!--ส่วนกรอก username----A-->
					<div class="form-group">
						<div class="col-md-12">
							<label for="exampleInputUsername1">Username</label>
						</div>
						<div class="col-md-12">
							<input type="text" name="username" class="form-control " width = "50%" id="exampleInputUsername1" value="<? echo "".$id; ?>" readonly="readonly"required autofocus>
						</div>
					</div>
				</div> <!--ส่วนกรอก username------>
						
				<div class="col-md-12">  <!--ส่วนกรอก EMAIL----A-->
					<div class="form-group">
						<div class="col-md-12">
							<label for="exampleInputEmail1">Email address</label>
						</div>
						<div class="col-md-12">
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<? echo "".$email; ?>" readonly="readonly" required autofocus>
						</div>
					</div>
				</div>  <!--ส่วนกรอก EMAIL------>
						
				<div class="col-md-12"> <!--ส่วนกรอก NAME----A-->
					<div class="form-group">
						<div class="col-md-12">
							<label for="exampleInputName1">Name</label>
						</div>
						<div class="col-md-12">
							<input type="text" name="name" class="form-control" id="exampleInputName1"  pattern=".{6,60}" required title="6 to 60 characters" value="<? echo "".$name; ?>" required autofocus>
						</div>
					</div>
				</div>  <!--ส่วนกรอก NAME------>					
						
				<div class="col-md-12">  <!--ส่วนกรอก DESCRIPTION----->
					<div class="form-group">
						<div class="col-md-12">
							<label for="exampleInputEmail1">ประวัติส่วนตัว</label>
						</div>
						<div class="col-md-12">
							<input type="message" name="resume" class="form-control" id="des" value="<? echo "".$resume; ?>">
						</div>
					</div>
				</div>  <!--ส่วนกรอก DESCRIPTION----->
						
				<div class="col-md-12">  <!--ส่วนกรอก NOTICE--->
					<div class="form-group">
						<div class="col-md-12">
							<label for="exampleInputEmail1">ข่าวสาร</label>
						</div>
						<div class="col-md-12">
							<input type="text" name="detail" maxlength="64" class="form-control" id="test" value="<? echo "".$detail; ?>">
						</div>
					</div>
				</div>  <!--ส่วนกรอก NOTICE----->
			
				<div class="col-md-12"> <!------ส่วนกด SUMMIT--->
					<div class="col-md-12">
						</br>
						<button type="submit" value="OK" id ="regisbutton" class="btn btn-success">Submit</button>
						<a href="../../profile/show/<? echo "".$id; ?>" id ="cancel" class="btn btn-warning"><div class="link">cancel</div></a>
					</div>
				</div> <!------ส่วนกด SUMMIT--->
			</div>	
		</div>
	</form>
					
    
	<!-- Small modal -->
	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<form action="../Upload/uploaded" method="POST" enctype="multipart/form-data" >
					Select File To Upload:<br />
					<input type="file" name="userfile"  />
					<br /><br />
					<input type="submit" name="submit" value="Upload" class="btn btn-success" />
				</form>
			</div>
		</div>
	</div>	
  </body>
</html>