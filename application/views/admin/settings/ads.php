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

                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">ADS Setting </h4>

                        <div class="d-flex align-items-center">

                            <nav aria-label="breadcrumb">

                                <ol class="breadcrumb m-0 p-0">

                                    <li class="breadcrumb-item"><a href="" class="text-muted">General Setting </a></li>

                                    <li class="breadcrumb-item text-muted active" aria-current="page">ADS Setting Form</li>

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

                                <h4 class="card-title">ADS Setting Form</h4>

                                <!-- <h6 class="card-subtitle">DataTables has most features enabled by default, so all you

                                    need to do to use it with your own tables is to call the construction

                                    function:<code> $().DataTable();</code>. You can refer full documentation from here

                                    <a href="https://datatables.net/">Datatables</a></h6> -->

           <form class="form-horizontal" action="<?php echo base_url(''); ?>Admin/Edit_setting/ads/settings/ads" method="post" enctype="multipart/form-data" >

       <?php $data=$this->Admin_model->table_column('ads'); 

        foreach($data as $row){ ?>

               <div class="box-body">

            <div class="row justify-content-center">

                 <div class="form-group col-md-8">

                  <label for="inputEmail3" class="col-sm-6 control-label">AD Url</label>

                  <div class="col-sm-12">

                    <input type="text" name= "ad_url" class="form-control" id="inputEmail3" value="<?php echo $row['ad_url']; ?>" autocomplete="off">

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
                    <div class="container">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>SNO</th>
                            <th>Ad</th>
                        </tr>
                        <?php   $ad_url = $this->Admin_model->table_column('ads'); 
                            foreach($data as $row){
                                $base = $row['ad_url'];
                             }
                            $url = $base;
                            $ch = curl_init($url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            $result = curl_exec($ch);
                            curl_close($ch);
                        
                            $json_result = json_decode($result, true); 
                            $i=1;
                             foreach($json_result as $cus_row){ ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $cus_row['email']; ?></td>
                                </tr>
                        <?php $i++; } ?>
                    </table>
                    </div>
                            </div>

                        </div>

                    </div>

                </div>

                

<!-- footer part -->



<?php $this->load->view('admin/include/footer'); ?>



