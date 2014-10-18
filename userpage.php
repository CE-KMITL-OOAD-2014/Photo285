<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
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
					<a class="navbar-brand" href="#">Photo285</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav navbar-right">
					 <li class="dropdown">
					 <li class="nonactive"><a href="managealbum.php">Manage Album</a></li>
					 <li class="active"><a href="#">username</a></li>
					 </li>
				  </ul>
				</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
		
		
		<div class="col-xs-2 col-md-1">
		<div class="row" align="center" >
			<h3>Profile Description</h3>
			<a href = "#">EditProfile</a>
		</div>
		</div>	
		
		
		<div class="col-xs-10 col-md-11">
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" >
					<img src="img/Album.jpg" alt="...">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail"  >
					<img src="img/Album.jpg" alt="...">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail"  >
					<img src="img/Album.jpg" alt="...">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg1" >
					<img src="img/Jellyfish.jpg" alt="...">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg2" >
					<img src="img/Lighthouse.jpg" alt="...">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg3" >
					<img src="img/Chrysanthemum.jpg" alt="...">
				</a>
			</div>
				<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg4" >
					<img src="img/Hydrangeas.jpg" alt="...">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg1" >
					<img src="img/Jellyfish.jpg" alt="...">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg2" >
					<img src="img/Lighthouse.jpg" alt="...">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg3" >
					<img src="img/Chrysanthemum.jpg" alt="...">
				</a>
			</div>
				<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg4" >
					<img src="img/Hydrangeas.jpg" alt="...">
				</a>
			</div>
		</div>
		</div>	
		
    <!-- Modal -->
	<div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content"> 
				<div class= "row">
					<img src="img/Jellyfish.jpg" alt="...">
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content"> 
				<div class= "row">
					<img src="img/Lighthouse.jpg" alt="...">
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade bs-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content"> 
				<div class= "row">
					<img src="img/Chrysanthemum.jpg" alt="...">
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade bs-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content"> 
				<div class= "row">
					<img src="img/Hydrangeas.jpg" alt="...">
				</div>
			</div>
		</div>
	</div>
		
		
		
	
		
		
  </body>
</html>