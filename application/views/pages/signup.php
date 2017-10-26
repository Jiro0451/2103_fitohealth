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
                        <h2 class="title text-left">Sign Up</h2>
                        
                        <?php echo validation_errors(); ?>
                        <!--form class="form-horizontal text-left" action="<?php //echo base_url(); ?>signup/create" method="post" accept-charset="utf-8"-->
                        <?php echo form_open('signup/create', array('class' => 'form-horizontal text-left'))?>
                            <div class="form-group has-feedback">
                                <label class="col-sm-3 control-label">First Name <span class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="inputName" placeholder="First Name" required>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-sm-3 control-label">Last Name <span class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="inputLastName" placeholder="Last Name" required>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-sm-3 control-label">NRIC<span class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="inputNRIC" placeholder="NRIC" required>
                                    <i class="fa fa-user form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-sm-3 control-label">Email <span class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="inputEmail" placeholder="Email" required>
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-sm-3 control-label">Address <span class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type= "text" class="form-control" name="inputAddress" placeholder="Address" required>
                                    <i class="fa fa-home form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-sm-3 control-label">Height (CM)<span class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type= "text" class="form-control" name="inputHeight" placeholder="Height" maxlength="3" required>
                                    <i class="fa fa-user form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-sm-3 control-label">Weight (KG)<span class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="inputWeight" placeholder="Weight" maxlength="3" required>
                                    <i class="fa fa-balance-scale form-control-feedback"></i>
                                </div>
                            </div>
                            
                            <div class="form-group has-feedback">
                                <label class="col-sm-3 control-label">Health Condition <span class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="inputCondition" placeholder="Health Condition E.g. Diabetes" required>
                                    <i class="fa fa-heartbeat form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-sm-3 control-label">Password <span class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="inputPassword" placeholder="Password" required>
                                    <i class="fa fa-lock form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-sm-3 control-label">Confirm Password <span class="text-danger small">*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="inputPassword2" placeholder="Confirm Password" required>
                                    <i class="fa fa-lock form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" required> Accept our <a href="#">privacy policy</a> and <a href="#">customer agreement</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-8">
                                    <button type="submit" class="btn btn-group btn-default btn-animated">Sign Up <i class="fa fa-check"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
        <!-- banner end -->

    </div>
    <!-- page-wrapper end -->

<?php //include('footer.inc.php') ?>
