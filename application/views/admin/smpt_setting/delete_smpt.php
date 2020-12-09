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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Deleted List SMTP Setting</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">SMTP Setting</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Deleted List SMTP Setting</li>
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
                                <h4 class="card-title">Deleted Customer Registered List</h4>
                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6> -->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>S No</th>
                                                <th>Type</th>
                                                <th>SMTP Host</th>
                                                <th>SMTP Port</th>
                                                <th>Username</th>
                                                <th>Date</th>
                                                <th>Retain</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $customer_list=$this->Admin_model->table_column('smpt_setting','status','0'); 
                                            $i=1;
                                            foreach($customer_list as $cus_row){ ?>
                                            <tr id="row_<?php echo $cus_row['id']; ?>">
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $cus_row['type']; ?></td>
                                                <td><?php echo $cus_row['smpt_host']; ?></td>
                                                <td><?php echo $cus_row['smpt_port']; ?></td>
                                                <td><?php echo $cus_row['username']; ?></td>
                                                <td><?php echo $cus_row['date_created']; ?></td>
                                                <td><a href="javascript:void(0)" class="btn btn-sm btn-success switchery" data-rowid="<?php echo $cus_row['id']; ?>">Retain</a></td>
                                                <!--<td><?php if($cus_row['status'] == '1'){ ?><button class="btn btn-sm btn-success">Active</button><?php }else{ ?><button class="btn btn-sm btn-danger ">Offline</button><?php } ?></td>-->
                                               <!-- <td><?php if($cus_row['status'] == '1'){ ?><button class="btn btn-sm btn-success verify verify_<?php echo $cus_row['id']; ?>" data-val="1" data-id="<?php echo $cus_row['id']; ?>">Online</button><?php }else{ ?><button class="btn btn-sm btn-danger verify verify_<?php echo $cus_row['id']; ?>" data-val="0" data-id="<?php echo $cus_row['id']; ?>">Offline</button><?php } ?></td>
                                                <td><a href="<?php echo base_url(); ?>View_admin/smpt_setting/edit_smpt/<?php echo $cus_row['id']; ?>" class="btn btn-sm btn-info">Edit</a><a href="<?php echo base_url(); ?>Delete/smpt_setting/smpt_setting/list_smpt/<?php echo $cus_row['id']; ?>" class="btn btn-sm btn-danger">Delete</a></td>-->
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                                <th>S No</th>
                                                <th>SMTP Host</th>
                                                <th>SMTP Host</th>
                                                <th>SMTP Port</th>
                                                <th>Username</th>
                                                <th>Date</th>
                                                <th>Retain</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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
        var id = $(this).attr("data-rowid");
        $.ajax({
            url: base_url+"Admin/delete_members",
            type: 'POST',
            dataType: 'json',
            data : {
                'id' : id,
                'tablename' : 'smpt_setting'
            },
            success: function(data) {
                //console.log(data);
            }
        });
       $("#row_"+id).remove(); 
    });
    });
        </script>
