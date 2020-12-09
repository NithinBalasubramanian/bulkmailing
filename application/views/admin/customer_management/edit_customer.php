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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Customer</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted"> Customer</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Edit Customer</li>
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
                                <h4 class="card-title"> Edit Customer List</h4>
                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6> -->
            <form class="form-horizontal" action="<?php echo base_url(); ?>admin/Update_all/cus_management/customer_management/<?php echo $edit_id; ?>/list_customer/list_customer" method="post" enctype="multipart/form-data" >
            <?php $profile=$this->Admin_model->table_column('cus_management','id',$edit_id);
            if(count($profile) > 0)
            {
                foreach($profile as $row)
                { ?>
                    <div class="box-body">
                <div class="row">
				<div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">First Name : *</label>
                  <div class="col-sm-12">
                    <input type="text" name="fname" id="" class="form-control" id="inputEmail3" value="<?php echo $row['fname']; ?>">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">Last Name : </label>
                  <div class="col-sm-12">
                    <input type="text" name="lname" id="" class="form-control" id="inputEmail3" value="<?php echo $row['lname']; ?>">
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">Contact : *</label>
                  <div class="col-sm-12">
                    <input type="text" name="contact" id="" class="form-control" id="inputEmail3" value="<?php echo $row['contact']; ?>">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">Email : *</label>

                  <div class="col-sm-12">
                    <input type="text" name="email" id="" class="form-control" id="inputEmail3" value="<?php echo $row['email']; ?>">
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">Address : </label>

                  <div class="col-sm-12">
                    <textarea type="text" name= "address" id="" class="form-control" maxlength="10" id="inputEmail3" value="<?php echo $row['address']; ?>"><?php echo $row['address']; ?></textarea>
                  </div>
                </div>
                </div>
                
			

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm pull-right">Submit</button>
              </div>
        <?php   }
            }
            
            ?>

            
              
              <!-- /.box-footer -->
            </form>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
<!-- footer part -->

<?php $this->load->view('admin/include/footer'); ?>
