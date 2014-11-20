<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photo285:Upload Your Photo</title> <!---ชื่อ title ที่จะอยู่ตรงแถบด้านบน--->

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<style> <!---css ที่ตั้งค่า -->
	  .link <!--ตั้งค่าให้ปุ่ม href เปลี่ยนเอักษรเป็นสีขาว-->
	{
	   color:white;
	   text-decoration: none; 
	   background-color: none;
	}
	</style> <!--เป็นการ import template มาจาก bootstrap.com--->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/bootstrap.min.js"></script>
  
	<body background="../../img/white.jpg"> <!---body พร้อม background-->
		<form role="form" action="../member/editProfileSend" method="post"> <!---ส่วนกรอกฟอร์ม ที่ไว้กรอก---> 
			<div class ="col-md-2"></div>	<!--เพื่อเว้นว่างฝั่งซ้าย-->
			<div class ="col-md-8">	
				<h2> Edit Profile</h2><!--คำพูดหัวข้อ-->
				<hr>
				<div class ="col-md-4">	
					<center>
						<a href="#aboutModal" ><img src="../../photo/profile/<?$ID = $this->session->all_userdata(); echo "".$ID['ID'].".jpg" ?>" name="aboutme" width="140" height="140" class="img-circle"></a></br><br/> <!--รูปประจำตัว-->
						<a class="btn btn-primary " data-toggle="modal" data-target=".bs-example-modal-sm">Upload photo</a> <!--ปุ่มอัพโหลด photo--> 
					</center>
				</div>
				<div class ="col-md-8">	
					<div class="col-md-12">  <!--ส่วนแสดง username----A-->
						<div class="form-group">
							<div class="col-md-12">
								<label for="exampleInputUsername1">Username</label> 
							</div>
							<div class="col-md-12">
								<input type="text" name="username" class="form-control " width = "50%" id="exampleInputUsername1" value="<? echo "".$id; ?>" readonly="readonly"required autofocus> <!--ส่่วนแสดงว่า usernameคืออะไร-->
							</div>
						</div>
					</div> <!--ส่วนกรอก username------>
							
					<div class="col-md-12">  <!--ส่วน EMAIL--->
						<div class="form-group">
							<div class="col-md-12">
								<label for="exampleInputEmail1">Email address</label> <!--ส่วนแสดงอีเมลผูใช้-->
							</div>
							<div class="col-md-12">
								<input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<? echo "".$email; ?>" readonly="readonly" required autofocus> <!---ส่วนแสดงอีเมลล์-->
							</div>
						</div>
					</div>  
							
					<div class="col-md-12"> <!--ส่วนกรอก NAME---->
						<div class="form-group">
							<div class="col-md-12">
								<label for="exampleInputName1">Name</label>
							</div>
							<div class="col-md-12">
								<input type="text" name="name" class="form-control" id="exampleInputName1"  pattern=".{6,60}" required title="6 to 60 characters" value="<? echo "".$name; ?>" required autofocus> <!--ข่องกรอก  NAME-->
							</div>
						</div>
					</div> 			
							
					<div class="col-md-12">  <!--ส่วนกรอก DESCRIPTION----->
						<div class="form-group">
							<div class="col-md-12">
								<label for="exampleInputEmail1">ประวัติส่วนตัว</label>
							</div>
							<div class="col-md-12">
								<input type="message" name="resume" class="form-control" id="des" value="<? echo "".$resume; ?>"> <!---ช่องกรอก DESCRIPTION-->
							</div>
						</div>
					</div>  
							
					<div class="col-md-12">  <!--ส่วนกรอก NOTICE--->
						<div class="form-group">
							<div class="col-md-12">
								<label for="exampleInputEmail1">ข่าวสาร</label>
							</div>
							<div class="col-md-12">
								<input type="text" name="detail" maxlength="64" class="form-control" id="test" value="<? echo "".$detail; ?>"> <!---ช่องกรอก NOTICE---->
							</div>
						</div>
					</div>  
				
					<div class="col-md-12"> <!------ส่วนกด SUMMIT--->
						<div class="col-md-12">
							</br>
							<button type="submit" value="OK" id ="regisbutton" class="btn btn-success">Submit</button> <!--ปุ่มตกลง-->
							<a href="../../profile/show/<? echo "".$id; ?>" id ="cancel" class="btn btn-warning"><div class="link">cancel</div></a> <!--ปุ่มยกเลิก-->
						</div>
					</div> 
				</div>	
			</div>
		</form>
					
    
		<!-- Small modal ที่เด้งมาให้เลือกอัพโหลดไฟล์ที่จะเป็น Profile picture-->
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						<h4 class="modal-title" id="mySmallModalLabel">Choose your profile picture :</h4>   
					</div>
					<form action="../../photodb/uploadprofile" method="POST" enctype="multipart/form-data" >
						Select File To Upload:<br />
						<input type="file" name="userfile"  />
						<hr>
						<em><label>Picture must be small than 5000px*5000px</label></em><br>
						<em><label>Type : JPG || PNG ||JPEG</label></em><br>
						<center><input type="submit" name="submit" value="Upload" class="btn btn-success" /></center>
					</form>
				</div>
			</div>
		</div>	
	
  </body>
</html>