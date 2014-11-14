<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../../../../css/bootstrap.min.css" rel="stylesheet">
	<style>
	
.chkhidden{
		display:none;
		position: absolute;
	}

	</style>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
						<a href="#aboutModal" data-toggle="modal" data-target="#myModal"><!--เปลี่ยนเป็นรูปตาม userprofile--><img src="../../../../photo/profile/<?echo "".$this->uri->segment(3).".jpg" ?>" name="aboutme" width="140" height="140" class="img-circle"></a>
						<h3><? echo "".$name; ?></h3> <!---เปลี่ยนเป็นตัวแปรตรงนี้---->
					</center>
				</div>
				<div class="row">
					<center>
						<br>
						<?
						$ID = $this->session->all_userdata();
						$ID = $ID['ID'];
						if($ID == $this->uri->segment(3)) <a class="btn btn-primary " data-toggle="modal" data-target=".bs-example-modal-sm">Upload photo</a>
						?>
					</center>
					</ul>
				</div>			
			</div>
			
			<!-- Small modal --> <!--ส่วนที่ตัวเด้ง อัพโหลดจะเด้งขึ้นมา---> 
			<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<form action="../../../../uploadphoto/upphoto/<?echo "".$this->uri->segment(4) ?>" method="POST" enctype="multipart/form-data" >
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
							<h4 class="modal-title" id="myModalLabel"><? echo "".$id; ?></h4>   <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
						</div>
						<div class="modal-body">
							<center>
								<img src="../../../../photo/profile/<?echo "".$this->uri->segment(3).".jpg" ?>" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
									<h3 class="media-heading"><? echo "".$name; ?> </h3> <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
								<span><strong>Email: </strong></span>  <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
									<span><? echo "".$email; ?></span>  <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
							</center>
							<hr>
							<center>
								<p class="text-left"><strong>ประวัติส่วนตัว: </strong><br><? echo "".$resume; ?></p>   <!--ต้องเปลี่ยนเป็นชื่อคัวแปร-->
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
		
			<div class="col-md-9 col-xs-12 col-sm-12"> <!---ส่วนแสดงรูปในอัลบั้ม-->
				<div class="container">
					<h1 class="muted"><? echo "".$albumname; ?></h1>
					<hr>
					<div class='col-md-9 col-xs-12 col-sm-12'> 
						<span onclick='javascript:$('#photoModal').modal('toggle');'> <!--ถ้าคลิก จะเชื่อมไป photomodal เด้ง comment&like-->
							<?
							$showpic = $this->db->where('nameuser',$this->uri->segment(3))->where('namealbum',$this->uri->segment(4))->get('picture');
							if($this->db->where('nameuser',$this->uri->segment(3))->where('namealbum',$this->uri->segment(4))->count_all_results('picture')==0) //ตรวจสอบว่า มีรูปไหม? ถ้าไม่มี ทำ if
							{
								echo" 
								<center>
								<h4>You don't have any photo</h4>
								</center>";
							}
							else {// ตรวจสอบแล้ว มีรูป ทำ else
							foreach($showpic->result_array() as $row) //วน for เพื่อให้ รูปขึ้น
							echo"
							<div class='col-md-3 col-xs-6 col-sm-4'> 
								<a href='../../../../photo/show/".$this->uri->segment(3)."/".$this->uri->segment(4)."/".$row['ID']."'><img style='margin-top:9px;' src='../../../../photo/".$row['ID'].".jpg' class='img-rounded' width='150' height='150'></a> <!--รูปในอัลบั้ม-->
								&nbsp
							</div>
							";
							}
							?>
						</span>
					</div>
				</div>
			</div>	
		</div>


		
	</body>
</html>