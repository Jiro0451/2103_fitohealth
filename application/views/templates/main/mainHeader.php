<!DOCTYPE html>
<html>
    <head lang="en">
        <title>FitoHealth</title>
        <meta charset="UTF-8">

        <!-- ============ Mobile Meta ============  -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ============ Favicon ============ -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- ============ Google / Web fonts ============ -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- ============ the project core CSS file============ -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />   
        <link href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css" rel="stylesheet" type="text/css">

        <!-- ============ Font Awesome CSS ============ -->
        <link href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />

        <!-- ============ Fontello CSS - For scroll to top icon ============ -->
        <link href="<?php echo base_url(); ?>assets/fonts/fontello/css/fontello.css" rel="stylesheet" type="text/css"/>

        <!-- ============ Color Scheme ============ -->
        <link href="<?php echo base_url(); ?>assets/css/skins/blue.css" rel="stylesheet">

        <!-- ============ DateTime picker (JUICE)============ -->
        <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/build/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

        <!-- ============ Custom css ============ --> 
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/ownBootstrapCSS.css" rel="stylesheet" >
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/error.css">
        <?php include('custom.php'); ?>
        
    </head>

    <body class="no-trans page-loader-2">
        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

        <!-- header-container start -->
        <div class="header-container">

            <!-- header-top start -->
            <!-- ================ -->
            <div class="header-top colored">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm12">
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top end -->

            <!-- header start -->
            <!-- ================ --> 
            <header class="header centered fixed clearfix">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- header-right start -->
                            <!-- ================ -->
                            <div class="header-right" id="topnav">

                                <!-- navbar start -->
                                <!-- ================ -->
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>

                                            <!-- logo -->
                                            <div id="logo" class="logo navbar-left">
                                                <a href="<?php echo base_url(); ?>statistics"><img id="logo_img" src="<?php echo base_url(); ?>assets/images/logo.png" alt="FitoHealth"></a>
                                            </div>
                                        </div>
                                        
                                        <!-- Collect the nav links, forms, and other content-->
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <div class="navbar-left">
                                                <ul class="nav navbar-nav">

                                                    <!-- Statistics menu start -->
                                                    <li <?php setActive("statistics"); ?>><a href="<?php echo base_url(); ?>statistics">STATISTICS</a></li>
                                                    <!-- Statistics menu end -->

                                                    <!-- Online Appointment menu start -->
                                                    <li <?php setActive("appointment"); ?>><a href="<?php echo base_url(); ?>appointment">ONLINE APPOINTMENT</a></li>
                                                    <!-- Online Appointment menu end -->

                                                    <!-- Meal Intake menu start -->
                                                    <li <?php setActive("mealintake"); ?>><a href="<?php echo base_url(); ?>mealintake">MEAL INTAKE</a></li>
                                                    <!-- Meal Intake menu end -->
                                                    
                                                    <!-- Booking menu start -->
                                                    <li <?php setActive("bookings"); ?>><a href="<?php echo base_url(); ?>bookings">BOOKINGS</a></li>
                                                    <!-- Booking menu end -->
                                                </ul>
                                            </div>
                                            <!-- Collect the nav links, forms, and other content-->
                                            
                                            <!----------Profile DDL MENU----------->
                                            <div class="nav navbar-nav navbar-right">
                                                <ul class="nav navbar-nav">

                                                    <!-- Profile menu start -->
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MENU</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="<?php echo base_url(); ?>profile">PROFILE</a></li>
                                                            <!-- Session == False -->
                                                            <li><a href="<?php echo base_url(); ?>logout/destroy">LOG OUT</a></li>
                                                        </ul>
                                                    </li>
                                            </div><!-- /.navbar-->
                                        </div><!-- /.container-fluid -->
                                </nav>
                                <!-- navbar end -->

                            </div>
                            <!-- header-right end -->

                        </div>
                    </div>
                </div>

            </header>
            <!-- header end -->
        </div>
        <!-- header-container end -->

        <!--<?php //include ('validation.php'); ?>-->