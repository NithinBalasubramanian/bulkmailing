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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">List Team</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Team</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">List Team</li>
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
                                <h4 class="card-title">List Team Form </h4>
                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6> -->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table  table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>S No</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Designation</th>
                                                <th>Address</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php $session=$this->session->userdata('user_data'); ?>
                                            <?php $customer_list=$this->Admin_model->table_column('team','user_id',$session['user_id'],'status','1');
                                            if(count($customer_list) > 0) {
                                            $i=1;
                                            foreach($customer_list as $cus_row){ ?>
                                            <tr id="row_<?php echo $cus_row['id']; ?>">
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $cus_row['fname']; ?></td>
                                                <td><?php echo $cus_row['lname']; ?></td>
                                                <td><?php echo $cus_row['contact']; ?></td>
                                                <td><?php echo $cus_row['email']; ?></td>
                                                <td><?php echo $cus_row['des']; ?></td>
                                                <td><?php echo $cus_row['address']; ?></td>
                                                <td><?php echo $cus_row['date_created']; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>View_admin/team/edit_team/<?php echo $cus_row['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger delete" data-rowid="<?php echo $cus_row['id']; ?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php $i++; } }?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                                <th>S No</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Designation</th>
                                                <th>Address</th>
                                                <th>Date</th>
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
                'tablename' : 'team'
            },
            success: function(data) {
                //console.log(data);
            }
        });
       $("#row_"+id).remove(); 
    });
    });
        </script>

