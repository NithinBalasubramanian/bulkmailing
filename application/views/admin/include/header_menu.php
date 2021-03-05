<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full" class="mini-sidebar sidebar">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none menu" href="javascript:void(0)"><i
                            class="ti-menu ti-close menu_icon"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="<?php echo base_url(); ?>admin">
                            <b class="logo-icon">
                               
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                               <h1 class="logo"><a href="index.html" style="color:black;font-weight:600;">Pingif<span style="color:#ff4a17;" >Bulk</span></a></h1>
                                <!-- Light Logo text -->
                                <img src="<?php echo base_url(); ?>assets/admin/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge badge-primary notify-no rounded-circle">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay" class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span
                                                        class="font-12 text-nowrap d-block text-muted">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="customize-input">
                                    <select
                                        class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                        <option selected>EN</option>
                                        <option value="1">AB</option>
                                        <option value="2">AK</option>
                                        <option value="3">BE</option>
                                    </select>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo base_url(); ?>assets/admin/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> 
                                <?php $session=$this->session->userdata('user_data');
                                if($session['user_type'] == 'administrator' || $session['user_type'] == 'sub_admin'){
                                    $user_data = $this->Admin_model->table_column('administration','id',$session['id']);
                                    foreach($user_data as $user_row ){ ?>
                                    <span class="text-dark"><?php echo strtoupper($user_row['name']); ?></span>
                                <?php }}else{ ?>
                                    <span class="text-dark">Jason Doe</span>
                                <?php } ?>
                                        
                                        
                                         <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <?php $session=$this->session->userdata('user_data');
                                if($session['user_type'] == 'administrator' || $session['user_type'] == 'sub_admin'){ ?>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>admin/logout"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <?php }else{ ?>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>front/logout"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <?php } ?>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item selected"> <a class="sidebar-link sidebar-link active" href="<?php echo base_url(); ?>/admin"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
						 <?php $session=$this->session->userdata('user_data');
                            if($session['user_type'] == 'user'){ ?>
						<li class="nav-small-cap"><span class="hide-menu">Compose Mail</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="<?php echo base_url(); ?>View_admin/email/smpt"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Send mail
                                </span></a>
                        </li>
                        <li class="nav-small-cap"><span class="hide-menu">Application Setup</span></li>

                        <!-- <li class="sidebar-item"> <a class="sidebar-link" href="ticket-list.html"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Ticket List
                                </span></a>
                        </li> -->
                         <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Customer Management </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/customer_management/add_customer" class="sidebar-link"><span
                                            class="hide-menu">Add Customer 
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/customer_management/list_customer" class="sidebar-link"><span
                                            class="hide-menu">List Customer
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/customer_management/delete_customer" class="sidebar-link"><span
                                            class="hide-menu">Delete Customer
                                        </span></a>
                                </li>
                            </ul>
                        </li>
						
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Team Management </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/team/add_team" class="sidebar-link"><span
                                            class="hide-menu">Add Team 
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/team/list_team" class="sidebar-link"><span
                                            class="hide-menu"> List Team
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/team/delete_team" class="sidebar-link"><span
                                            class="hide-menu"> Delete Team
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Template Setup </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/template/add_template" class="sidebar-link"><span
                                            class="hide-menu">Add Template 
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/template/list_template" class="sidebar-link"><span
                                            class="hide-menu"> List Template
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/template/delete_template" class="sidebar-link"><span
                                            class="hide-menu"> Delete Template
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><span class="hide-menu">Email Setting</span></li>

                        <!-- <li class="sidebar-item"> <a class="sidebar-link" href="ticket-list.html"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Ticket List
                                </span></a>
                        </li> -->
                         <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">SMTP </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/smpt_setting/add_smpt" class="sidebar-link"><span
                                            class="hide-menu">Add SMTP Account 
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/smpt_setting/list_smpt" class="sidebar-link"><span
                                            class="hide-menu">List SMTP
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/smpt_setting/delete_smpt" class="sidebar-link"><span
                                            class="hide-menu">Delete SMTP
                                        </span></a>
                                </li>
                            </ul>
                        </li>
						
                        
                        <li class="list-divider"></li>
							<?php } ?>
                        <?php if( $session['user_type'] == 'sub_admin' ||  $session['user_type'] == 'administrator'){ ?>
                        
                        <li class="nav-small-cap"><span class="hide-menu"> Send Mail</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Mailing </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/message/single_mail" class="sidebar-link"><span
                                            class="hide-menu">Single Newsletter
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/message/mail" class="sidebar-link"><span
                                            class="hide-menu">Simple Newsletter
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/message/temp_mail" class="sidebar-link"><span
                                            class="hide-menu">Template Newsletter
                                        </span></a>
                                </li>
                                
                            </ul>
                        </li>
                        <?php }
                            if($session['user_type'] == 'administrator'){ ?>
                        <li class="nav-small-cap"><span class="hide-menu">Application Setup</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Administration </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/administration/list_administration" class="sidebar-link"><span
                                            class="hide-menu"> Administration List
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                            <?php } ?>
                            <?php 
                            if($session['user_type'] == 'administrator'){ ?>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">User Management </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/customer/list_customer" class="sidebar-link"><span
                                            class="hide-menu"> Customer List
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/message/news" class="sidebar-link"><span
                                            class="hide-menu">List Comments
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Type Management </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/user_type/add_user_type" class="sidebar-link"><span
                                            class="hide-menu">Add User Type  
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/user_type/list_user_type" class="sidebar-link"><span
                                            class="hide-menu">List User Type 
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">General Setting </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/settings/ads" class="sidebar-link"><span
                                            class="hide-menu">Ad Setting
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/settings/social" class="sidebar-link"><span
                                            class="hide-menu">Social Links  
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/settings/terms" class="sidebar-link"><span
                                            class="hide-menu">Terms and Conditions 
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/settings/privacy" class="sidebar-link"><span
                                            class="hide-menu">Privacy Policy
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <?php }if( $session['user_type'] == 'sub_admin' ){ ?>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Customer Management </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/customer/list_customer" class="sidebar-link"><span
                                            class="hide-menu"> Customer List
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url(); ?>View_admin/customer/list_fetch_customer" class="sidebar-link"><span
                                            class="hide-menu"> Customer Fetch
                                        </span></a>
                                </li>
                            </ul>
                           
                        </li>
                        <?php }if( $session['user_type'] == 'sub_admin' ||  $session['user_type'] == 'administrator'){ ?>
						 <li class="nav-small-cap"><span class="hide-menu">Email Settings</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="<?php echo base_url(); ?>View_admin/email/smpt"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">SMTP Settings
                                </span></a>
                        </li>
                            <?php } ?>
                          
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../../docs/docs.html"
                                aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span
                                    class="hide-menu">Documentation</span></a></li> -->
                        <?php $session=$this->session->userdata('user_data');
                            if($session['user_type'] == 'administrator' || $session['user_type'] == 'sub_admin'){ ?>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo base_url(); ?>admin/logout"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                            <?php }else{ ?>
                                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo base_url(); ?>front/logout"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                            <?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>