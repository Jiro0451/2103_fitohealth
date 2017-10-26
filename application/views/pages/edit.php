<br><br>


<div class="form-block center-block p-30 light-gray-bg border-clear">
<h2>Update Particulars</h2>
    <?php echo validation_errors(); ?>
    <?php $user = $this->user_model->getUser($this->session->IC); ?> <!-- get the sessions NRIC -->

    <form class="form-horizontal text-left" action="<?php echo base_url(); ?>edit/update" method="post" accept-charset="utf-8">
        <input type="hidden" name="NRIC" value="<?php echo $user['NRIC']; ?>">
        <div class="form-group has-feedback">
            <label class="col-sm-3 control-label">First Name <span class="text-danger small">*</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="inputName" placeholder="First Name" value=<?php echo $user['fName'] ?> required>
                <i class="fa fa-pencil form-control-feedback"></i>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="col-sm-3 control-label">Last Name <span class="text-danger small">*</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="inputLastName" placeholder="Last Name" value=<?php echo $user['lName'] ?> required>
                <i class="fa fa-pencil form-control-feedback"></i>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="col-sm-3 control-label">Email <span class="text-danger small">*</span></label>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="inputEmail" placeholder="Email" value=<?php echo $user['email'] ?> required>
                <i class="fa fa-envelope form-control-feedback"></i>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="col-sm-3 control-label">Address <span class="text-danger small">*</span></label>
            <div class="col-sm-8">
                <input type= "text" class="form-control" name="inputAddress" placeholder="Address" value=<?php echo $user['address'] ?> required>
                <i class="fa fa-home form-control-feedback"></i>
            </div>
        </div>

        <div class="form-group has-feedback">
            <label class="col-sm-3 control-label">Health Condition <span class="text-danger small">*</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="inputCondition" placeholder="Health Condition E.g. Diabetes" value=<?php echo $user['h_condition'] ?> required>
                <i class="fa fa-heartbeat form-control-feedback"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-8">
                <button type="submit" class="btn btn-group btn-default btn-animated">Update <i class="fa fa-check"></i></button>
            </div>
        </div>
    </form>
    
</div>

