
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
            <li class="active"><i class="fa fa-cutlery"></i> Meal Intake</li>
            <li class="pull-right"><?php echo "Welcome <a href='profile.php'>"; echo $user['fName'] ?></a></li>
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
                <h1 class="page-title">Meal Intake</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                
                <!-- Personal Details start -->
                <!-- ============================================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <form role="form">
                            <textarea disabled class="form-control" rows="4">
Calories Remaining

1,200 -  494  =   706
Goal    Food   Remaining
                            </textarea>
                        </form>
                    </div>
                </div>

                <!-- Accordions start -->
                <!-- ============================================================================== -->
                <div class="panel-group collapse-style-1" id="accordion">

                    <!--Breakfast section-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="fa fa-cutlery "></i> Breakfast
                                    <button type="button" class="submit-button btn btn-group-sm" data-toggle="modal" data-target="#ModalBreakfast"><i class="fa fa-plus-circle"></i></button>
                                </a>
                            </h4>
                        </div>
                        
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <br />
                                <div class="form-group has-feedback">
                                    <table class="table table-responsive">
                                        <tbody>
                                            <tr>
                                                <td>Banana Smoothie</td>
<!--                                                <td><label for="lblname"><?php echo $row['firstname']." ". $row['lastname'] ; ?> </label></td>-->
                                                <td><label for="lblname">70 Calories</label></td>
                                            </tr>
                                        <tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Lunch section-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                    <i class="fa fa-cutlery "></i> Lunch
                                    <button type="button" class="submit-button btn btn-group-sm"><i class="fa fa-plus-circle"></i></button>
                                </a>
                            </h4>
                        </div>
                        
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <br />
                                <div class="form-group has-feedback">
                                    <table class="table table-responsive">
                                        <tbody>
                                            <tr>
                                                <td>Banana Smoothie</td>
<!--                                                <td><label for="lblname"><?php echo $row['firstname']." ". $row['lastname'] ; ?> </label></td>-->
                                                <td><label for="lblname">70 Calories</label></td>
                                            </tr>
                                        <tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Dinner section-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                    <i class="fa fa-cutlery "></i> Dinner
                                    <button type="button" class="submit-button btn btn-group-sm"><i class="fa fa-plus-circle"></i></button>
                                </a>
                            </h4>
                        </div>
                        
                        <div id="collapseThree" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <br />
                                <div class="form-group has-feedback">
                                    <table class="table table-responsive">
                                        <tbody>
                                            <tr>
                                                <td>Banana Smoothie</td>
<!--                                                <td><label for="lblname"><?php echo $row['firstname']." ". $row['lastname'] ; ?> </label></td>-->
                                                <td><label for="lblname">70 Calories</label></td>
                                            </tr>
                                        <tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Snack section-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed">
                                    <i class="fa fa-cutlery "></i> Snack
                                    <button type="button" class="submit-button btn btn-group-sm"><i class="fa fa-plus-circle"></i></button>
                                </a>
                            </h4>
                        </div>
                        
                        <div id="collapseFour" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <br />
                                <div class="form-group has-feedback">
                                    <table class="table table-responsive">
                                        <tbody>
                                            <tr>
                                                <td>Banana Smoothie</td>
<!--                                                <td><label for="lblname"><?php echo $row['firstname']." ". $row['lastname'] ; ?> </label></td>-->
                                                <td><label for="lblname">70 Calories</label></td>
                                            </tr>
                                        <tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- accordion end -->
                
                                    <!---------------------- Edit Height Modal ---------------------->
                    <div id="ModalBreakfast" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <script>
                                if (typeof editfolderId !== 'undefined') {
                                    alert(editfolderId);
                                }

                            </script>

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">FitoHealth, Add Breakfast</h4>
                                </div>
                                <form role='form' name="editroom" id="editform" method="POST" action="doeditfolder.php" onsubmit="return editcheckall(folderid)">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Food</label>
                                            <input type="text" class="form-control" placeholder="Food" name="editfoldername" id="editfoldername" onkeyup="editcheckroomname(folderid);">
                                            <span id="editname_status" style="color: red;"></span>
                                        </div>
                                        <!--                               

                                                                        <div class="form-group">
                                                                            <label>Assign Quiz</label>
                                                                            <select class="form-control" id="editroomquiz" name="editfolderquiz">
                                                                                <option>None</option>
                                        <?php
                                        mysqli_data_seek($quizRESULT, 0);
                                        if ($quizRESULT->num_rows > 0) {
                                            while ($row = $quizRESULT->fetch_assoc()) {
                                                ?>
                                                                                        <option value=<?php echo $row["quiz_id"]; ?>><?php echo $row["quiz_name"]; ?></option>
                                            <?php }
                                        } ?>
                                                                            </select>
                                                                        </div>-->
                                        <!--                                <div class="form-group">
                                                                            <label>Assign multiple Quiz</label><br>

                                        <?php
                                        mysqli_data_seek($quizRESULT, 0);
                                        if ($quizRESULT->num_rows > 0) {
                                            while ($row = $quizRESULT->fetch_assoc()) {
                                                echo "<input style='margin-left: 8px;' type='checkbox' name='tickquizedit' id='tickquizedit' value='yes'/>\n";
                                                echo "<label>" . $row['quiz_name'] . "</label>\n";
                                                ?>

            <?php }
        } ?>
                                                                             folderid filled in by jquery 

                                                                </div>-->
                                        <div class="modal-footer">
                                            <input type="hidden" value="" name="hiddenfolderid" id="hiddenfolderid" />
                                            <button type="submit" name="editfolderform" value="Submit" class="btn btn-default"><i class="fa fa-edit"></i> ADD FOOD</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                                        </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- main-container end -->	

<?php //include('footer.inc.php'); ?>

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