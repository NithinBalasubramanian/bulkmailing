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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Terms and Conditions </h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="" class="text-muted">General Setting </a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Terms and Conditions</li>
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
                                <h4 class="card-title">Terms and Conditions Form</h4>
                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6> -->
           <form class="form-horizontal" action="<?php echo base_url(''); ?>Admin/Edit_setting/privacy/settings/privacy" method="post" enctype="multipart/form-data" >
       <?php $data=$this->Admin_model->table_column('privacy'); 
        foreach($data as $row){ ?>
             <div class="box-body">
            <div class="row justify-content-center ">
                <div class="form-group col-md-8">
                <label>Privacy policy</label>
                 <textarea type="text" name="privacy" class="form-control"><?php echo $row['privacy']; ?></textarea>
                 </div>
              </div>
              
            </div>
			

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm pull-right ">Save </button>
              </div> 
                <?php } ?>
              <!-- /.box-footer -->
            </form>
               
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
<!-- footer part -->
 <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
        CKEDITOR.replace('privacy');
</script>
<?php $this->load->view('admin/include/footer'); ?>

