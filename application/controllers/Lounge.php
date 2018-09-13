<?php
    class Lounge extends CI_Controller{
        public function index(){

            $this->load->view('templates/header');
            $this->load->view('pages/lounge');
            $this->load->view('templates/footer');
        }
    }
?>