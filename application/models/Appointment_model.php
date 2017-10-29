<?php

    class Appointment_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        
        public function getInstitution(){
            $query ="SELECT * FROM healthcareinstitution";
            $result = $this->db->query($query);
            return $result->result_array();
        }
        
        public function getDoctor($place){
            if($place!='defInstitution') {
                $query ="SELECT * FROM doctor_has_institution WHERE institutionid = '" .$place. "'";
                $results = $this->db->query($query);
                $resultArray = $results->result_array();
            ?>
                    <option value="defDoctor">Select Doctor</option>
            <?php
                    foreach($resultArray as $doctor) {
            ?>
                    <option value="<?php echo $doctor["doctorid"]; ?>"><?php echo $doctor["doctorname"]; ?></option>
            <?php
                    }
            }else{
                echo "<option value='defDoctor'>Select Doctor</option>";
            }
        }
        
        public function getReason($doctor){
            if($doctor!='defDoctor') {
                echo '<option value="defReason">Select Reason</option>';
                echo '<option value="consultation">Consultation</option>';
                echo '<option value="checkup">Checkup</option>';
    
            
            }else{
                echo "<option value='defReason'>Select Reason</option>";
            }
        }
        
        public function book(){
            
            $id = $this->session->IC;

            $year = $this->input->post('year');
            $month = $this->input->post('month');
            $day = $this->input->post('day');

            $hour = $this->input->post('hour');
            $slot = "$year"."-"."$month"."-"."$day"." "."$hour".":00:00";

            $docID = $this->input->post('doctor');
            $insID = $this->input->post('place');
            
            
            //Insert into book_appointment
            $query ="INSERT INTO book_appointment (nric,slot) VALUES('$id', '$slot')";
            if ($this->db->query($query) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $query . "<br>" . $this->db->error;
            }

            $query2 = "SELECT appointmentid FROM book_appointment WHERE nric = '$id' AND slot = '$slot'";
            $result = $this->db->query($query2);
            $apptID = $result->row()->appointmentid;

            $query3 ="INSERT INTO appointment VALUES('$apptID', '$id')";
            if ($this->db->query($query3) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $query3 . "<br>" . $this->db->error;
            }

            $query4 ="INSERT INTO appointment_details VALUES('$apptID', '$docID', '$insID')";
            if ($this->db->query($query4) === TRUE) {
                echo "New record created successfully";
                redirect("appointment");
            } else {
                echo "Error: " . $query4 . "<br>" . $this->db->error;
            }
                }
}
    
    
            
