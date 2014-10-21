  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <link href="js/bootstrap.min.js">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>


<form class="form-signin">
    <input type="email" class="input-block-level" placeholder="Email address" required="">
    <input id="pass" type="password" class="input-block-level" placeholder="Password" required="">
    <input id="cpass" type="password" class="input-block-level" placeholder="ConfirmPassword" required="">
    <button class="btn btn-large btn-primary" type="submit">Sign in</button>
</form>


<script>
$('form').on('submit',function(){
   if($('#pass').val()!=$('#cpass').val()){
       alert('Password not matches');
       return false;
   }
   return true;
});
</script>