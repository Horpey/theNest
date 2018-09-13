<?php
    class My404 extends CI_Controller{
         public function __construct() 
         {
            parent::__construct(); 
         } 

         public function index() 
         { 
            $this->output->set_status_header('404'); 
            $this->load->view('templates/header');
            $this->load->view('templates/404');//loading in custom error view
            $this->load->view('templates/footer');
         } 
        } 
?>