<?php
    class User_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
                
        public function create_user($enc_password){
            $data = array(
                'NRIC' => $this->input->post('inputNRIC'),
                'password' => $enc_password,
                'fName' => $this->input->post('inputName'),
                'lName' => $this->input->post('inputLastName'), 
                'email' => $this->input->post('inputEmail'),
                'address' => $this->input->post('inputAddress'),
                'height' => $this->input->post('inputHeight'),
                'weight' => $this->input->post('inputWeight'),
//                'h_condition' => $this->input->post('inputCondition'),
                'h_condition' => $this->input->post('inputCondition')
            );

            $query = "INSERT INTO users(NRIC, password, fName, lName, email, address, height, weight, h_condition)"
                    ." VALUES ('"
                    .$data['NRIC']."', '"
                    .$data['password']."', '"
                    .$data['fName']."', '"
                    .$data['lName']."', '"
                    .$data['email']."', '"
                    .$data['address']."', '"
                    .($data['height']/100)."', '"   //User's are asked to give height in cm. - Jerome
                    .$data['weight']."', '"
                    .$data['h_condition']
                    ."')";
            
            return $this->db->query($query);
            
            //CI query variant
            //return $this->db->insert('users', $data); 
        }
        
        public function getUser($NRIC) {
            $query = "SELECT * FROM users WHERE NRIC = '".$NRIC."'";
            $result = $this->db->query($query); 
            return $result->row_array();
            
            //CI query variant
            //$query = $this->db->get_where('users',array("NRIC =" => $NRIC));
            //return $query->row_array();
        }
        
        public function edit_user(){
            $data = array(
                'fName' => $this->input->post('inputName'),
                'lName' => $this->input->post('inputLastName'), 
                'email' => $this->input->post('inputEmail'),
                'address' => $this->input->post('inputAddress'),
                'h_condition' => $this->input->post('inputCondition')
            );
            
            $NRIC = $this->input->post('NRIC');
            $query = "UPDATE users SET "
                    ."fName = '".$data['fName']."', "
                    ."lName = '".$data['lName']."', "
                    ."email = '".$data['email']."', "
                    ."address = '".$data['address']."', "
                    ."h_condition = '".$data['h_condition']."'"
                    ." WHERE NRIC = '".$NRIC."'";
            
            return $this->db->query($query);
            
            //CI query variant
            //$this->db->where('NRIC', $this->input->post('NRIC'));
            //return $this->db->update('users', $data);
        }
        
        //gets height -Jerome
        public function getHeight($NRIC) {
            $query = "SELECT height FROM users WHERE NRIC = '".$NRIC."'";
            $result = $this->db->query($query);
            
            return $result->row()->height;
        }
        
        public function updateHeight() {
            $data = array('height' => $this->input->post('newHeight'));
            
            $NRIC = $this->input->post('NRIC');
            $query = "UPDATE users SET "
                ."height = ".$data['height']/100    //User's are asked to give height in cm. - Jerome
                ." WHERE NRIC = '".$NRIC."'";
                        
            return $this->db->query($query);

            //CI query variant
            //$this->db->where('NRIC', $this->input->post('NRIC'));
            //return $this->db->update('users', $data);
        }
        
        //gets weight -Jerome
        public function getWeight($NRIC) {
            $query = "SELECT weight FROM users WHERE NRIC = '".$NRIC."'";
            $result = $this->db->query($query);
            
            return $result->row()->weight;
        }
        
        public function updateWeight(){
            $data = array('weight' => $this->input->post('newWeight'));
                        
            $NRIC = $this->input->post('NRIC');
            $query = "UPDATE users SET "
                ."weight = ".$data['weight']
                ." WHERE NRIC = '".$NRIC."'";
                        
            return $this->db->query($query);

            //CI query variant
            //$this->db->where('NRIC', $this->input->post('NRIC'));
            //return $this->db->update('users', $data);
        }
        
        public function edit_Pass() {
            //encryption should be handled in a controller
            $data = array('password' => $this->input->post('newPassword'));
            $enc_password = md5($data['password']);
            
            $NRIC = $this->input->post('NRIC');
            $query = "UPDATE users SET "
                ."password = '".$enc_password
                ."' WHERE NRIC = '".$NRIC."'";
                        
            return $this->db->query($query);

            //CI query variant
            //$this->db->where('NRIC', $this->input->post('NRIC'));
            //return $this->db->update('users', $data);
        }
        
        //Login Verification -Jerome
        public function verification($NRIC, $Password) {
            if ($this->user_exists_on_database($NRIC)) {
                $query = "SELECT 1 FROM users "
                        ."WHERE NRIC = '$NRIC' "
                        ."AND password = '$Password'";
                
                $result = $this->db->query($query);
                if ($result->result()) {
                    return TRUE;
                }
            }
            return FALSE;
        }
        
        //Checks if NRIC exists on database. -Jerome
        public function user_exists_on_database($NRIC) {
            $query = "SELECT 1 FROM users WHERE NRIC = '$NRIC'";
            $data = $this->db->query($query);
            
            return $data->result();
        }
    }