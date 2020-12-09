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
            <h2 class="mb-4">Log to pingifBulk</h2>
            <form action="<?php echo base_url(); ?>administration" method="post" class="p-4 border rounded">
              <div class="row form-group">
                    <?php if($mes){ ?>
                <div class="col-md-12">
                    <div class="alert <?php if($code == 'red'){ ?> alert-danger <?php }else{ ?> alert-success <?php } ?>">
                    <?php echo $mes; ?>
                    </div>
                </div>
                    <?php } ?>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email :</label>
                  <input type="text" id="fname" name="user_mail" class="form-control" placeholder="Email" autocomplete="off">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" id="fname" name="password" class="form-control" placeholder="Password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-8 text-left">
                  <a href="<?php echo base_url();?>View/admin/register">Not a member sign up</a>
                </div>
                <div class="col-md-4 text-right">
                  <input type="submit" value="Log In" class="btn px-4 btn-primary text-white">
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
