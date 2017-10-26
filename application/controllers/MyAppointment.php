<?php
class MyAppointment extends CI_Controller{
    public function view() {
        //sessions are handled quite crudely. Should be handled in a centralized controller. My bad -Jerome
        $NRIC = $this->session->IC; //get the session NRIC
        if(!$this->user_model->user_exists_on_database($NRIC)){
            show_404();
        }       
        
        $data = $this->getUserData($NRIC);
                
        $this->load->view('templates/main/mainHeader');
        $this->load->view('pages/myappointment', $data);
        $this->load->view('templates/login/footer');
    }

    function getUserData($NRIC) {
        $data['NRIC'] = $NRIC;
        $data['datetime'] = $this->getHeight($NRIC);  
        $data['venue'] = $this->getPlaces($NRIC);
        $data['doctor'] = $this->getDoctor($NRIC);
        $data['reasons'] = $this->getReason($NRIC);
        
        return $data;
    }
    
    
}

