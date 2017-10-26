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
            <li class="active"><i class="fa fa-line-chart"></i> Statistics</li>
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

<?php 
/*  //Original Height/Weight/BMI handler. Now done in statistics controller -Jerome
 *  $height = $user['NRIC']; 
 *  $weight = $user['weight'];
 *  $BMI = $weight/($height*$height); 
 *  $analysis = "";
 *  if($BMI<18.5){ $analysis = "Underweight"; }
 *  else if($BMI >= 18.5 && $BMI< 24.9) { $analysis = "Acceptable";}
 *  else if($BMI >= 24.9 && $BMI< 29.9) { $analysis = "Overweight";}
 *  else {$analysis = "Obese"; }
 */ ?>

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
                <h1 class="page-title">Statistics</h1>
                
                <div class="separator-2"></div>
                <!-- page-title end -->
                
                <!-- Personal Details start -->
                <!-- ============================================================================== -->
                <div class="row">
                    <div class="col-sm-12 table-responsive">
                        <table class="table table-hover" id = "tblCalories">
                            <thead>
                                <tr id="ddlRoom">
                                    <th rowspan="2"></th>
                                    <th rowspan="2"></th>
                                    <th rowspan="2">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Height (CM)</th>
                                    
                                    <td align="left"><?php echo $height ?><a data-toggle="modal" data-target="#ModalEditHeight" id="editfolderid"><img align="right" src="<?php echo base_url(); ?>assets/images/edit.gif"/></a></td><td></td>
                                </tr>
                                <tr>
                                    <th>Weight (KG)</th>
                 
                                    <td align="left"><?php echo $weight ?><a data-toggle="modal" data-target="#ModalEditWeight" id="editfolderid"><img align="right" src="<?php echo base_url(); ?>assets/images/edit.gif"/></a></td><td></td>
                                </tr>
                                
                                <tr>
                                    <th>BMI</th>
                                    <td><?php echo round($BMI,2) ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Analysis</th>
                                    <td><?php echo $analysis ?></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                    </div>
                    <!---------------------- Edit Height Modal ---------------------->
                    <div id="ModalEditHeight" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <script>
                                if (typeof editfolderId !== 'undefined') {
                                    alert(editfolderId);
                                }

                            </script>
                            
                            <script>
                                function checkHeight(){
                                    var inputHeight, text;
                                    
                                    inputHeight=document.getElementById('newHeight').value;
                                    
                                    if(isNaN(inputHeight) || inputHeight<1){
                                        text = "*Please input a valid height";
                                        document.getElementById("alert").innerHTML = text;
                                        return false;
                                    }
                                    
                                    return true;
                                    
                                }
                            </script>
                            

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">FitoHealth, Edit Height</h4>
                                </div>
                                <form role='form' name="editroom" id="editform" method="POST" action="statistics/editHeight">
                                    <input type="hidden" name="NRIC" value="<?php echo $NRIC ?>">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <p id="alert" class="error"></p>
                                            <label>Height (CM)</label>
                                            <input type="text" class="form-control" placeholder="Height (CM)" id="newHeight" name="newHeight">
                                            <span id="editname_status" style="color: red;"></span>
                                        </div>
            

                                    </div>
                                        <div class="modal-footer">
                                            <button type="submit" onclick="return checkHeight()" name="editfolderform" value="Submit" class="btn btn-default"><i class="fa fa-edit"></i> UPDATE HEIGHT</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                                        </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                    
                    <!---------------------- Edit Weight Modal ---------------------->
                    <div id="ModalEditWeight" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <script>
                                if (typeof editfolderId !== 'undefined') {
                                    alert(editfolderId);
                                }

                            </script>
                            
                            <script>
                                function checkWeight(){
                                    var inputWeight, text;
                                    
                                    inputWeight=document.getElementById('newWeight').value;
                                    
                                    if(isNaN(inputWeight) || inputWeight<1){
                                        text = "*Please input a valid weight";
                                        document.getElementById("alert2").innerHTML = text;
                                        return false;
                                    }
                                    
                                    return true;
                                    
                                }
                            </script>

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">FitoHealth, Edit Weight</h4>
                                </div>
                                <form role='form' name="editroom" id="editform" method="POST" action="statistics/editWeight">
                                    <input type="hidden" name="NRIC" value="<?php echo $NRIC; ?>">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <p id="alert2" class="error"></p>
                                            <label>Weight (KG)</label>
                                            <input type="text" class="form-control" placeholder="Weight (KG)" id="newWeight" name="newWeight">
                                            <span id="editname_status" style="color: red;"></span>
                                        </div>
            

                                    </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="editfolderform" onclick="return checkWeight()" value="Submit" class="btn btn-default"><i class="fa fa-edit"></i> UPDATE WEIGHT</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                                        </div>
                                </form>
                         
                            </div>

                        </div>
                    </div>
                </div>
                </div>

                <!-- Calories start -->
                <!-- ============================================================================== -->
                <div class="row">
                    <h2>Calories</h2>
                    <div class="col-sm-6 table-responsive">
                        <canvas class="graph line" id="lines-graph" height="210" width="270"></canvas>
                        <br>
                        <br>									
                    </div>

                    <div class="col-sm-6">
                        <table class="table table-hover" id="tblCalories">
                            <tbody>
                                <tr>
                                    <th>Total Calories Intake</th>
                                    <td>8,400</td>
                                </tr>
                                <tr>
                                    <th>Total Calories Burned</th>
                                    <td>6,400</td>
                                </tr>
                                <tr>
                                    <th>Dail Average</th>
                                    <td>2,200</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                    </div>
                </div>
                <!-- Nutrients start -->
                <!-- ============================================================================== -->
                <h2>Nutrients</h2>
                <div class="row">
                    <div class="col-sm-6 table-responsive">
                        <canvas class="graph pie" id="pie-graph" height="300"></canvas>
                    </div>

                    <div class="col-sm-6">
                        <table class="table table-hover" id="tblNutrient">
                            <thead>
                                <th></th>
                                <th>Average</th>
                                <th>Goal</th>
                                <th>Left</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Proteins</th>
                                    <td>20</td>
                                    <td>60</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <th>Carbohydrates</th>
                                    <td>20</td>
                                    <td>60</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <th>Fiber</th>
                                    <td>20</td>
                                    <td>60</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <th>Sugar</th>
                                    <td>20</td>
                                    <td>60</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <th>Fats</th>
                                    <td>20</td>
                                    <td>60</td>
                                    <td>40</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- main-container end -->	

<?php //include('footer.inc.php'); ?>