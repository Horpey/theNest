<?php
    class About extends CI_Controller{
        public function index(){

            $this->load->view('templates/header');
            $this->load->view('templates/title');
            $this->load->view('pages/about');
            $this->load->view('templates/footer');
        }
    }
?>