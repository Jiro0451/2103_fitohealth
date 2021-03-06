<?php
    class Pages extends CI_Controller {
        public function view($page = 'home') {
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }
            $NRIC = $this->session->IC; //get the session NRIC
            $data['user'] = $this->user_model->getUser($NRIC);
            
            if(empty($data['user'])){
                        show_404();
                    }
            
            $this->load->view('templates/main/mainHeader');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/login/footer');
        }
    }
