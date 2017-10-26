<?php

class Edit extends CI_Controller {
            public function view()
            {
                $this->load->view('/templates/main/mainHeader');
                $this->load->view('/pages/edit');
                $this->load->view('/templates/login/footer');
            }
            
            public function update(){
                //Firstname validation rules/messages
                $this->form_validation->set_rules(
                'inputName', 'Firstname',
                'required|alpha',
                array(
                    'required' => 'Firstname is required',
                    'alpha' => 'Alphabets only'
                    )
                );
                
                //Lastname validation rules/messages
                $this->form_validation->set_rules(
                'inputLastName', 'Lastname',
                'required|alpha',
                array(
                    'required' => 'Lastname is required',
                    'alpha' => 'Alphabets only'
                    )
                );
                
                //Email validation rules/messages
                $this->form_validation->set_rules(
                'inputEmail', 'Email',
                'required|regex_match[/([\w+-]+)(\.[\w+-]+)*@([a-zA-Z\d-]+\.)+[a-zA-Z]{2,6}/]',
                array(
                    'required' => 'Email is required',
                    'regex_match' => 'Invalid Email'
                    )
                );
                
                //Address validation rules/messages
                $this->form_validation->set_rules(
                'inputAddress', 'Address',
                'required',
                array(
                    'required' => 'Address is required'
                    )
                );
                
                if($this->form_validation->run()){
                    $this->user_model->edit_user();
                    redirect('profile');  
                }else{
                    $this->load->view('/templates/main/mainHeader');
                    $this->load->view('/pages/edit');
                    $this->load->view('/templates/login/footer');
                }
                
                
            }
            
            public function updatePass(){
                $this->user_model->edit_Pass();
                redirect('profile');
            }    
    }
