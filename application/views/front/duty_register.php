<!-- header part -->
<?php $this->load->view('front/include/header'); ?>
<!-- headermenu part -->
<?php $this->load->view('front/include/header_menu'); ?>

<section class="section-hero overlay inner-page bg-image" style="background-image: url('<?php echo base_url(); ?>assets/images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold sign">Login</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong class="sign_1">Log In</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row justify-content-md-center" id="sign">
          <div class="col-lg-6" >
            <h2 class="mb-4">Log In To JobBoard</h2>
            <form action="#" class="p-4 border rounded">
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Contact Number :</label>
                  <input type="text" id="fname" class="form-control" placeholder="Contact Number" autocomplete="off">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" id="fname" class="form-control" placeholder="Password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-8 text-left">
                  <p class="ref">Not a member sign up</p>
                </div>
                <div class="col-md-4 text-right">
                  <input type="submit" value="Log In" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>

<!-- footer part -->
<?php $this->load->view('front/include/footer'); ?>

<script>
    $(document).on('click','.ref',function(){
        var base_url = "<?php echo base_url(); ?>";
        $.ajax({
                url: base_url+'index.php/Admin/duty_reg',
                type: 'POST',
                success: function(data) {
                    $('#sign').html(data);
                    $('.sign').html("Register");
                    $('.sign_1').html("Register");
                }
        });
    });
</script>