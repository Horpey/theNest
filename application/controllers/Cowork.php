<?php
    class Cowork extends CI_Controller{
        public function index(){

            $this->load->view('templates/header');
            $this->load->view('pages/cowork');
            $this->load->view('templates/footer');
        }

        public function single(){
            $this->load->view('templates/header');
            $this->load->view('pages/cowork/cowork-single');
            $this->load->view('templates/footer');
        }
    }
?>