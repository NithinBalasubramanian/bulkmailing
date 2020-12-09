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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Add SMPT Account</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted"> SMPT Setting</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Add SMPT</li>
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
                                <h4 class="card-title">Add SMPT</h4>
                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6> -->
            <form class="form-horizontal" action="<?php echo base_url(); ?>Insert/smpt_setting/smpt_setting/add_smpt/list_smpt" method="post" enctype="multipart/form-data" >
              <div class="box-body">
                <div class="row">
				<div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">Type: *</label>
                  <div class="col-sm-12">
                    <input type="text" name="type" id="" class="form-control" id="inputEmail3" placeholder="Type"  required>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">SMPT Host : </label>
                  <div class="col-sm-12">
                    <input type="text" name="smpt_host" id="" class="form-control" id="inputEmail3" placeholder=" SMPT Host"  required>
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">SMPT Port : *</label>
                  <div class="col-sm-12">
                    <input type="text" name="smpt_port" id="" class="form-control" id="inputEmail3" placeholder=" SMPT Port"  required>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">Username : *</label>

                  <div class="col-sm-12">
                    <input type="text" name="username" id="" class="form-control" id="inputEmail3" placeholder="Username" required>
                    <input type="hidden" name="status" id="" class="form-control" id="inputEmail3" value="1">
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">Password : *</label>

                  <div class="col-sm-12">
                    <input type="password" name="password" id="" class="form-control" id="inputEmail3" placeholder="password" required>
                  </div>
                </div>
                
                </div>
                
			

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
<!-- footer part -->

<?php $this->load->view('admin/include/footer'); ?>
