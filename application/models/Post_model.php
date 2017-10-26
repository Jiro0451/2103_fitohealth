<?php
    class Post_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        
        public function get_posts($slug = FALSE){
            if($slug === FALSE){
                $query = $this->db->get('posts');
                return $query->result_array();
            }
            
            $query = $this->db->get_where('posts', array('slug' => $slug));
            return $query->row_array();
        }
        
        public function create_user(){
            $data = array(
                'NRIC' => $this->input->post('inputNRIC'),
                'password' => $this->input->post('inputPassword'),
                'fName' => $this->input->post('inputName'),
                'lname' => $this->input->post('inputLastName'), 
                'email' => $this->input->post('inputEmail'),
                'address' => $this->input->post('inputAddress'),
                'height' => $this->input->post('inputHeight'),
                'weight' => $this->input->post('inputWeight'),
                'h_condition' => $this->input->post('inputCondition'),
            );
            
            return $this->db->insert('users', $data);
        }
        
        public function getUser($NRIC){
            $query = $this->db->get_where('users',array('NRIC' == $NRIC));
            return $query->row_array();
        }
    }