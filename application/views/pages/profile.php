<?php /* 
include("userSession.php");
include("db.php");
$user_id = $_SESSION['user_id'];
$userQUERY = "SELECT * FROM users where user_id = $user_id";
$userRESULT = mysqli_query($conn, $userQUERY) or die(mysqli_error($conn));
$row = $userRESULT->fetch_assoc();

function getrole($role_id){
    include("db.php");
    $roleQUERY = "SELECT role_name FROM role where role_id = $role_id";
    $roleRESULT = mysqli_query($conn, $roleQUERY) or die(mysqli_error($conn));
    $role = $roleRESULT->fetch_array(MYSQLI_NUM);
    echo $role[0];
}*/
?>
<?php //include('mainHeader.inc.php'); ?>

<!-- breadcrumb start -->
<div class="breadcrumb-container">
    <div class="container">
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a class="link-dark" href="main.php"> Home</a></li>
            <li class="active">My Account</li>
            <!--User Name-->
<!--            <li class="pull-right">Welcome <a href='profile.php'><?php echo $_SESSION['username'];?></a></li>-->
            <li class="pull-right">Welcome <a href="<?php echo base_url();?>profile">Username</a></li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->

<!--Section-->
<div class="page-wrap">
<section class="main-container">
    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-8" style="text-align: justify">

                <!-- page-title start -->
                <!-- ================ -->
                <h2 class="page-title">My Account</h2>
                <div class="separator-2"></div>
                <p>Change your personal details here! We would like to be updated, to give you a better web experience.</p>
                <!-- page-title end -->

                <!-- Accordions start -->
                <!-- ============================================================================== -->
                <div class="panel-group collapse-style-1" id="accordion">

                    <!--Personal Details section-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a id="toggle1" data-toggle="collapse" data-parent="#accordion">
                                    <i class="fa fa-lock "></i> Personal Details
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
                                                <td>Name</td>
<!--                                                <td><label for="lblname"><?php echo $row['firstname']." ". $row['lastname'] ; ?> </label></td>-->
                                                <td><label for="lblname"><?php echo $user['fName']?> <?php echo $user['lName']?></label></td>
                                            </tr>
                                            <tr>
                                                <td>NRIC</td>
<!--                                                <td><label for="lblUsername"><?php echo $row["username"];?> </label></td>-->
                                                <td><label for="lblUsername"><?php echo $user['NRIC']?></label></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Address</td>
<!--                                                <td><label for="lblAddress"><?php echo $row["username"];?> </label></td>-->
                                                <td><label for="lblAddress"><?php echo $user['address']?></label></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Email</td>
<!--                                                <td><label for="lblemail"><?php echo $row['email']; ?></label></td>-->
                                                <td><label for="lblemail"><?php echo $user['email']?></label></td>
                                            </tr>                                            
                                            <tr>
                                                <td>Known Medical Condition(s)</td>
<!--                                                <td><label for="lblemail"><?php echo $row['email']; ?></label></td>-->
                                                <td><label for="lblemail"><?php echo $user['h_condition']?></label></td>
                                            </tr>
                                            <tr>
                                                <td><a data-toggle="modal" data-target="#ModalEditPassword" id="editfolderid">Change Password</a></td><td></td>
                                            </tr>
                                        <tbody>
                                    </table>
                                    <a href="edit"> <button type="button" class="submit-button btn btn-default" onclick="Toggleto2()" ><i class="fa fa-edit"></i> EDIT</button></a>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    
