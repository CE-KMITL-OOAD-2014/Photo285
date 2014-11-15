<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Photo285:Upload Your Photo</title>
		<!-- Bootstrap -->
		<link href="../../../css/bootstrap.min.css" rel="stylesheet">
		<style> <!--จาก bootsnipp.com--->
			img {
				-webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
				-moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
				box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
				margin-bottom:20px;
			}

			.link
			{
			   color:white;
			   text-decoration: none; 
			   background-color: none; <!--Link remove href-->
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
			.panel .panel-footer { padding: 8px !important; background-color: #A4A4A4 !important; border-bottom-right-radius: 0 !important; border-bottom-left-radius: 0 !important; }	
			.panel .panel-footer h4 { display: inline; font: 400 normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #FFFFFF margin: 0 !important; padding: 0 !important; }
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
			 */
			 .ekko-lightbox-container{position:relative}
			 .ekko-lightbox-nav-overlay{position:absolute;top:0;left:0;z-index:100;width:100%;height:100%}
			 .ekko-lightbox-nav-overlay a{z-index:100;display:block;width:49%;height:100%;padding-top:45%;font-size:30px;color:#fff;text-shadow:2px 2px 4px #000;opacity:0;filter:dropshadow(color=#000000,offx=2,offy=2);-webkit-transition:opacity .5s;-moz-transition:opacity .5s;-o-transition:opacity .5s;transition:opacity .5s}
			 .ekko-lightbox-nav-overlay a:empty{width:49%}.ekko-lightbox a:hover{text-decoration:none;opacity:1}
			 .ekko-lightbox .glyphicon-chevron-left{left:0;float:left;padding-left:15px;text-align:left}
			 .ekko-lightbox .glyphicon-chevron-right{right:0;float:right;padding-right:15px;text-align:right}
			 .ekko-lightbox .modal-footer{text-align:left}
		</style> 
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> <!---template from bootstrap.com--> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../../../js/bootstrap.min.js"></script>
		<script src="../../../jquery/jquery-1.10.2.min.js"></script>
		<script src="../../../js/font-awesome.min.css"></script>
		<script src="../../../js/ekko-lightbox.js"></script> <!--lightbox--->
		<script>
		$(document).ready(function () {
		$("#mytextbox").keyup(validatealbumname);
});

function validatealbumname(){
		var regex = /^[a-zA-Z0-9]{6,12}$/;
		var text = $("#mytextbox").val();
			if(regex.test(text)){
				$("#mytextbox").css( "background-color", "#9FF781" );
				checkname = true;
			}
			else{
				$("#mytextbox").css( "background-color", "#F78181" );
				checkname = false;	
				$("#namalbumsummit").prop("type", "button");
			}
	}
		</script>
		<script> <!--นำมาจาก bootsnipp.com--->
			$(function () {
			$('.button-checkbox').each(function () { <!--ส่วนปุ่ม checkbox icon---->
				// Settings
				var $widget = $(this),
					$button = $widget.find('button'),
					$checkbox = $widget.find('input:checkbox'),
					color = $button.data('color'),
					settings = {
						on: {
							icon: 'glyphicon glyphicon-unchecked'
						},
						off: {
							icon: 'glyphicon glyphicon-check'
						}
					};
				// Event Handlers
				$button.on('click', function () { <!---การเปลี่ยนแแปลงเมื่อกด button-->
					$checkbox.prop('checked', !$checkbox.is(':checked'));
					$checkbox.triggerHandler('change');
					updateDisplay();
				});
				$checkbox.on('change', function () {
					updateDisplay();
				});
				// Actions
				function updateDisplay() {
					var isChecked = $checkbox.is(':checked');

					// Set the button's state
					$button.data('state', (isChecked) ? "on" : "off");

					// Set the button's icon
					$button.find('.state-icon')
						.removeClass()
						.addClass('state-icon ' + settings[$button.data('state')].icon);

					// Update the button's color
					if (isChecked) {
						$button
							.removeClass('btn-default')
							.addClass('btn-' + color + ' active');
					}
					else {
						$button
							.removeClass('btn-' + color + ' active')
							.addClass('btn-default');
					}
				}

				// Initialization
				function init() {
					updateDisplay();
					// Inject the icon if applicable
					if ($button.find('.state-icon').length == 0) {
						$button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
					}
				}
				init();
			});
				
				$("#btndel").click(function(){
					$(".btnchk").toggleClass("chkhidden");
					$(".btnchk").siblings("input").prop("checked");
					console.log($(".btnchk").siblings("input").is(":checked"));
				}).click();
		});
		</script>
		<script> <!--นำ code มาจาก bootsnipp.com---->
			function showDiv() {
			document.getElementById('welcomeDiv').style.display = "block";
		}
		</script>
		
	</head>
	
	<body background="../../../img/white.jpg"> <!--ส่วน body (เพิ่ม backgroundเข้าไปด้วย)-->
	   <div class="container mt40"> <!-- container ใส่body ทั้งหมด--->
			<div class="col-md-3 col-xs-12 col-sm-12"> <!--แบ่งส่วนออกเป็น column--->
				<div class="col-md-12 col-xs-12 col-sm-12">
					<center>
						<a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="../../../photo/profile/<?echo "".$this->uri->segment(3).".jpg" ?>" name="aboutme" width="140" height="140" class="img-circle"></a><!--รูปประจำตัวผูใช้งาน-->
						<h3><? echo "".$name; ?></h3> <!--ชือของผู้ใช้งาน-->
					</center>
				</div>
				<div class="row">
					<center>
						<br>
							<?
								if($this->session->userdata('ID')){ // เปลี่ยนรูปแบบปุ่มเมื่อไม่ได้ login	
									$ID = $this->session->all_userdata();
									if($ID['ID']==$this->uri->segment(3)){
										echo "<a class='btn btn-primary ' data-toggle='modal' data-target='.bs-example-modal-lg'>Create Album</a>  <!---ปุ่มสร้างอัลบั้ม--->
											  <a class='btn btn-warning ' data-toggle='modal' data-target='.bs-example-modal-lg3' >Delete</a><br> <!---ปุ่มลบอัลบั้ม-->
											  <!-- Small modal --> <!--ส่วนที่ตัวเด้ง อัพโหลดจะเด้งขึ้นมา---> 
											<div class='modal fade bs-example-modal-lg' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'> <!--ส่วน modal สร้างอัลบั้ม-->
												<div class='modal-dialog modal-sm'>
													<div class='modal-content'>
														<div class='modal-header'>
															<button type='button' class='close' data-dismiss='modal' aria-hidden='true'></button>
															<h4 class='modal-title' id='mySmallModalLabel'>Your Album Name :</h4>  
														</div>
														<form action='../create' method='POST' enctype='multipart/form-data' >
														<em><label for='exampleInputName1'>Type Album Name</label></em>
														<input type='text' name='namealbum' id='mytextbox' class='form-control input-lg' autocomplete='off' placeholder='Allow Only [A-Za-z0-9]' tabindex='1' required='' autofocus='' style='background-color: rgb(247, 129, 129);'><br>
															<center>
															<input type='submit' name='submit' value='Summit'id='namalbumsummit' class='btn btn-success' />   
															</center>
														</form>
													</div>
												</div>
											</div>
											
											 <!-- Small modal --> <!--ส่วนที่ตัวเด้ง ลบรูป---> 
											<div class='modal fade bs-example-modal-lg3' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'>
												<div class='modal-dialog modal-sm'>
													<div class='modal-content'>
														<div class='modal-header'>
															<button type='button' class='close' data-dismiss='modal' aria-hidden='true'></button>
															<h4 class='modal-title' id='mySmallModalLabel'>Delete Album :</h4>   
														</div>
														<form action='../delete' method='POST' enctype='multipart/form-data' ><!-ส่วนใ้หเลือกว่าจะลบอัลบั้มไหน-->"; 
															 
															$showal = $this->db->where('nameuser',$this->uri->segment(3))->get('album');
															if($this->db->where('nameuser',$this->uri->segment(3))->count_all_results('album')==0)//ตรวจสอบว่า มีอัลบั้มไหม? ถ้าไม่มี ทำ if
															{ 
																echo" 
																<center>
																<h4>Don't have any album</h4>
																</center>";
															}
															else // ตรวจสอบแล้ว มีอัลบั้ม ทำ else
															foreach($showal->result_array() as $row) //วนลูปตามจำนวน album ที่มี เพื่อ สร้าง ให้ได้ตามจำนวนอัลบั้ม
															{
																echo"
																<left>
																<div class='radio'>
																  <label>
																	<input type='radio' name='checkdelete' id='optionsRadios1' value='".$row['namealbum']."'>
																	".$row['namealbum']."
																  </label>
																</div>
																</left>
																<hr>";
															}
															echo"<center>
															<input type='submit' name='submit' value='Summit' class='btn btn-success' />   
															</center>
														</form>
													</div>
												</div>
											</div>"; // <!--ปุ่มยืนยันการลบ ที่จะเด้งขึ้นมาหลังจาก กดปุ่ม delete แล้ว---->
									}
								}
							?>
					</center>
					</ul>
				</div>	
					
				<!-- Modal ของผู้ใช้ที่เด้งขึ้นมา---->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> <!---->
								<h4 class="modal-title" id="myModalLabel"><? echo "".$id; ?></h4>   <!---ชื่อผู้ใช้-->
							</div>
							<div class="modal-body">
								<center>
									<img src="../../../photo/profile/<? echo "".$this->uri->segment(3).".jpg" ?>" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
									<h3 class="media-heading"><? echo "".$name; ?></h3> <!--ชื่อ-->
									<span><strong>Email: </strong></span> 
									<span><? echo "".$email; ?></span>  <!--อีเมล-->
								</center>
								<hr>
								<center>
									<p class="text-left"><strong>ประวัติส่วนตัว:</strong><br><? echo "".$resume; ?></p>   <!--ประวัติส่วนตัว-->
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
				<h3>Choose Album</h3>
				<hr>
				 <? 
					$showal = $this->db->where('nameuser',$this->uri->segment(3))->get('album');
					if($this->db->where('nameuser',$this->uri->segment(3))->count_all_results('album')==0)//ตรวจสอบว่า มีอัลบั้มไหม? ถ้าไม่มี ทำ if
					{ 
						echo" 
						<center>
						<h4>You don't have any album</h4>
						</center>";
					}
					else // ตรวจสอบแล้ว มีอัลบั้ม ทำ else
					foreach($showal->result_array() as $row) //วนลูปตามจำนวน album ที่มี เพื่อ สร้าง ให้ได้ตามจำนวนอัลบั้ม
					{
					 echo"
						<article class='col-xs-12 col-sm-6 col-md-3'>
							<div class='panel panel-default'>
								<div class='panel-body'>
									<a href='../../photo/show/".$this->uri->segment(3)."/".$row['namealbum']."' title='".$row['namealbum']." Album' data-type='image' data-toggle='lightbox'><!--ชื่ออัลบั้มใต้รูป--> 
										<img src='../../../photo/album.jpg'>
									</a>
								</div>
								<div class='panel-footer'>
									<center>
										<h4><a href='../../photo/show/".$this->uri->segment(3)."/".$row['namealbum']."' title='".$row['namealbum']." Album'><div class='link'> ".$row['namealbum']."</div></a></h4>
									</center>
								</div>
							</div>
						</article> "; 
					}
				 ?>		
			</div>
		</div>
  </body>
</html>