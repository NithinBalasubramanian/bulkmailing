<!-- header part -->
<?php $this->load->view('admin/include/header'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/email.multiple.css">
<!-- headermenu part -->
<?php $this->load->view('admin/include/header_menu'); ?>

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Single Newsletter</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="" class="text-muted">Messaging</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Single Newsletter</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <?php $date=date('d M-Y'); ?>
                                <option selected><?php echo $date; ?></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Single Newsletter</h4>
                               
                                <form action="<?php echo base_url(); ?>Admin/sendmail" method="post" id="send_ajax" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-10">
                                    <label>Email ID :</label>
                                        <input type="text" id="essai" name="email"  class="form-control">
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Newsletter Subject :</label>
                                        <input type="text" name="subject"   class="form-control clean" value="" required>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label>Description :</label>
                                        <textarea type="text" class="form-control clean_des" name="description" id="" rows='6' required></textarea>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <input type="submit" class="form-control btn btn-sm btn-info sending" value="Send">
                                    </div>
                                    <div class="form-group col-md-10">
                                        <div class="alert alert-success sent_msg text-center" style="display:none;"></div>
                                    </div>
                                </div>
                                </form>
               
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
<!-- footer part -->
 <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
        CKEDITOR.replace('description');
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="<?php echo base_url(); ?>assets/admin/js/jquery.email.multiple.js"></script>
  

<?php $this->load->view('admin/include/footer'); ?>

<script>
    $(document).on('submit','#send_ajax',function(e){
        e.preventDefault();
        var formData = new FormData(this);
		var url= $(this).attr('action');
        $.ajax({
            type:'POST',
            url: url,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(data)
            {
                $('.sending').val('Sending ....');
                $('.sending').addClass('btn-danger');
                $('.sending').prop('disabled',true);
            },
            success:function(data){
                $('.sending').val('Send');
                $('.sending').removeClass('btn-danger');
                $('.sending').prop('disabled',false);
                $('.sent_msg').html(data);
                $('.sent_msg').css('display','block');
                $('.clean').val('');
                $('.clean_des').html('');
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    });
</script>