<!---------------------- Edit Password Modal ---------------------->
                    <div id="ModalEditPassword" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <script>
                                if (typeof editfolderId !== 'undefined') {
                                    alert(editfolderId);
                                }

                            </script>
                            
                            <script>
                                function checkPassword(){
                                    var oldPassword,oldPassword2, text;
                                    
                                    oldPassword=document.getElementById('oldPassword').value;
                                    oldPassword2=document.getElementById('password').value;
                                    
                                    newPassword=document.getElementById('newPassword').value;
                                    newPassword2=document.getElementById('newPassword2').value;
                                    
                                    if(oldPassword != oldPassword2){
                                        text = "*Please input the correct current password";
                                        document.getElementById("password_alert").innerHTML = text;
                                        return false;
                                    }
                                    
                                    if(newPassword != newPassword2){
                                        text = "*The two new passwords do not match";
                                        document.getElementById("password_alert").innerHTML = text;
                                        return false;
                                    }
                                    
                                    return true;
                                    
                                }
                            </script>

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">FitoHealth, Change Password</h4>
                                </div>
                                <form role='form' name="editroom" id="editform" method="POST" action="edit/updatepass">
                                    <input type="hidden" id="NRIC" name="NRIC" value="<?php echo $user['NRIC']; ?>">
                                    <input type="hidden" id="password" name="password" value="<?php echo $user['password']; ?>">
                                    <div class="modal-body">
                                        
                                        <p id="password_alert" class="error"></p>
                                        <div class="form-group">
                                            <label>Enter current Password</label>
                                            <input type="password" class="form-control" placeholder="Old Password" id="oldPassword" name="oldPassword">
                                            <span id="editname_status" style="color: red;"></span>
                                        </div>
            
                                        <div class="form-group">
                                            <label>Enter new Password</label>
                                            <input type="password" class="form-control" placeholder="New Password" id="newPassword" name="newPassword">
                                            <span id="editname_status" style="color: red;"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter new Password again</label>
                                            <input type="password" class="form-control" placeholder="New Password" id="newPassword2" name="newPassword2">
                                            <span id="editname_status" style="color: red;"></span>
                                        </div>

                                    </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="editfolderform" value="Submit" class="btn btn-default" onclick="return checkPassword()"><i class="fa fa-edit"></i> UPDATE Password</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                                        </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                 
                    
