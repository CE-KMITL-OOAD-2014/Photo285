
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
					<input type="email" class="input-block-level" placeholder="Email address" required="">
    <input id="pass" type="password" class="input-block-level" placeholder="Password" required="">
    <input id="cpass" type="password" class="input-block-level" placeholder="ConfirmPassword" required="">
	<script>
	$('form').on('submit',function(){
   if($('#pass').val()!=$('#cpass').val()){
       alert('Password not matches');
       return false;
   }
   return true;
});
</script>
    <button class="btn btn-large btn-primary" type="submit">Sign in</button>
	
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