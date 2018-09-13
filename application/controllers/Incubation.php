<?php
    class Incubation extends CI_Controller{
        public function index(){

            $this->load->view('templates/header');
            $this->load->view('pages/incubation');
            $this->load->view('templates/footer');
        }
    }
?>