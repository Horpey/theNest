<?php
    class User extends CI_Controller{
        public function index(){

            $this->load->view('templates/header');
            $this->load->view('user/signup');
            $this->load->view('templates/footer');
        }

        public function login(){

            $this->load->view('templates/header');
            $this->load->view('user/login');
            $this->load->view('templates/footer');
        }
    }
?>