<?php /*
                    <!--Edit Account section-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a id="toggle2" data-parent="#accordion" class="collapsed">
                                    <i class="fa fa-edit"></i> Edit Account
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <br />
                                <div class="contact-form">
<!--                                    <form role='form' name="profileform" id="profileform" method="POST" action="doupdateprofile.php" onsubmit="return checkall()">-->
                                    <form role='form' name="profileform" id="profileform">
                                    <div class="form-group has-feedback">
                                        <label name="lblFirstname"> First Name</label>
                                        <div class="input-group">
<!--                                            <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $row['firstname'] ; ?>" onkeyup="checkfname();">-->
                                            <input type="text" class="form-control" name="fname" id="fname">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>
                                        <span id="fname_status" style="color: red; display: block;"></span>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label name="lblLastname"> Last Name</label>
                                        <div class="input-group">
<!--                                            <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $row['lastname']; ?>" onkeyup="checklname();">-->
                                            <input type="text" class="form-control" name="lname" id="lname">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>
                                        <span id="lname_status" style="color: red; display: block;"></span>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label name="lblusername"> Username</label>
                                        <div class="input-group">
<!--                                            <input type="text" class="form-control" name="username" id="username" value="<?php echo $row['username']; ?>" disabled >-->
                                            <input type="text" class="form-control" name="username" id="username" disabled >
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label name="lblRole"> Role</label>
                                        <div class="input-group">
<!--                                            <input type="text" class="form-control" name="role" id="role" value="<?php getrole($row['role_id']); ?>" disabled>-->
                                            <input type="text" class="form-control" name="role" id="role" disabled>
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label name="lblemail"> Email</label>
                                        <div class="input-group">
<!--                                            <input type="text" class="form-control" name="profileemail" id="profileemail" value="<?php echo $row['email']; ?>" onkeyup="checkemail();">-->
                                            <input type="text" class="form-control" name="profileemail" id="profileemail">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                        </div>
                                        <span id="email_status" style="color: red; display: block;"></span>
                                    </div>
                                        
<!--                                    <button type="submit" class="submit-button btn btn-default" onserverclick="btnSave_Click" title="Save" <a href="doupdateprofile.php?userID=<?php echo $id; ?>"> <i class="fa fa-save"></i> SAVE</button>
                                    <button type="button" class="submit-button btn btn-default" title="Cancel" onclick="Toggleto1()"><i class="fa fa-times"></i> CANCEL</button>-->

                                    <button type="submit" class="submit-button btn btn-default" title="Save" <i class="fa fa-save"></i> SAVE</button>
                                    <button type="button" class="submit-button btn btn-default" title="Cancel"><i class="fa fa-times"></i> CANCEL</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Change Password section-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a id="toggle3" data-parent="#accordion" class="collapsed">
                                    <i class="fa fa-lock "></i> Change Password
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <br/>
                                <p>Change your password here! Security is one of our major concerns and you should change your password regularly to prevent hacking.</p>
                                <div class="separator-2"></div>
<!--                                <form class="form-group has-feedback" form="myForm" method="POST" action="doupdateprofile.php" onsubmit="return checkpassword()">-->
                                <form class="form-group has-feedback" form="myForm">
                                    <table class="table table-responsive">
                                        <tbody>
                                            <tr>
                                                <td>Name</td>
<!--                                                <td><label for="lblname"><?php echo $row['firstname']." ". $row['lastname'] ; ?> </label></td>-->
                                                <td><label for="lblname">firstname lastname </label></td>
                                            </tr>
                                            <tr>
                                                <td>Username</td>
<!--                                                <td><label for="lblUsername"><?php echo $row["username"];?> </td></label></td>-->
                                                <td><label for="lblUsername">Username</td>
                                            </tr>
                                            <tr>
                                                <td>Role</td>
<!--                                                <td><label for="lblRole"><?php getrole($row['role_id']); ?></label></td>-->
                                                <td><label for="lblRole">role id</label></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
<!--                                                <td><label for="lblemail"><?php echo $row['email']; ?></label></td>-->
                                                <td><label for="lblemail">email</label></td>
                                            </tr>
                                        <tbody>
                                    </table>

                                    <div class="form-group has-feedback">
                                        <label name="oldPW"> Current Password *</label>
                                        <div class="input-group">
                                            <input type="password" name ="cpassword" id="cpassword" class="form-control" placeholder="Current Password">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <span id="oldPW_status" style="color: red; display: block;"></span>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label name="newPW"> New Password *</label>
                                        <div class="input-group">
                                            <input type="password" name="npassword" id="npassword" class="form-control" placeholder="New Password">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <span id="newPW_status" style="color: red; display: block;"></span>
                                    </div>
        
                                    <div class="form-group has-feedback">
                                        <label name="newPW"> Confirm New Password *</label>
                                        <div class="input-group">
                                            <input type="password" name="cnpassword" id="cnpassword" class="form-control" placeholder="Confirm New Password">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <span id="cfmPW_status" style="color: red; display: block;"></span>
                                    </div>
                                    
<!--                                    <button type="submit" class="submit-button btn btn-default" onserverclick="btnSave_Click" title="Save" <a href="doupdateprofile.php.php?userID=<?php echo $id; ?>"> ><i class="fa fa-save"></i> SAVE</button>
                                    <button type="button" class="submit-button btn btn-default" onclick="Toggleto1()"><i class="fa fa-times"></i> CANCEL</button>-->

                                    <button type="submit" class="submit-button btn btn-default" title="Save"> ><i class="fa fa-save"></i> SAVE</button>
                                    <button type="button" class="submit-button btn btn-default"><i class="fa fa-times"></i> CANCEL</button>
                                </form>
                            </div>
                        </div>
                    </div>
*/ ?>
                </div>
                <!-- accordion end -->
            </div>
        </div>
    </div>
</section>
</div>

<?php //include('footer.inc.php'); ?>
<!--<script src="profilevalidation.js"></script>-->