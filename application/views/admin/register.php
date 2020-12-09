<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style_admin.css" rel="stylesheet">
</head>
<body>
<div class="container" style="margin-top:50px;">
        <div class="row justify-content-md-center" id="sign">
          <div class="col-lg-6" >
            <h2 class="mb-4">Register to pingifBulk</h2>
            <form action="<?php echo base_url(); ?>admin/administration_reg" method="post" class="p-4 border rounded">
            <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="name">Name :</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="">Email :</label>
                  <input type="text" id="email" name="user_mail" class="form-control" placeholder="Email" autocomplete="off">
				  <div class="alert alert-success e_available" style="margin-top:10px;">Email Available</div>
				  <div class="alert alert-warning e_unavailable" style="margin-top:10px;">Email Taken</div>
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="">Contact :</label>
                  <input type="text" id="cont" maxlength="10"  name="contact" class="form-control" placeholder="contact">
                  <div class="alert alert-success c_available" style="margin-top:10px;">Contact Available</div>
				          <div class="alert alert-warning c_unavailable" style="margin-top:10px;">Contact Taken</div>
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="">Password :</label>
                  <input type="password" id="" name="password" class="form-control" placeholder="Password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-8 text-left">
                  <a href="<?php echo base_url();?>admin">Already a member , sign In</p>
                </div>
                <div class="col-md-4 text-right">
                  <input type="submit" value="Register" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
          </div>
        </div>
    </div>
    
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<script>
	$(document).on('keyup','#email',function(){
		var email=$(this).val();
		var base_url = "<?php echo base_url(); ?>";
		$.ajax({
            url: base_url+'Admin/email_check',
            type: 'POST',
            dataType: "json",
            data: "email=" + email ,
            success: function(data) {
                if(data.count == '1'){
					$('.e_unavailable').css('display','block');
					$('.e_available').css('display','none');
				}else if(data.count == '0'){
					$('.e_available').css('display','block');
					$('.e_unavailable').css('display','none');
				}else{
          $('.e_available').css('display','none');
					$('.e_unavailable').css('display','none');
        }
            }
        });
	});
  $(document).on('keyup','#cont',function(){
		var cont=$(this).val();
		var base_url = "<?php echo base_url(); ?>";
		$.ajax({
            url: base_url+'Admin/cont_check',
            type: 'POST',
            dataType: "json",
            data: "cont=" + cont ,
            success: function(data) {
                if(data.count == '1'){
					$('.c_unavailable').css('display','block');
					$('.c_available').css('display','none');
				}else if(data.count == '0'){
					$('.c_available').css('display','block');
					$('.c_unavailable').css('display','none');
				}else{
          $('.c_available').css('display','none');
					$('.c_unavailable').css('display','none');
        }
            }
        });
	});
</script>

