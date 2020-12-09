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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Customer Management</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Customer</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">List Customer</li>
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
                                <h4 class="card-title">Customer Registered List</h4>
                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6> -->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>S No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Type</th>
                                                <th>Count</th>
                                                <th>Status</th>
                                                <th>Verify</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   $base = base_url();
                                                $api_url='Api/fetch_data/customer';
                                                $url = $base.$api_url;
                                                $ch = curl_init($url);
                                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                                $result = curl_exec($ch);
                                                curl_close($ch);
                                            
                                                $json_result = json_decode($result, true); ?>
                                            <?php $customer_list=$this->Admin_model->table_column('customer'); 
                                            $i=1;
                                            foreach($json_result as $cus_row){ ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $cus_row['c_name']; ?></td>
                                                <td><?php echo $cus_row['c_email']; ?></td>
                                                <td><?php echo $cus_row['c_contact']; ?></td>
                                                <td></td>
                                                <td><?php echo $cus_row['count']; ?></td>
                                                <td><?php if($cus_row['status'] == '1'){ ?><button class="btn btn-sm btn-success">Active</button><?php }else{ ?><button class="btn btn-sm btn-danger ">Offline</button><?php } ?></td>
                                                <td><?php if($cus_row['verify'] == '1'){ ?><button class="btn btn-sm btn-success verify verify_<?php echo $cus_row['id']; ?>" data-val="1" data-id="<?php echo $cus_row['id']; ?>">Verified</button><?php }else{ ?><button class="btn btn-sm btn-danger verify verify_<?php echo $cus_row['id']; ?>" data-val="0" data-id="<?php echo $cus_row['id']; ?>">UnVerified</button><?php } ?></td>
                                                <td><a href="<?php echo base_url(); ?>View_admin/customer/edit_customer/<?php echo $cus_row['id']; ?>" class="btn btn-sm btn-info">Edit</a><a href="<?php echo base_url(); ?>Delete/customer/customer/list_customer/<?php echo $cus_row['id']; ?>" class="btn btn-sm btn-danger">Delete</a></td>
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                                <th>S No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Type</th>
                                                <th>Count</th>
                                                <th>Status</th>
                                                <th>Verify</th>
                                                <th>Action</th>
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script> -->
<script>
	$(document).on('click','.verify',function(){
		var val=$(this).data('val');
        var id=$(this).data('id');
        var tablename='customer';
		var base_url = "<?php echo base_url(); ?>";
		$.ajax({
            url: base_url+'Admin/verify',
            type: 'POST',
            dataType: "json",
            data: "val=" + val +"&id="+id+"&tablename="+tablename ,
            beforeSend: function(){
                $('.verify_'+id).html('Verifying.....');
            },
            success: function(data) {
                if(data.verify == '1'){
                    $('.verify_'+id).data('val', data.verify);
                    $('.verify_'+id).removeClass('btn-danger');
                    $('.verify_'+id).addClass('btn-success');
                    $('.verify_'+id).html('Verified');
                }else{
                    $('.verify_'+id).data('val', data.verify);
                    $('.verify_'+id).removeClass('btn-success');
                    $('.verify_'+id).addClass('btn-danger');
                    $('.verify_'+id).html('Unverified');
                }
            }
        });
	});

</script>

