<?php
    class Login extends CI_Controller {
            public function view() {
                $this->load->view('/templates/login/header');
                $this->load->view('/pages/login');
                $this->load->view('/templates/login/footer');
            }
            
            public function attempt() {
                $NRIC = $this->input->post('NRIC');
                $Password = md5($this->input->post('inputPassword'));
                
                //NRIC validation rules/messages
                $this->form_validation->set_rules(
                'NRIC', 'NRIC',
                'required|callback_exists_in_database');

                if($this->form_validation->run()){
                    if ($this->user_model->verification($NRIC, $Password)) {
                        $sessionIC = array('IC' => $NRIC);
                        $this->session->set_userdata($sessionIC);
                        redirect('home');
                    
                        return;
                    }
                }
                
                $this->load->view('/templates/login/header');
                $this->load->view('/pages/login');
                $this->load->view('/templates/login/footer');
            }
            
            public function exists_in_database(){
                $NRIC = $this->input->post('NRIC');
                $PASS = $this->input->post('inputPassword');
                
                //Now handled in user_model - Jerome
                //$SQL = "SELECT * FROM users WHERE NRIC = '$NRIC'";
                //$query = $this->db->query($SQL);
                //$count = $query->num_rows();
                //if($count == 0){
                
                if(!$this->user_model->user_exists_on_database($NRIC)){    
                    $this->form_validation->set_message('exists_in_database', 'Please enter a valid NRIC and password');
                    return FALSE;
                }else{
                    return TRUE;
                }
            }
            
            
    }
