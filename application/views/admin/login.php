<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Kundan Traders</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="author" content="#">
    <!-- Favicon icon -->

    <link rel="icon" href="<?= base_url('images/favicon.ico');?>" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('allfiles/admin/bower_components/bootstrap/css/bootstrap.min.css')?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('allfiles/admin/assets/icon/themify-icons/themify-icons.css')?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('allfiles/admin/assets/icon/icofont/css/icofont.css')?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('allfiles/admin/assets/css/style.css')?>">
    <!-- color .css -->

</head>

<body class="fix-menu">
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body m-auto">
                        <form class="md-float-material" method="post" action="<?php echo base_url('Admin/Login/login');?>">
                            <div class="text-center">
                                <img src="<?= base_url('images/logo.png');?>" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 style="text-align: center !important;" class="text-left txt-primary">Sign In</h3>
                                    </div>
                                </div>
                               
                                <hr/>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="userid" placeholder="Your Email Address">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Sign in">
                                        
                                    </div>
                                </div>
                                

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?= base_url('allfiles/admin/bower_components/jquery/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('allfiles/admin/bower_components/jquery-ui/js/jquery-ui.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('allfiles/admin/bower_components/popper.js/js/popper.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('allfiles/admin/bower_components/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url('allfiles/admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')?>"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url('allfiles/admin/bower_components/modernizr/js/modernizr.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('allfiles/admin/bower_components/modernizr/js/css-scrollbars.js')?>"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?= base_url('allfiles/admin/bower_components/i18next/js/i18next.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('allfiles/admin/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('allfiles/admin/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('allfiles/admin/bower_components/jquery-i18next/js/jquery-i18next.min.js')?>"></script>
</body>


</html>
