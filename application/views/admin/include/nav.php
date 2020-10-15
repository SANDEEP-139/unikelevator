<body>
<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>


<div class="pcoded-container navbar-wrapper">
<nav class="navbar header-navbar pcoded-header" >
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <a class="mobile-search morphsearch-search" href="#">
                <i class="ti-search"></i>
            </a>
            <a href="<?= base_url('Admin/Dashboard');?>">
                <img class="img-fluid" src="<?= base_url('images/logo.png');?>" style="height: 55px;" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <div>
                <ul class="nav-left">
                    <li>
                        <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                    </li>
                    <li>
                        <a class="main-search morphsearch-search" href="#">
                            <!-- themify icon -->
                            <i class="ti-search"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()">
                            <i class="ti-fullscreen"></i>
                        </a>
                    </li>

                    <?php
            if(validation_errors()){
                    ?>
                    <li>
            <span style="color:red;font-weight: 900;" class="mb-sm-0 messagex" id="validation"><?php echo validation_errors(); ?></span>
                    </li><?php
            }

            if($this->session->flashdata('error')){
                            ?> <li>
            <span style="color:red;font-weight: 900;" class="mb-sm-0 messagex" id="seerror"><?php echo $this->session->flashdata('error'); ?></span>
                            </li><?php
                    }

                    if($this->session->flashdata('success')){
                            ?><li>
                                <span style="color:red;font-weight: 900;" class="mb-sm-0 messagex" id="msg"><?php echo $this->session->flashdata('success'); ?></span>
                            </li><?php
                    }	
            ?>
                </ul>

                <ul class="nav-right">
                    <li class="user-profile header-notification">
                        <a href="#!">
                            <img src="<?= base_url('images/user.png');?>" alt="User-Profile-Image">
                            <span>Admin</span>
                            <i class="ti-angle-down"></i>
                        </a>
                        <ul class="show-notification profile-notification">
                            <li>
                                <a href="#!">
                                    <i class="ti-settings"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="user-profile.html">
                                    <i class="ti-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('Admin/Logout');?>">
                                    <i class="ti-layout-sidebar-left"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- search -->

                <!-- search end -->
            </div>
        </div>
    </div>
</nav>
<!-- Sidebar inner chat end-->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
       <nav class="pcoded-navbar" >
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">

            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" >Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="<?= base_url('Admin/Dashboard');?>">
                        <span class="pcoded-micon"><i class="ti-home"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
               
                <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-layout-cta-btn-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.task.main">Product</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                      <ul class="pcoded-submenu">
                            <li class="">
                                <a href="<?= base_url('Admin/Product');?>">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.task.task-list">Product</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                </li>
                <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-layout-cta-btn-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.task.main">CMS</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                      <ul class="pcoded-submenu">
                            <li class="">
                                <a href="<?= base_url('Admin/CMS');?>">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.task.task-list">CMS Details</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                </li>
                <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-layout-cta-btn-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.task.main">Page Setting</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                      <ul class="pcoded-submenu">
                            <li class="">
                                <a href="<?= base_url('Admin/Settings');?>">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.task.task-list">Page Setting</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                </li>
                <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-layout-cta-btn-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.task.main">Product Inquiry</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                      <ul class="pcoded-submenu">
                            <li class="">
                                <a href="<?= base_url('Admin/Inquiry');?>">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.task.task-list">Inquiry Details</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            
                        </ul>
                </li>
                 <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-layout-cta-btn-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.task.main">Testimonial</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                      <ul class="pcoded-submenu">
                            <li class="">
                                <a href="<?= base_url('Admin/People_review');?>">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.task.task-list">Testimonial</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                </li>
                <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-layout-cta-btn-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.task.main">Slider Details</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                      <ul class="pcoded-submenu">
                            <li class="">
                                <a href="<?= base_url('Admin/Mstslider');?>">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.task.task-list">Slider Details</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                </li>
                <li class="pcoded-hasmenu ">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-layout-cta-btn-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.task.main">Clint Details</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                      <ul class="pcoded-submenu">
                            <li class="">
                                <a href="<?= base_url('Admin/Client');?>">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.task.task-list">Clint Details</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                </li>
            </ul>
        </div>
    </nav>