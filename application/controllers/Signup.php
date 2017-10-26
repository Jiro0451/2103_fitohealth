<?php
    class Signup extends CI_Controller {
            public function view()
            {
                $this->load->view('/templates/login/header');
                $this->load->view('/pages/signup');
                $this->load->view('/templates/login/footer');
            }
            
            public function create(){
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
                
                //NRIC validation rules/messages
                $this->form_validation->set_rules(
                    'inputNRIC', 'NRIC',
                    'required|callback_exists_in_database');
                
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

                //Height validation rules/messages
                $this->form_validation->set_rules(
                    'inputHeight', 'Height',
                    'required|numeric',
                    array(
                        'required' => 'Height is required',
                        'numeric' => 'Numbers only'
                        )
                    );
            
                //Weight validation rules/messages
                $this->form_validation->set_rules(
                    'inputWeight', 'Weight',
                    'required|numeric',
                    array(
                        'required' => 'Weight is required',
                        'numeric' => 'Numbers only'
                        )
                    );
                
                //Password validation rules/messages
                $this->form_validation->set_rules(
                    'inputPassword', 'Password',
                    'required|min_length[8]',
                    array(
                        'required' => 'Password is required',
                        'min_length' => 'Password needs at least 8 characters'
                        )
                    );
                //Confirm Password validation rules/messages
                $this->form_validation->set_rules(
                    'inputPassword2', 'Confirm Password',
                    'required|matches[inputPassword]',
                    array(
                        'required' => 'Please confirm password',
                        'matches[password]' => 'Incorrect password'
                        )
                    );
                
                if ($this->form_validation->run()) {
                    $enc_password = md5($this->input->post('inputPassword'));
                    $this->user_model->create_user($enc_password);
                    redirect('login');            

                }
                else {
                    $this->load->view('/templates/login/header');
                    $this->load->view('/pages/signup');
                    $this->load->view('/templates/login/footer');
                }
                
                
            }
            
            public function exists_in_database(){
                if ($this->user_model->user_exists_on_database($this->input->post('inputNRIC'))) {
                    $this->form_validation->set_message('exists_in_database', 'This NRIC already has an account');
                    return FALSE;
                }
                else {
                    return TRUE;

                }
                
                //Should be handled in a model
//                $NRIC = $this->input->post('inputNRIC');
//                $SQL = "SELECT * FROM users WHERE NRIC = '$NRIC'"; 
//                $query = $this->db->query($SQL);
//                $count = $query->num_rows();
//                
//                
//                if($count != 0){
//                    $this->form_validation->set_message('exists_in_database', 'This NRIC already has an account');
//                    return FALSE;
//                }else{
//                    return TRUE;
//                }
                            }
    }
