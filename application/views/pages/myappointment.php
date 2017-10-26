
<!-- breadcrumb start -->
<div class="breadcrumb-container">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-check-square-o"></i> My Appointments</li>
            <li class="pull-right"><?php echo "Welcome <a href='profile.php'>"; echo $user['fName'] ?></a></li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->

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
                <h1 class="page-title">My Appointments</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                
                <!-- Personal Details start -->
                <!-- ============================================================================== -->
                <div class="row">
                    <div class="col-sm-12 table-responsive">
                        <table class="table table-hover" id="tblBookings">
                            <thead>
                                <th>Appointment ID</th>
                                <th>Appointment Date</th>
                                <th>Appointment Time</th>
                                <th>Venue</th>
                                <th>Doctor</th>
                                <th>Reasons</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><?php echo $appointmentid ?></th>
                                    <th><?php echo $date ?></th>
                                    <th><?php echo $ime ?></th>
                                    <td><?php echo $venue ?></td>
                                    <td><?php echo $doctor ?></td>
                                    <td><?php echo $reasons ?></td>
                                    <td><button type="button" class="btn btn-danger">Cancel</button></td>
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