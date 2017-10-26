<?php
    class Appointment extends CI_Controller {
        public function view() {
            //sessions are handled quite crudely. Should be handled in a centralized controller. My bad -Jerome
            $NRIC = $this->session->IC; //get the session NRIC
            if(!$this->user_model->user_exists_on_database($NRIC)){
                show_404();
            }       

            $data['places'] = $this->getPlaces();

            $this->load->view('templates/main/mainHeader');
            $this->load->view('pages/onlineappt', $data);
            $this->load->view('templates/login/footer');
        }
        
        public function getPlaces(){
            return $this->appointment_model->getInstitution();
        }
        
        public function getDoctor(){
            $place = $this->input->post('place_id');
            $this->appointment_model->getDoctor($place);
        }
        
        public function getReason(){
            $doctor = $this->input->post('doctor_id');
            $this->appointment_model->getReason($doctor);
        }
        
        public function book_appointment() {
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_rules('place', 'Place','callback_validateInstitution');
            $this->form_validation->set_rules('doctor', 'Doctor','callback_validateDoctor');
            
            if($this->form_validation->run()){
                $this->appointment_model->book();
            }else{
                $data['places'] = $this->getPlaces();

                $this->load->view('templates/main/mainHeader');
                $this->load->view('pages/onlineappt', $data);
                $this->load->view('templates/login/footer');
            }
            
        }
        
        public function validateInstitution(){
            $place = $this->input->post('place');
            
            if($place=='defInstitution'){
                $this->form_validation->set_message('validateInstitution','*Please select an institution');
                return FALSE;
            }else{
                return TRUE;
            }
        }
        
        public function validateDoctor(){
            $doctor = $this->input->post('doctor');
            
            if($doctor=='defDoctor'){
                $this->form_validation->set_message('validateDoctor','*Please select a doctor');
                return FALSE;
            }else{
                return TRUE;
            }
        }
        
    }