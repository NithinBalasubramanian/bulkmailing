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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Newsletter</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="" class="text-muted">Messaging</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Newsletter</li>
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
                                <h4 class="card-title">Newsletter</h4>
                                <div class="table-responsive">
    <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr class="bg-secondary text-light">
                  <th>S No</th>
                  <th>Name</th>
                  <th>Mail Id</th>
                  <th>Comment</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
           
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="<?php echo base_url();?>View_admin" class=""><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:20px;"></i></a>
                  <a href="<?php echo base_url();?>Delete"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:20px;"></i></a></td>
                </tr>
                </tbody>
              </table>
    </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
<!-- footer part -->


<?php $this->load->view('admin/include/footer'); ?>

