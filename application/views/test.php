
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

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

    <!-- Modal -->
	<div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!--ส่วนเชื่อม แถบเด้งๆ---ของ SIGN UP------->
		<div class="modal-dialog modal-lg">
			<div class="modal-content"> 
				<div class= "row">
					<form role="form" action="../member/register" method="post">  
						<br/>
						<div class="col-md-12"> <!--ส่วนกรอก PASSWAORD--A-->
							<div class="form-group">
								<div class="col-md-12">
									<label for="exampleInputPassword1">Password</label>
								</div>
								<div class="col-md-12">
									<input type="password" name="pass" class="form-control" id="pass" placeholder="Password" required autofocus>
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
						$('form').on('submit',function(){
						   if($('#pass').val()!=$('#cpass').val()){
							   alert('Password not matches');
							   return false;
						   }
						   return true;
						});
						</script>
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

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>