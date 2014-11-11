<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Photo285:Upload Your Photo</title>
		<!-- Bootstrap -->
		<link href="../../../css/bootstrap.min.css" rel="stylesheet">
		<style>
<!--ส่วนแสดงผู้ใช้-->
img {
    -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
    margin-bottom:20px;
}

.dynamicTile .col-sm-2.col-xs-4{
    padding:5px;
}

.dynamicTile .col-sm-4.col-xs-8{
    padding:5px;
}

#tile1{
    background: rgb(0,172,238);
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
<!--ส่วนแสดงอัลบั้ม--->
@import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";

.mt40 { margin-top: 40px; }

.panel { position: relative; overflow: hidden; display: block; border-radius: 0 !important;  }
.panel-default { border-color: #ebedef !important; }
.panel .panel-body { position: relative; padding: 0 !important; overflow: hidden; height: auto; }
.panel .panel-body a { overflow: hidden; }
.panel .panel-body a img { display: block; margin: 0; width: 100%; height: auto; 
    transition: all 0.5s; 
    -moz-transition: all 0.5s; 
    -webkit-transition: all 0.5s; 
    -o-transition: all 0.5s; 
}
.panel .panel-body a.zoom:hover img { transform: scale(1.3); -ms-transform: scale(1.3); -webkit-transform: scale(1.3); -o-transform: scale(1.3); -moz-transform: scale(1.3); }
.panel .panel-body a.zoom span.overlay { position: absolute; top: 0; left: 0; visibility: hidden; height: 100%; width: 100%; background-color: #000; opacity: 0; 
    transition: opacity .25s ease-out;
    -moz-transition: opacity .25s ease-out;
    -webkit-transition: opacity .25s ease-out;
    -o-transition: opacity .25s ease-out;
}     
.panel .panel-body a.zoom:hover span.overlay { display: block; visibility: visible; opacity: 0.55; -moz-opacity: 0.55; -webkit-opacity: 0.55; filter: alpha(opacity=65); -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=65)"; }  
.panel .panel-body a.zoom:hover span.overlay i { position: absolute; top: 45%; left: 0%; width: 100%; font-size: 2.25em; color: #fff !important; text-align: center;
    opacity: 1;
    -moz-opacity: 1;
    -webkit-opacity: 1;
    filter: alpha(opacity=1);    
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=1)";
}
.panel .panel-footer { padding: 8px !important; background-color: #f9f9f9 !important; border-bottom-right-radius: 0 !important; border-bottom-left-radius: 0 !important; }	
.panel .panel-footer h4 { display: inline; font: 400 normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #34495e margin: 0 !important; padding: 0 !important; }
.panel .panel-footer i.glyphicon { display: inline; font-size: 1.125em; cursor: pointer; }
.panel .panel-footer i.glyphicon-thumbs-up { color: #1abc9c; }
.panel .panel-footer i.glyphicon-thumbs-down { color: #e74c3c; padding-left: 5px; }
.panel .panel-footer div { width: 15px; display: inline; font: 300 normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #34495e; text-align: center; background-color: transparent !important; border: none !important; }	

.modal-title { font: 400 normal 1.625em "Roboto",Arial,Verdana,sans-serif; }
.modal-footer { font: 400 normal 1.125em "Roboto",Arial,Verdana,sans-serif; } 

/*!
 * Lightbox for Bootstrap 3 by @ashleydw
 * https://github.com/ashleydw/lightbox
 *
 * License: https://github.com/ashleydw/lightbox/blob/master/LICENSE
 */.ekko-lightbox-container{position:relative}.ekko-lightbox-nav-overlay{position:absolute;top:0;left:0;z-index:100;width:100%;height:100%}.ekko-lightbox-nav-overlay a{z-index:100;display:block;width:49%;height:100%;padding-top:45%;font-size:30px;color:#fff;text-shadow:2px 2px 4px #000;opacity:0;filter:dropshadow(color=#000000,offx=2,offy=2);-webkit-transition:opacity .5s;-moz-transition:opacity .5s;-o-transition:opacity .5s;transition:opacity .5s}.ekko-lightbox-nav-overlay a:empty{width:49%}.ekko-lightbox a:hover{text-decoration:none;opacity:1}.ekko-lightbox .glyphicon-chevron-left{left:0;float:left;padding-left:15px;text-align:left}.ekko-lightbox .glyphicon-chevron-right{right:0;float:right;padding-right:15px;text-align:right}.ekko-lightbox .modal-footer{text-align:left
	</style>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../../../js/bootstrap.min.js"></script>
		<script src="../../../jquery/jquery-1.10.2.min.js"></script>
		<script src="../../../js/font-awesome.min.css"></script>
		<script> <!--ส่วนตั้งเวลา ไสลด์รูป-->
			$(window).resize(function() {
			if(this.resizeTO) clearTimeout(this.resizeTO);
			this.resizeTO = setTimeout(function() {
				$(this).trigger('resizeEnd');
			}, 10);
			});
		</script>
		<script src="../../../js/ekko-lightbox.js"></script> <!--lightbox--->
	</head>
	<body background="../../../img/white.jpg">
	   <div class="container mt40">
			<div class="col-md-3 col-xs-12 col-sm-12">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<center>
						<a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="../../../photo/profile/<?$ID = $this->session->all_userdata(); echo "".$ID['ID'].".jpg" ?>" name="aboutme" width="140" height="140" class="img-circle"></a>
						<h3><? echo "".$name; ?></h3>
					</center>
				</div>
				<!-- Boxes de Acoes -->
				<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="box">							
						<div class="icon">
							</br>
							</br>	
						</div>
						<div class="space"></div>
					</div> 
				</div>
					
				<!-- Modal ของผู้ใช้ที่เด้งขึ้นมา---->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title" id="myModalLabel"><? echo "".$id; ?></h4>   <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
							</div>
							<div class="modal-body">
								<center>
									<img src="../../../photo/profile/<?$ID = $this->session->all_userdata(); echo "".$ID['ID'].".jpg" ?>" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
									<h3 class="media-heading"><? echo "".$name; ?></h3> <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
									<span><strong>Email: </strong></span> 
									<span><? echo "".$email; ?></span>  <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
								</center>
								<hr>
								<center>
									<p class="text-left"><strong>ประวัติส่วนตัว:</strong><br><? echo "".$resume; ?></p>   <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
									<br>
								</center>
							</div>
							<div class="modal-footer"> <!--ปุ่ม ปิด modal ส่วนล่าง--->
								<center>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</center>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<!--ส่วนแสดงอัลบั้ม-->
			<div class="col-md-9 col-xs-12 col-sm-12"> 
				<h3>Choose Your Album you</h3>
				<hr>
				<section class="row"><!--จัดรูปเป็นแถว-->
					<article class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="#" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
									<img src="http://lorempixel.com/350/350/nature/4" alt="Nature Portfolio" />
									<span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
								</a>
							</div>
							<div class="panel-footer">
								<h4><a href="#" title="Nature Portfolio">Nature</a></h4>
							</div>
						</div>
					</article>

					<article class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="#" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
									<img src="http://lorempixel.com/350/350/food/2" alt="Food Portfolio" />
									<span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
								</a>
							</div>
							<div class="panel-footer">
								<h4><a href="#" title="Food Portfolio">Food</a></h4>
							</div>
						</div>
					</article>

					<article class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="#" title="Sports Portfolio" class="zoom" data-title="Radical Sports" data-footer="This are the best moments" data-type="image" data-toggle="lightbox">
									<img src="http://lorempixel.com/350/350/sports/3" alt="Sports Portfolio" />
									<span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
								</a>
							</div>
							<div class="panel-footer">
								<h4><a href="#" title="Sports Portfolio" title="Sports">Sports</a></h4>  
							</div>
						</div>
					</article>

					<article class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="#" title="People Portfolio" class="zoom" data-title="Beautiful People" data-footer="We create relationships" data-type="image" data-toggle="lightbox">
									<img src="http://lorempixel.com/350/350/people/1" alt="People Portfolio" />
									<span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
								</a>
							</div>
							<div class="panel-footer">
								<h4><a href="#" title="People Portfolio">People</a></h4>  
							</div>
						</div>
					</article>                                              
				</section>
				
				<section class="row"> <!--จัดรูปเป็นแถว-->
					<article class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="#" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
									<img src="http://lorempixel.com/350/350/nature/4" alt="Nature Portfolio" />
									<span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
								</a>
							</div>
							<div class="panel-footer">
								<h4><a href="#" title="Nature Portfolio">Nature</a></h4>
							</div>
						</div>
					</article>

					<article class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="#" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
									<img src="http://lorempixel.com/350/350/food/2" alt="Food Portfolio" />
									<span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
								</a>
							</div>
							<div class="panel-footer">
								<h4><a href="#" title="Food Portfolio">Food</a></h4>
							</div>
						</div>
					</article>

					<article class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="#" title="Sports Portfolio" class="zoom" data-title="Radical Sports" data-footer="This are the best moments" data-type="image" data-toggle="lightbox">
									<img src="http://lorempixel.com/350/350/sports/3" alt="Sports Portfolio" />
									<span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
								</a>
							</div>
							<div class="panel-footer">
								<h4><a href="#" title="Sports Portfolio" title="Sports">Sports</a></h4>  
								<span class="pull-right">

								</span>
							</div>
						</div>
					</article>

					<article class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="#" title="People Portfolio" class="zoom" data-title="Beautiful People" data-footer="We create relationships" data-type="image" data-toggle="lightbox">
									<img src="http://lorempixel.com/350/350/people/1" alt="People Portfolio" />
									<span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
								</a>
							</div>
							<div class="panel-footer">
								<h4><a href="#" title="People Portfolio">People</a></h4>  

							</div>
						</div>
					</article>                                              
				</section>
			</div>
		</div>
		
  </body>
</html>