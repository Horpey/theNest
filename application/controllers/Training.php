<?php
    class Training extends CI_Controller{
        public function index(){

            $this->load->view('templates/header');
            $this->load->view('pages/training');
            $this->load->view('templates/footer');
        }

        public function single(){

            $this->load->view('templates/header');
            $this->load->view('pages/training/training-single');
            $this->load->view('templates/footer');
        }
    }
?>