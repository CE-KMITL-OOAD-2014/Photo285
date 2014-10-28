<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
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
	
	<script>
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
  <body>
	   <div class="container">
			<div class="col-md-3 col-xs-12 col-sm-12">
					
				  <div class="col-md-12 col-xs-12 col-sm-12">
						<center>
							<a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
							<h3><? echo $id; ?></h3>
							<em><?
								$data = $this->db->where('ID',$id)->get('account');
									foreach($data->result_array() as $row){
										echo"email: ".$row['email'];
									}
							?></em>
						</center>
					</div>
					
					<!-- Boxes de Acoes -->
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="box">							
							<div class="icon">
								</br>
								</br>
								<div class="info">
									<h3 class="title">TOPIC</h3>
									<p>
										ithink i know you.
									</p>
								</div>
							</div>
							<div class="space"></div>
						</div> 
					</div>
					
				
			<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title" id="myModalLabel">More About Joe</h4>   <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
							</div>
							<div class="modal-body">
								<center>
									<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
									
									<h3 class="media-heading"><? echo $id; ?></h3> <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
									<span><strong>Email: </strong></span>  <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
									<span>
									<?
										$data = $this->db->where('ID',$id)->get('account');
											foreach($data->result_array() as $row){
												echo"email: ".$row['email'];
											}
									?>
									</span>  <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
								</center>
								<hr>
								<center>
								<p class="text-left"><strong>Annouce: </strong><br>
										I am looking for someone with honesty and integrity. 
										Please be who you say you are–please no game players! 
										Please show a recent photo (get out of denial, yes, you 
										and I both have aged–hopefully, gracefully, lol!) 
										We all wish we looked and felt the way we did 10 years ago! :)
										A person with a good sense of humor… A smile goes a long way–make someone happy today! 
										My profile says I am 50… Sorry, I wasn’t able to change it… I am ….. 56!</p>   <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
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
		<div class="col-md-9 col-xs-0 col-sm-0">
			<div class="col-md-4 col-xs-6 col-sm-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
					<img src="https://s3.amazonaws.com/ooomf-com-files/lqCNpAk3SCm0bdyd5aA0_IMG_4060_1%20copy.jpg" alt="...">
				</a>
			</div>
			<div class="col-md-4 col-xs-6 col-sm-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
					<img src="https://s3.amazonaws.com/ooomf-com-files/deYU3EyQP9cN23moYfLw_Dandelion.jpg" alt="...">
				</a>
			</div>
			<div class="col-md-4 col-xs-6 col-sm-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
					<img src="https://s3.amazonaws.com/ooomf-com-files/8H0UdTsvRFqe03hZkNJr_New%20York%20-%20On%20the%20rock%20-%20Empire%20State%20Building.jpg" alt="...">
				</a>
			</div>
			<div class="col-md-12 col-xs-6 col-sm-3">
				<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
					<img src="https://s3.amazonaws.com/ooomf-com-files/Z3LXxzFMRe65FC3Dmhnp_woody_unsplash_DSC0129.jpg" alt="...">
				</a>
			</div>
		</div>
			
</div>

<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" />
				
				
            </div>
        </div>
    </div>
</div>

  </body>
</html>