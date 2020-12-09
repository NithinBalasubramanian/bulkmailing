<!-- header part -->
<?php $this->load->view('admin/include/header'); ?>
<!-- headermenu part -->
<?php $this->load->view('admin/include/header_menu'); ?>

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Add SMPT Account </h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="" class="text-muted">SMPT Account </a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Add SMPT Account Form</li>
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
                                <h4 class="card-title">Add SMPT Account Form</h4>
                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6> -->
            <form class="form-horizontal" action="<?php echo base_url(); ?>Admin/Edit_smtp_setting/customer_smtp/smtp/add_smtp" method="post" enctype="multipart/form-data" >
             <?php $data=$this->Admin_model->table_column('smpt'); 
        foreach($data as $row){ 
            ?>
              <div class="box-body">
                <div class="row">
				<div class="form-group col-md-8">
                  <label for="inputEmail3" class="col-sm-6 control-label">Status</label>
                  <div class="col-sm-12">
                    <input type="checkbox" name="status" class="switchery" data-rowid="<?php echo $row['id']; ?>" id="inputEmail3" value="1" autocomplete="off" <?php if($row['status'] == '1'){ ?>checked<?php } ?>>
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="inputEmail3" class="col-sm-6 control-label">SMPT Host</label>
                  <div class="col-sm-12">
                    <input type="text" name= "host" class="form-control" id="inputEmail3" value="<?php echo $row['host']; ?>" autocomplete="off">
                  </div>
                </div>
                  <div class="form-group col-md-8">
                  <label for="inputEmail3" class="col-sm-6 control-label">SMPT Post</label>
                  <div class="col-sm-12">
                    <input type="text" name= "post" class="form-control" id="inputEmail3" value="<?php echo $row['post']; ?>" autocomplete="off">
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="inputEmail3" class="col-sm-6 control-label">SMPT User</label>
                  <div class="col-sm-12">
                    <input type="text" name= "user" class="form-control" id="inputEmail3" value="<?php echo $row['user']; ?>" autocomplete="off">
                  </div>
                </div>
                  <div class="form-group col-md-8">
                  <label for="inputEmail3" class="col-sm-6 control-label">SMPT Password</label>
                  <div class="col-sm-12">
                    <input type="text" name= "password" class="form-control" id="inputEmail3" value="<?php echo $row['password']; ?>" autocomplete="off">
                  </div>
                </div>
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
              <?php } ?>
            </form>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
<!-- footer part -->

<?php $this->load->view('admin/include/footer'); ?>
<script>
$(document).ready(function(){
    
$('.switchery').on('click', function (event) {
   
    var base_url = "<?php echo base_url(); ?>";
    $.ajax({
        url: base_url+"Admin/status",
        type: 'POST',
        dataType: 'json',
        data : {
            'id' : $(this).attr("data-rowid"),
            'tablename' : 'smpt'
        },
        success: function(data) {
            //console.log(data);
        }
    }); 
});
});
</script>
