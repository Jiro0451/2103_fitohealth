<?php /*
include("userSession.php");
include("db.php");
*/
?>

<?php //include('mainHeader.inc.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function getDoctor(val) {
            $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>appointment/getDoctor",
            data: {'place_id' : val},
            success: function(data){
                    $("#doctor-list").html(data);
            }
            });
    }

    function getReason(val) {
            $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>appointment/getReason",
            data:{'doctor_id' : val},
            success: function(data){
                    $("#reason-list").html(data);
            }
            });
    }
</script>


<!-- breadcrumb start -->
<div class="breadcrumb-container">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-bookmark"></i> Online Appointment System</li>
            <li class="pull-right"><?php /*echo "Welcome <a href='profile.php'>"; echo $_SESSION['username'];*/?> </a></li>
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
                <h1 class="page-title">Online Appointment System</h1>
               
                <div class="separator-2"></div>
                <!-- page-title end -->
                
                <?php echo validation_errors(); ?>
                <?php echo form_open('appointment/book_appointment'); ?>
                    <div class="form-group">
                        <!--Polyclinic-->
                       
                            <label>Hospital/Polyclinic:</label><br/>
                            <select name="place" id="place-list" class="form-control selectpicker" onChange="getDoctor(this.value);">
                            <option value="defInstitution">Select Institution</option>
                            <?php
                            foreach ($places as $institution){     
                            ?>
                            <option value="<?php echo $institution['institutionid']; ?>"><?php echo $institution['institutionname']; ?></option>
                            <?php
                            }
                            ?>
                            </select>
                         
                    </div>
                
                    <div class="form-group">

                            <label>Doctor:</label><br/>
                            <select name="doctor" id="doctor-list" class="form-control selectpicker" onChange="getReason(this.value)">
                            <option value="defDoctor">Select Doctor</option>
                            </select>

                    </div>
                
                    <div class="form-group">
                            <label>Reason:</label><br/>
                            <select name="reason" id="reason-list" class="form-control selectpicker">
                            <option value="">Select Reason</option>
                            </select>
                    </div>
                
                    <!--------------------------------------------------------------------------------------------------------------------------------------->
            
                    <div class="nativeDateTimePicker">
                        <label for="appointment">Choose a date and time for your appointment:</label>
                        <input type="datetime-local" id="party" name="bday">
                        <span class="validity"></span>
                      </div>
                      <p class="fallbackLabel">Choose a date and time for your appointment:</p>
                      <div class="fallbackDateTimePicker">
                          <table>
                              <tr>
                                  <td><span>
                                    <label for="day">Day:</label>
                                    <select id="day" name="day" class="form-control selectpicker">
                                    </select>
                                  </span></td>
                                  
                                  <td><span>
                                    <label for="month">Month:</label>
                                    <select id="month" name="month" class="form-control selectpicker">
                                      <option selected value="01">January</option>
                                      <option value="02">February</option>
                                      <option value="03">March</option>
                                      <option value="04">April</option>
                                      <option value="05">May</option>
                                      <option value="06">June</option>
                                      <option value="07">July</option>
                                      <option value="08">August</option>
                                      <option value="09">September</option>
                                      <option value="10">October</option>
                                      <option value="11">November</option>
                                      <option value="12">December</option>
                                    </select>
                                  </span></td>
                                  
                                  <td><span>
                                    <label for="year">Year:</label>
                                    <select id="year" name="year" class="form-control selectpicker">
                                    </select>
                                  </span></td>
                                  
                                  <td><span>
                                    <label for="hour">Hour:</label>
                                    <select id="hour" name="hour" class="form-control selectpicker">
                                    </select>
                                  </span></td>
                              </tr>
                          </table>
                      </div>

                        <button type="submit" class="btn btn-default">Book</button>
                        <button type="submit" class="btn btn-default-transparent">Cancel</button>

                </form>
                
                <br><br>
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- main-container end -->	

<?php //include('footer.inc.php'); ?>


<script>
    
    $(function () {
            /* Add Start & End Date Time */
            $('#txtDate').datetimepicker({
                minDate: moment(),
                format: 'DD-MMMM-YYYY'
            });

            /* Edit Start & End Date Time */
            $('#txtDate').datetimepicker({
                minDate: moment(),
                format: 'DD-MMMM-YYYY'
            });
        });
        
