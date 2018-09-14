<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function index($page = 'home')
	{
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
        }

        $data['title'] = ucfirst($page);

		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);

		$this->load->view('templates/footer');
	}
	public function contactUpload(){
		// Load Form Validation
        $this->load->library("form_validation");
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('emailAddress', 'email', 'required');
        $this->form_validation->set_rules('message', 'message', 'required');

        // Conditional 
        if ($this->form_validation->run()){
        	// Load Model
        	$this->load->model("contactUs");
        	$data = array("name" => $this->input->post("name"),
        				"emailAddress" => $this->input->post("emailAddress"),
        				"message" => $this->input->post("message"));
        	$this->contactUs->insert_data($data);
        	redirect(base_url()."pages/inserted");
        }else{
        	$this->index();
        }
	}

	public function inserted(){
		// Display message
		$this->index();
	}
}
