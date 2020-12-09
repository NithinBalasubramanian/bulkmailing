            <!-- footer -->

            <!-- ============================================================== -->

            <footer class="main-footer">
            <p class="text-center pt-5" style="font-size:12px;color:#000000;">&copy;
                        copyright 
                        <script>
                            var d= new Date();
                            var year=d.getFullYear();
                            if(year != '2020'){
                            document.write('2020 -');
                            }
                            document.write(year);
                        </script> 
                           - PingifBulk - All Right Reserved || 
                <span style="font-weight:600;letter-spacing:1px;">Pingifinit Software Technology || +91 8838825568</span></p>
                <div class="float-right d-none d-sm-inline-block">
                </div>
            </footer>

            <!-- ============================================================== -->

            <!-- End footer -->

            <!-- ============================================================== -->

        </div>

        <!-- ============================================================== -->

        <!-- End Page wrapper  -->

        <!-- ============================================================== -->

    </div>

    <!-- ============================================================== -->

    <!-- End Wrapper -->

    <!-- ============================================================== -->

    <!-- End Wrapper -->

    <!-- ============================================================== -->

    <!-- All Jquery -->

    <!-- ============================================================== -->

    <script src="<?php echo base_url(); ?>assets/admin/libs/jquery/dist/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/libs/popper.js/dist/umd/popper.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- apps -->

    <!-- apps -->

    <script src="<?php echo base_url(); ?>assets/admin/dist/js/app-style-switcher.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/dist/js/feather.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/dist/js/sidebarmenu.js"></script>

    <!--Custom JavaScript -->

    <script src="<?php echo base_url(); ?>assets/admin/dist/js/custom.min.js"></script>

    <!--This page JavaScript -->

    <script src="<?php echo base_url(); ?>assets/admin/extra-libs/c3/d3.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/extra-libs/c3/c3.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/libs/chartist/dist/chartist.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/dist/js/pages/dashboards/dashboard1.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/dist/js/custom.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/dist/js/pages/datatable/datatable-basic.init.js"></script>

    <script>

        $(document).on('click','.menu_icon',function(){

            if($(this).hasClass('ti-menu')){

                $(this).removeClass('ti-menu');

                $('.sidebar').addClass('show-sidebar');

            }else{

                $(this).addClass('ti-menu');

                $('.sidebar').removeClass('show-sidebar');

            }

        });

    </script>

</body>



</html>