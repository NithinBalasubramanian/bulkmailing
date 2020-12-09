<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title>Login - PingifBulk</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/dist/css/style.min.css" rel="stylesheet">
    
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
.reg{
    height:430px;
}
</style>
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(<?php echo base_url(); ?>assets/admin/images/1.jpg) no-repeat ;background-size:cover;">
            <div class="auth-box row text-center">
                <div class="col-lg-6 col-md-5 modal-bg-img" style="background-image: url(<?php echo base_url(); ?>assets/admin/images/4.jpg);">
                </div>
                <div class="col-lg-6 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                        <h1 class="logo"><a href="<?php echo base_url(); ?>front" style="color:black;font-weight:600;">Pingif<span style="color:#ff4a17;" >Bulk</span></a></h1>
                        </div>
                        <?php if($this->session->flashdata('error')){ ?>
                        <p class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></p>
                        <?php } ?>
                        <?php if($this->session->flashdata('msg')){ ?>
                        <p class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></p>
                        <?php } ?>
                        <div class="reg">
                        <h4 class="mt-3 text-center">Sign <span style="color:#ff4a17;">In</span></h4>
                        <form class="mt-4" action="<?php echo base_url(); ?>front/login" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group text-left">
                                        <label class="text-dark" for="contact">Contact</label>
                                        <input class="form-control " id="contact" name="contact" type="text"
                                            placeholder="enter your contact">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group text-left">
                                        <label class="text-dark" for="pwd">Password</label>
                                        <input class="form-control" id="pwd" name="password" type="password"
                                            placeholder="enter your password">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block " style="background-color:#ff4a17;color:#fff;">Sign In</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Create have an account? <a href="javascript:void(0)" class=" sign" style="color:#ff4a17;">Sign Up</a>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
    <script>
        $(document).on('click','.sign',function(){
		var base_url = "<?php echo base_url(); ?>";
		$.ajax({
            url: base_url+'Front/load_reg',
            type: 'POST',
            success: function(data) {
                $('.reg').html(data);
            }
        });
        });
        $(document).on('click','.log',function(){
		var base_url = "<?php echo base_url(); ?>";
		$.ajax({
            url: base_url+'Front/load_log',
            type: 'POST',
            success: function(data) {
                $('.reg').html(data);
            }
        });
        });
    </script>
</body>

</html>