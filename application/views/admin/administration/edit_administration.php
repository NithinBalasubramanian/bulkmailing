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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Administration</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Administration</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">List Administration</li>
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
                                <h4 class="card-title">Administration Edit List</h4>
                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6> -->
            <form class="form-horizontal" action="<?php echo base_url(); ?>admin/Update_administration/administration/administration/<?php echo $edit_id ; ?>/edit_administration/list_administration" method="post" enctype="multipart/form-data" >
              <?php $administration=$this->Admin_model->table_column('administration','id',$edit_id); 
              foreach($administration as $row){ ?>
              <div class="box-body">
                <div class="row">
				        <div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">Name : *</label>

                  <div class="col-sm-12">
                    <input type="text" name="name" id="" class="form-control" id="inputEmail3" placeholder=" Name" value="<?php echo $row['name']; ?>" required>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">Email : *</label>

                  <div class="col-sm-12">
                    <input type="text" name="email" id="" class="form-control" id="inputEmail3" value="<?php echo $row['email']; ?>"  placeholder="Contact" required>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">Contact : *</label>

                  <div class="col-sm-12">
                    <input type="text" name= "contact" id="" class="form-control" maxlength="10" id="inputEmail3" value="<?php echo $row['contact']; ?>"  placeholder="Contact" required>
                  </div>
                </div>
                <?php $session=$this->session->userdata('user_data');
                            if($session['user_type'] == 'administrator'){ ?>
                             <div class="form-group col-md-6">
                  <label for="inputEmail3" class="col-sm-6 control-label">Type : *</label>

                  <div class="col-sm-12">
                    <select name="type" id="" class="form-control">
                      <option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>
                      <option value="sub_admin">sub administrator</option>
                      <option value="administrator">administrator</option>
                    </select>
                  </div>
                </div>
                    <?php } ?>
                </div>
              <?php } ?>
				
			

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm pull-right">Update</button>
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
