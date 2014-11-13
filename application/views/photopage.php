<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
	 /* CSS used here will be applied after bootstrap.css */

html, body { height: 100%;}

/* So that the modal is displayed in the preview.. You can probably remove this and the above rule */
.img-modal {
  display: block;
}

.img-modal .modal-dialog {
    /* An arbitrary minimum height. Feel free to modify this one as well */
    min-height: 350px;
    height: 80%;
}

.img-modal .modal-content, .img-modal .modal-body, .img-modal .row, .img-modal .modal-image {
    height: 100%;
}

.modal-content {
    border-radius: 0;
}

.modal-body {
    padding-top: 0;
    padding-bottom: 0;
}

.modal-image {
    background: #000;
    padding :0;
}

.modal-image img {
    margin: 0 auto;
    max-height: 100%;
    max-width: 100%;
    
    position: relative;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

.img-modal .img-modal-btn {
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    background: black;
    opacity: 0;
    font-size: 1.5em;
    width: 45px;
    color: #fff;
    transition: opacity .2s ease-in;
}

.img-modal .modal-image:hover .img-modal-btn {
    opacity: 0.4;  
}

.img-modal .modal-image:hover .img-modal-btn:hover {
   opacity: 0.75;   
}

.img-modal .img-modal-btn.right {
    right: 0;
}

.img-modal .img-modal-btn i {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    text-align: center;
    margin-top: -.75em;
}

.img-modal .modal-meta {
    position: relative;   
    height: 100%;
}

.img-modal .modal-meta-top {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 45px;
    padding: 5px 10px;
    overflow-y: auto;
}

.img-modal .modal-meta-top .img-poster img {
    height: 70px;
    width: 70px;
    float: left;
    margin-right: 15px;
}

.img-modal .modal-meta-top .img-poster strong {
    display: block; 
    padding-top: 15px;
}

.img-modal .modal-meta-top .img-poster span {
    display: block;   
    color: #aaa;
    font-size:.9em;
}

.img-modal .modal-meta-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 5px;
    border-top: solid 1px #ccc;
}

.img-modal .img-comment-list {
    list-style: none;  
    padding: 0;
}
.img-modal .img-comment-list li {
    margin:0;
    margin-top:10px;
}

.img-modal .img-comment-list li > div {
    display:table-cell;
}

.img-modal .img-comment-list img {
    border-radius:50%;
    width: 42px;
    height: 42px;
    margin-right: 10px;
    margin-top: 20px;
}

.img-modal .img-comment-list p {
    margin: 0;
}

.img-modal .img-comment-list span {
    font-size: .8em; 
    color: #aaa;
}	
.chkhidden{
		display:none;
		position: absolute;
	}
