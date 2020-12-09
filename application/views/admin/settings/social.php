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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Social Links </h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="" class="text-muted">General Setting </a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Social Links Form</li>
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
                                <h4 class="card-title">Social Links Form</h4>
                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6> -->
           <form class="form-horizontal" action="<?php echo base_url(''); ?>Admin/Edit_setting/social/settings/social" method="post" enctype="multipart/form-data" >
       <?php $data=$this->Admin_model->table_column('social'); 
        foreach($data as $row){ ?>
               <div class="box-body">
            <div class="row justify-content-center">
                 <div class="form-group col-md-8">
                  <label for="inputEmail3" class="col-sm-6 control-label">Facebook</label>
                  <div class="col-sm-12">
                    <input type="text" name= "facebook" class="form-control" id="inputEmail3" value="<?php echo $row['facebook']; ?>" autocomplete="off">
                  </div>
                </div>
                  <div class="form-group col-md-8">
                  <label for="inputEmail3" class="col-sm-6 control-label">Twitter</label>
                  <div class="col-sm-12">
                    <input type="text" name= "twitter" class="form-control" id="inputEmail3" value="<?php echo $row['twitter']; ?>" autocomplete="off">
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="inputEmail3" class="col-sm-6 control-label">Google +</label>
                  <div class="col-sm-12">
                    <input type="text" name= "google" class="form-control" id="inputEmail3" value="<?php echo $row['google']; ?>" autocomplete="off">
                  </div>
                </div>
                  <div class="form-group col-md-8">
                  <label for="inputEmail3" class="col-sm-6 control-label">Youtube</label>
                  <div class="col-sm-12">
                    <input type="text" name= "youtube" class="form-control" id="inputEmail3" value="<?php echo $row['youtube']; ?>" autocomplete="off">
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="inputEmail3" class="col-sm-6 control-label">Pintrest</label>
                  <div class="col-sm-12">
                    <input type="text" name= "pinterest" class="form-control" id="inputEmail3" value="<?php echo $row['pinterest']; ?>" autocomplete="off">
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="inputEmail3" class="col-sm-6 control-label">Skype</label>
                  <div class="col-sm-12">
                    <input type="text" name= "skype" class="form-control" id="inputEmail3" value="<?php echo $row['skype']; ?>" autocomplete="off">
                  </div>
                </div>
              </div>
              
            </div>
			

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm pull-right ">Save </button>
              </div> 
                <?php } ?>
                </form>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
<!-- footer part -->

<?php $this->load->view('admin/include/footer'); ?>

