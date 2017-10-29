<?php

	class Booking_model extends CI_model{
		public function __construct(){
            $this->load->database();
        }
		
		public function getBooking($NRIC){
				$query = "SELECT b.slot AS Timeslot, h.institutionname as Place, d.doctorname AS Doctor FROM book_appointment b, appointment_details a, doctor_has_institution d, healthcareinstitution h WHERE d.institutionid = h.institutionid AND d.doctorid=a.doctorid AND b.appointmentid = a.appointmentid AND b.nric = '.$NRIC.'";
				$results = $this->db->query($query);
                return $results->row_array();
		}	
	}