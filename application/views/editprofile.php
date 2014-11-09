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
    <form role="form" action="../member/register" method="post"> 
<div class ="col-md-2"></div>
						<div class ="col-md-8">	
						<h2> Edit Profile</h2>
						<hr>
						<div class ="col-md-4">	
						 <div class="col-md-12 col-xs-12 col-sm-12">
						<center>
							<a href="#aboutModal" ><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
							<div class="row">
						<center>
							<br>
							<a class="btn btn-primary " data-toggle="modal" data-target=".bs-example-modal-sm">Upload photo</a>
							
						</center>
						</ul>
					</div>
							<!--<em>joe.sixpack@hotmail.com</em>-->
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
										<output type="text" name="ID" class="form-control " width = "50%" id="exampleInputUsername1" placeholder="<? echo "test" ?>" readonly="readonly"required autofocus>
									</div>
								</div>
						</div> <!--ส่วนกรอก username------>
						
						<div class="col-md-12">  <!--ส่วนกรอก EMAIL----A-->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputEmail1">Email address</label>
								</div>
								<div class="col-md-12">
									<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="ตรงนี้ต้อง เป็น EMANIL ห้ามเปลี่ยนนน" readonly="readonly" required autofocus>
								</div>
							</div>
						</div>  <!--ส่วนกรอก EMAIL------>
						
						<div class="col-md-12"> <!--ส่วนกรอก NAME----A-->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputName1">Name</label>
								</div>
								<div class="col-md-12">
									<input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="ตรงนี้ต้องเป็นชื่อเก่า แสดงอยู่ ชื่อออออ " required autofocus>
								</div>
							</div>
						</div>  <!--ส่วนกรอก NAME------>					
						
						<div class="col-md-12">  <!--ส่วนกรอก DESCRIPTION----->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputEmail1">ประวัติส่วนตัว</label>
								</div>
								<div class="col-md-12">
									  <textarea type="message" name="des" class="form-control" id="des" placeholder="Enter Description Here ..." required autofocus rows="5"></textarea>
								</div>
							</div>
						</div>  <!--ส่วนกรอก DESCRIPTION----->
						
						<div class="col-md-12">  <!--ส่วนกรอก NOTICE--->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputEmail1">ข่าวสาร</label>
								</div>
								<div class="col-md-12">
									 <input type="email" name="email" maxlength="64" class="form-control" id="exampleInputEmail1" placeholder="Enter Notice Header here ..."  required autofocus>
								</div>
							</div>
						</div>  <!--ส่วนกรอก NOTICE----->
						<div class="col-md-12">  <!--ส่วนกรอก NOTICE--->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputEmail1">Notices</label>
								</div>
								<div class="col-md-12">
									  <textarea type="message" name="mess2" maxlength="256" class="form-control" id="mess2" placeholder="Enter Notices Story Here ..." required autofocus rows="3"></textarea>
								</div>
							</div>
						</div>  <!--ส่วนกรอก NOTICE----->
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
							</br>
							<button type="submit" value="OK" id ="regisbutton" class="btn btn-success">Submit</button>
							<button  id ="cancel" class="btn btn-warning"><a href="#"><div class="link"> Cancel</div> </a></button>
							</div>
						</div> <!------ส่วนกด SUMMIT--->
						
					</form>
					</div>
</div>
    
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