</script>

<script>
    // define variables
        var nativePicker = document.querySelector('.nativeDateTimePicker');
        var fallbackPicker = document.querySelector('.fallbackDateTimePicker');
        var fallbackLabel = document.querySelector('.fallbackLabel');

        var yearSelect = document.querySelector('#year');
        var monthSelect = document.querySelector('#month');
        var daySelect = document.querySelector('#day');
        var hourSelect = document.querySelector('#hour');
        var minuteSelect = document.querySelector('#minute');

        // hide fallback initially
        fallbackPicker.style.display = 'none';
        fallbackLabel.style.display = 'none';

        // test whether a new datetime-local input falls back to a text input or not
        var test = document.createElement('input');
        test.type = 'datetime-local';
        // if it does, run the code inside the if() {} block
        if(test.type === 'text') {
          // hide the native picker and show the fallback
          nativePicker.style.display = 'none';
          fallbackPicker.style.display = 'block';
          fallbackLabel.style.display = 'block';

          // populate the days and years dynamically
          // (the months are always the same, therefore hardcoded)
          populateDays(monthSelect.value);
          populateYears();
          populateHours();
          populateMinutes();
        }

        function populateDays(month) {
          // delete the current set of <option> elements out of the
          // day <select>, ready for the next set to be injected
          while(daySelect.firstChild){
            daySelect.removeChild(daySelect.firstChild);
          }

          // Create variable to hold new number of days to inject
          var dayNum;

          // 31 or 30 days?
          if(month === 'January' | month === 'March' | month === 'May' | month === 'July' | month === 'August' | month === 'October' | month === 'December') {
            dayNum = 31;
          } else if(month === 'April' | month === 'June' | month === 'September' | month === 'November') {
            dayNum = 30;
          } else {
          // If month is February, calculate whether it is a leap year or not
            var year = yearSelect.value;
            (year - 2016) % 4 === 0 ? dayNum = 29 : dayNum = 28;
          }

          // inject the right number of new <option> elements into the day <select>
          for(i = 1; i <= dayNum; i++) {
            var option = document.createElement('option');
            option.textContent = i;
            daySelect.appendChild(option);
          }

          // if previous day has already been set, set daySelect's value
          // to that day, to avoid the day jumping back to 1 when you
          // change the year
          if(previousDay) {
            daySelect.value = previousDay;

            // If the previous day was set to a high number, say 31, and then
            // you chose a month with less total days in it (e.g. February),
            // this part of the code ensures that the highest day available
            // is selected, rather than showing a blank daySelect
            if(daySelect.value === "") {
              daySelect.value = previousDay - 1;
            }

            if(daySelect.value === "") {
              daySelect.value = previousDay - 2;
            }

            if(daySelect.value === "") {
              daySelect.value = previousDay - 3;
            }
          }
        }

        function populateYears() {
          // get this year as a number
          var date = new Date();
          var year = date.getFullYear();

          // Make this year, and the 100 years before it available in the year <select>
          for(var i = 0; i <= 2; i++) {
            var option = document.createElement('option');
            option.textContent = year+i;
            yearSelect.appendChild(option);
          }
        }

        function populateHours() {
          // populate the hours <select> with the 24 hours of the day
          for(var i = 8; i <= 19; i++) {
            var option = document.createElement('option');  
            var time = "";
            if(i<12){
                time = i+" am";
                
            }else if(i>12){
                time = (i-12) + " pm";
                
            }else{
                time = "12 pm";
                
            }
            option.textContent = time;
            option.value = i;
            hourSelect.appendChild(option);
          }
        }

        

        // when the month or year <select> values are changed, rerun populateDays()
        // in case the change affected the number of available days
        yearSelect.onchange = function() {
          populateDays(monthSelect.value);
        }

        monthSelect.onchange = function() {
          populateDays(monthSelect.value);
        }

        //preserve day selection
        var previousDay;

        // update what day has been set to previously
        // see end of populateDays() for usage
        daySelect.onchange = function() {
          previousDay = daySelect.value;
        }
</script>