
<?php /*
include("userSession.php");
include("db.php");
*/
?>

<?php //include('mainHeader.inc.php'); ?>

<!-- breadcrumb start -->
<div class="breadcrumb-container">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-cutlery"></i> Bookings</li>
            <li class="pull-right"><?php /*echo "Welcome <a href='profile.php'>"; echo $_SESSION['username'];*/?> </a></li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->

<?php /*
include("db.php");

$userQUERY = "SELECT * FROM User WHERE NRIC = $nric";
$userRESULT = mysqli_query($conn, $userQUERY) or die(mysqli_error($conn));

$caloriesQUERY = "SELECT * FROM ingredients WHERE NRIC = $nric; //this aint done yet
$caloriesRESULT = mysqli_query($conn, $rocaloriesQUERY) or die(mysqli_error($conn));
 */
?>

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">
    <div class="container">
        <div class="row">
            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Bookings</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                
                <!-- Personal Details start -->
                <!-- ============================================================================== -->
                <div class="row">
                    <div class="col-sm-12 table-responsive">
                        <table class="table table-hover" id="tblBookings">
                            <thead>
                                <th>Date & Time</th>
                                <th>Venue</th>
                                <th>Doctor</th>
                                <th>Reasons</th>
                                <th>Cancel Booking</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>
                                        <?php// echo $datetime ?>
                                    </th>
                                    <td>
                                        <?php// echo $venue ?>
                                    </td>
                                    <td>
                                        <option value="defDoctor">Select Doctor</option>
                                        <?php// echo $doctor ?>
                                    </td>
                                    <td>
                                        <?php// echo $reasons ?>
                                    </td>
                                    <td><img src="<?php echo base_url(); ?>assets/images/delete.gif"/></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- main-container end -->	

<?php //include('footer.inc.php'); ?>