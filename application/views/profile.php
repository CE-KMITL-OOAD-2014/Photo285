<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photo285 : Upload Your Picture</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	
	<style> <!--ส่วนตั้งค่า รูป และ Light box นำค่ามาจาก bootsnipp.com-->
	body {
    padding: 30px 0px;
}

#lightbox .modal-content {
    display: inline-block;
    text-align: center;   
}

#lightbox .close {
    opacity: 1;
    color: rgb(255, 255, 255);
    background-color: rgb(25, 25, 25);
    padding: 5px 8px;
    border-radius: 30px;
    border: 2px solid rgb(255, 255, 255);
    position: absolute;
    top: -15px;
    right: -55px;
    z-index:1032;
}

 .link
{
   color:white;
   text-decoration: none; 
   background-color: none; <!--Link remove href-->
}

.box > .icon { text-align: center; position: relative; }
.box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #63B76C; vertical-align: middle; }
.box > .icon:hover > .image { background: #333; }
.box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
.box > .icon:hover > .image > i { color: white !important; }
.box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; }
.box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
.box > .icon > .info > h3.title { font-family: "Roboto",sans-serif !important; font-size: 16px; color: #222; font-weight: 500; }
.box > .icon > .info > p { font-family: "Roboto",sans-serif !important; font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
.box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
.box > .icon > .info > .more a { font-family: "Roboto",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
.box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
.box .space { height: 30px; }
	</style>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/font-awesome.min.css"></script>
	<script> <!--ส่วน lightbox-->
	$(document).ready(function() {
    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
});
	</script>

  </head>
  <body background="../../../img/white.jpg"> <!---body ที่ใส่ background เข้าไปด้วย--->
	   <div class="container">
			<div class="col-md-3 col-xs-12 col-sm-12"> <!--colในส่วนซ้าย ที่มี รายละเอียดของผู้ใช้งาน-->
				  <div class="col-md-12 col-xs-12 col-sm-12">
						<center>
							<a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="../../../photo/profile/<? echo "".$this->uri->segment(3).".jpg"; ?>" name="aboutme" width="140" height="140" class="img-circle"></a>
							<h3>
								<? echo"".$name; ?>
							</h3>
							<em>
								<? echo"email: ".$email; ?>
							</em>
						</center>
					</div>
					
					<!-- Boxes de Acoes -->
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="row">
						<center>
							<br>
							<a href="../../../album/show/<? echo "".$this->uri->segment(3); ?>"><button type="button" class="btn btn-primary navbar-btn"><div class="link">See More Album</div></button></a> <!-----เปลี่ยนไปหน้า Manage album----->
						</center>
						</ul>
					</div>
						<div class="box">							
							<div class="icon">
								</br>
								</br>
								<div class="info">
									<h3 class="title">ข่าวสาร</h3>
									<p>
										<? echo"".$detail; ?> <!--ข่าวสาร--->
									</p>
								</div>
							</div>
							<div class="space"></div>
						</div> 
					</div>
					
				
			<!-- Modal ที่เด้งโชว์ผู้ใช้ แสดงประวัตส่วนตัว--> 
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title" id="myModalLabel">
									<? echo"".$id; ?>
								</h4>   <!--ดึงชื่อมาจาก db-->
							</div>
							<div class="modal-body">
								<center>
									<img src="../../../photo/profile/<? echo "".$this->uri->segment(3).".jpg" ?>" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
									
									<h3 class="media-heading"><? echo $id; ?></h3> <!--แสดงชื่อผู้ใช้-->
									<span><strong>Email: </strong></span>
									<span>
									<!--ดึงข้อมูลจาก db มาแสดง email-->
										<? echo"".$email; ?>
									</span>
								</center>
								<hr>
								<center>
								<p class="text-left"><strong>ประวัติส่วนตัว: </strong><br>
									<? echo"".$resume; ?>		<!--ประวัติส่วนตัว--->						
								
								</p>  
								<br>
								</center>
							</div>
							<div class="modal-footer">
								<center>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</center>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="col-md-9 col-xs-0 col-sm-0"> <!---ส่วนที่ col แสดงรูปภาพที่ต้องการแสดง-->
				
				<!--รูปที่ 1 -->
				<div class="col-md-4 col-xs-6 col-sm-3">
					<?
					if($photom1==0){ //กรณีที่ยังไม่มีการ set รูปหน้าหลัก
						echo "
							<a href='#' class='thumbnail'> <!--ส่วนแสดงรูปภาพหน้าหลัก รูป 1--->
							<img src='../../../../photo/".$photom1.".jpg' alt='...'width='220' height='220'>
							</a>
						";
					}
					else{ //กรณีที่มีการ set รูปหน้าหลักแล้ว
						echo "
							<a href='../../../../onephoto/show/".$photom1."' class='thumbnail' >  <!--ส่วนแสดงรูปภาพหน้าหลัก รูป 1--->
							<img src='../../../../photo/".$photom1.".jpg' alt='...'width='220' height='220'>
							</a>
						";
					}
					?>
				</div>
				
				<!--รูปที่ 2 -->
				<div class="col-md-4 col-xs-6 col-sm-3">
					<?
					if($photom2==0){ //กรณีที่ยังไม่มีการ set รูปหน้าหลัก
						echo "
							<a href='#' class='thumbnail'> <!--ส่วนแสดงรูปภาพหน้าหลัก รูป 2--->
							<img src='../../../../photo/".$photom2.".jpg' alt='...'width='220' height='220'>
							</a>
						";
					}
					else{ //กรณีที่มีการ set รูปหน้าหลักแล้ว
						echo "
							<a href='../../../../onephoto/show/".$photom2."' class='thumbnail' >  <!--ส่วนแสดงรูปภาพหน้าหลัก รูป 2--->
							<img src='../../../../photo/".$photom2.".jpg' alt='...'width='220' height='220'>
							</a>
						";
					}
					?>
				</div>
				
				<!--รูปที่ 3 -->
				<div class="col-md-4 col-xs-6 col-sm-3">
					<?
					if($photom3==0){ //กรณีที่ยังไม่มีการ set รูปหน้าหลัก
						echo "
							<a href='#' class='thumbnail'> <!--ส่วนแสดงรูปภาพหน้าหลัก รูป 3--->
							<img src='../../../../photo/".$photom3.".jpg' alt='...'width='220' height='220'>
							</a>
						";
					}
					else{ //กรณีที่มีการ set รูปหน้าหลักแล้ว
						echo "
							<a href='../../../../onephoto/show/".$photom3."' class='thumbnail' >  <!--ส่วนแสดงรูปภาพหน้าหลัก รูป 3--->
							<img src='../../../../photo/".$photom3.".jpg' alt='...'width='220' height='220'>
							</a>
						";
					}
					?>
				</div>
				
				<!--รูปที่ 4 -->
				<div class="col-md-12 col-xs-6 col-sm-3">
					<?
					if($photom4==0){ //กรณีที่ยังไม่มีการ set รูปหน้าหลัก
						echo "
							<a href='#' class='thumbnail'> <!--ส่วนแสดงรูปภาพหน้าหลัก รูป 4--->
							<img src='../../../../photo/".$photom4.".jpg' alt='...'width='220' height='220'>
							</a>
						";
					}
					else{ //กรณีที่มีการ set รูปหน้าหลักแล้ว
						echo "
							<a href='../../../../onephoto/show/".$photom4."' class='thumbnail' >  <!--ส่วนแสดงรูปภาพหน้าหลัก รูป 4--->
							<img src='../../../../photo/".$photom4.".jpg' alt='...'width='220' height='220'>
							</a>
						";
					}
					?>
				</div>
			</div>	
		</div>
	</body>
</html>