<!--ส่วน comment_like-->
	</style>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../../../https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../../js/bootstrap.min.js"></script>
	<script> <!--นำมาจาก bootsnipp.com--->
	$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
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
	<script> 
  $(function(){
    // This code is not even almost production ready. It's 2am here, and it's a cheap proof-of-concept if anything.
    $(".img-modal-btn.right").on('click', function(e){
        e.preventDefault();
        cur = $(this).parent().find('img:visible()');
        next = cur.next('img');
        par = cur.parent();
        if (!next.length) { next = $(cur.parent().find("img").get(0)) }
        cur.addClass('hidden');
        next.removeClass('hidden');
        
        return false;
    })
    
    $(".img-modal-btn.left").on('click', function(e){
        e.preventDefault();
        cur = $(this).parent().find('img:visible()');
        next = cur.prev('img');
        par = cur.parent();
        children = cur.parent().find("img");
        if (!next.length) { next = $(children.get(children.length-1)) }
        cur.addClass('hidden');
        next.removeClass('hidden');
        
        return false;
    })
	$('#photoModal').modal('toggle').click(); <!--ส่วนนี้ทำให้คลิก แล้ว modal เด้ง--->
});
  </script>
  <script> <!--ส่วนนี้ นับ LIKE--ตรงนี้ต้องแก้ให้มัน กดซ้ำ แล้ว UNLIKE->
  $(document).ready(function() {              
       $('i.glyphicon-thumbs-up').click(function(){    
        var $this = $(this),
        c = $this.data('count'),
		str = "<br/><br/><br/><center>"; 
        if (!c) c = 0;
        c++;
        $this.data('count',c);
        $('#'+this.id).html((str.concat(c)).concat("</center>"));
    });  
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });                                        
});
  </script>
	
	</head>
	<body background="../../../../img/white.jpg">
	   <div class="container">
			<div class="col-md-3 col-xs-12 col-sm-12">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<center>		
						<a href="#aboutModal" data-toggle="modal" data-target="#myModal"><!--เปลี่ยนเป็นรูปตาม userprofile--><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
						<h3>Joe Sixpack</h3> <!---เปลี่ยนเป็นตัวแปรตรงนี้---->
					</center>
				</div>
				<div class="row">
					<center>
						<br>
						<a class="btn btn-primary " data-toggle="modal" data-target=".bs-example-modal-sm">Upload photo</a>
					</center>
					</ul>
				</div>			
			</div>
			
			<!-- Small modal --> <!--ส่วนที่ตัวเด้ง อัพโหลดจะเด้งขึ้นมา---> 
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
				
			<!-- Modal -ส่วนแสดง popup user----> 
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
									<h3 class="media-heading">Joe Sixpack </h3> <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
								<span><strong>Email: </strong></span>  <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
									<span>joe.sixpack@hotmail.com</span>  <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
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
								<button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Joe</button>
							</center>
						</div>
					</div>
				</div>
			</div>
		
			<div class="col-md-9 col-xs-12 col-sm-12"> <!---ส่วนแสดงรูปในอัลบั้ม-->
				<div class="container">
					<h1 class="muted">Album name</h1>
					<hr>
					<div class='col-md-9 col-xs-12 col-sm-12'> 
						<span onclick='javascript:$('#photoModal').modal('toggle');'> <!--ถ้าคลิก จะเชื่อมไป photomodal เด้ง comment&like-->
							<?
							if($photo==NULL) //ตรวจสอบว่า มีรูปไหม? ถ้าไม่มี ทำ if
							{
								echo" 
								<center>
								<h4>You don't have any photo</h4>
								</center>";
							}
							else {// ตรวจสอบแล้ว มีรูป ทำ else
							for($i=0; $i <count($photo) ; $i++) //วน for เพื่อให้ รูปขึ้น
							echo"
							{
							<img style='margin-top:9px;' src='"."PHOTO"."' class='img-rounded'> <!--รูปในอัลบั้ม-->
							&nbsp
							}";
							}
							?>
						</span>
					</div>
				</div>
			</div>	
		</div>


		<!-- Modal -->
<div class="modal img-modal" id="photoModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
			
            <div class="col-md-8 col-sm-8 col-xs-8 modal-image">
                 <img class="img-responsive " <!--รูปคุณลุง-->src="http://www.pimart.eu/wp-content/uploads/2014/04/martin-schoeller-george-clooney-portrait-up-close-and-personal.jpeg">        
				<a href="" class="img-modal-btn right"><i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div></a>
          	</div>
        	<div class="col-md-4 col-sm-4 col-xs-4 modal-meta">
              <div class="modal-meta-top">
                  <button type="button" class="close"  data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                  <div class="img-poster clearfix">
						<a href=""><img class="img-circle" src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png"/><!--รูปของเจ้าของภาพ--></a>
						<strong><a href="">Jone Doe<!--ชื่อคนcomment--></a></strong>
						<button type="button" class="btn btn-default btn-md">
							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Delete Photo
						</button>
					</div>
					<ul class="img-comment-list">
					<?if($comment==NULL)//ตรวจสอบว่า มีcomment ไหม? ถ้าไม่มี ทำ if
					{ echo"<center>
								<h4>You don't have any comment</h4>
							</center>";//เข้า if (ไม่มี comment ก็ไม่ต้องทำอะไร
					}
					  else 
					  for($i=0; $i <count($booklist) ; $i++) //วน comment เพื่อให้รูปขึ้น
						{echo"
						<li>
							<div class='comment-img'>
							  <img src='http://lorempixel.com/50/50/people/6'>
							</div>
							<div class='comment-text'>
								<strong><a href=''>".$UserComment."</a></strong>
								<p>".$commentMessage."</p> 
							</div>
						</li>";
						}
					?>
					</ul>
              </div>
              <div class="modal-meta-bottom">
                  <input type="text" class="form-control" placeholder="Leave a commment.."/>
              </div>
          	</div>
        
      </div>
    </div>
  </div>
</div>
	</body>
</html>