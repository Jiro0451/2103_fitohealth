<!-- footer start -->
<!-- ================ -->
<footer id="footer" class="clearfix dark-translucent-bg footerposition">
    <div class="subfooter default-bg">
        <div class="container">
            <div class="subfooter-inner">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center"><span class="logo-font pr-10">FitoHealth</span> Copyright © 2017 FitoHealth by <a class="link-light" target="_blank" href="index.php">2103 Team 02</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- footer end -->

<noscript>
<div id="noscript">
    <div class="container">
        <div class="row">
            <div class="main col-md-6 col-md-offset-3 pv-40">
                <h1 class="page-title"><span class="text-default">403</span></h1>
                <h2>JavaScript Required</h2>
                <p>We are sorry - FitoHealth requires JavaScript to work.</p>
                <p>In order to use FitoHealth, you need to have JavaScript enabled in your browser. To enable JavaScript, please do the following:</p>
                <ul>
                    <li><a href="http://enable-javascript.com/" target="_blank">Follow these instructions.</a></li>
                    <li>Make sure you have the latest browser.</li>
                    <li>Turn off or disable the NoScript extension, if you have it.</li>
                </ul>
            </div>

        </div>
    </div>
</div>
</noscript>

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Modernizr javascript -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/modernizr.js"></script>

<!-- SmoothScroll javascript -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/SmoothScroll.js"></script>

<!-- Initialization of Plugins -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/template.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

<script src="<?php echo base_url(); ?>assets/css/jquery-ui-1.11.4.custom/jquery-ui-1.11.4.custom/jquery-ui.js"></script>

<script src="<?php echo base_url(); ?>assets/css/jQuery-Timepicker-Addon-master/src/jquery-ui-timepicker-addon.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../metisMenu/dist/metisMenu.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- DataTables JavaScript -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>

<!-- ============ DateTime picker (JUICE)============ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/src/js/bootstrap-datetimepicker.js"></script>

<!-- ============ CHART============ -->
<script src="<?php echo base_url(); ?>assets/plugins/charts/chart.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/charts/Chart.bundle.js" type="text/javascript"></script>

<!-- Own Script -->
<script src="<?php echo base_url(); ?>assets/js/ownJS.js" type="text/javascript"></script>

<!----------------------- Scripts -------------------------->
<script>
    $(document).ready(function () {
        $('#tblBookings').dataTable({
            "oLanguage": {
                "sSearch": "Search all columns:"
            }
        });
    });

</script>

<!----------------------- Scripts -------------------------->
<script>
    $(document).ready(function () {
        $('#tblNutrient').dataTable({
            "oLanguage": {
                "sSearch": "Search all columns:"
            }
        });
    });

</script>


</body>
</html>