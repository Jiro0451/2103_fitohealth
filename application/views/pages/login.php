<?php //include('header.inc.php') ?>

<body class="no-trans">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper bg-black">

        <!-- background image -->
        <div class="fullscreen-bg full-width"><img src="<?php echo base_url(); ?>assets/images/healthbg.jpg" alt=""/></div>
        
        <!-- banner start -->
        <!-- ================ -->
        <div class="pv-40 dark-translucent-bg bg-black">
            <div class="container">
                <div class="text-center" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                    <!-- logo -->
                    <div id="logo" class="logo">
                        <h3 class="margin-clear"><a href="" class="logo-font link-light">Fito<span class="text-default">Health</span></a></h3>
                    </div>

                    <!-- name-and-slogan -->
                    <p class="small">Don't Regret. Stay Healthy</p>
                    <div class="form-block center-block p-30 light-gray-bg border-clear">
                        <h2 class="title text-left">Login</h2>
                        
                        <!--Error Message Display with color/bootstrap/stuff -Jerome-->
                        <?php
                            if (!empty(validation_errors())) {
                                echo '<div class="alert alert-danger" role="alert"><strong>'.validation_errors().'</strong></div>'; 
                            }
                        ?>
                        <!--form method="post" action="http://localhost/2103_team2/login/attempt" class="form-horizontal text-left"-->
                        <?php echo form_open('login/attempt', array('class' => 'form-horizontal text-left')); ?>
                            <div class="form-group has-feedback">
                                <label for="inputNRIC" class="col-sm-3 control-label">NRIC</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="NRIC" placeholder="NRIC" required>
                                        <i class="fa fa-user form-control-feedback"></i>
                                </div>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="inputPassword" placeholder="Password" required>
                                    <i class="fa fa-lock form-control-feedback"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-8">
                                    <button type="submit" class="btn btn-group btn-default btn-animated">Log In <i class="fa fa-user"></i></button>
                                    
                                </div>
                            </div>
                        </form>

                        <p>Don't have an account yet? <a href="<?php echo base_url(); ?>signup">Sign up</a> now.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner end -->

    </div>
    <!-- page-wrapper end -->

<?php //include('footer.inc.php') ?>
