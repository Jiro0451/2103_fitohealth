<?php
class Statistics extends CI_Controller{
    public function view() {
        //sessions are handled quite crudely. Should be handled in a centralized controller. My bad -Jerome
        $NRIC = $this->session->IC; //get the session NRIC
        if(!$this->user_model->user_exists_on_database($NRIC)){
            show_404();
        }       
        
        $data = $this->getUserData($NRIC);
                
        $this->load->view('templates/main/mainHeader');
        $this->load->view('pages/statistics', $data);
        $this->load->view('templates/login/footer');
    }

    function getUserData($NRIC) {
        $data['NRIC'] = $NRIC;
        $data['height'] = $this->getHeight($NRIC)*100;  //Height is shown to user in cm. -Jerome
        $data['weight'] = $this->getWeight($NRIC);
        $data['BMI'] = $this->getBMI($data['height']/100, $data['weight']);
        $data['analysis'] = $this->getAnalysis($data['BMI']);
        
        return $data;
    }
    
    function getHeight($NRIC) {
        return $this->user_model->getHeight($NRIC);
    }
    
    public function editHeight(){
        $this->user_model->updateHeight();
        redirect('statistics');
    }
    
    function getWeight($NRIC) {
        return $this->user_model->getWeight($NRIC);
    }
    
    public function editWeight(){
        $this->user_model->updateWeight();
        redirect('statistics');
    }
    
    function getBMI($height, $weight) {
        $BMI = $weight/($height*$height); 

        return $BMI;
    }
    
    function getAnalysis($BMI) {
        if ($BMI < 18.5) {
            return "Underweight";
        }
        else if ($BMI >= 18.5 && $BMI < 24.9) {
            return "Acceptable";
        }
        else if ($BMI >= 24.9 && $BMI < 29.9) {
            return "Overweight";
        }
        else {
            return "Obese";
        }
    }
}

