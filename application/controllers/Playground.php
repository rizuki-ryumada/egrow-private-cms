<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Playground extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    

    public function index()
    {
        // $this->form_validation->set_rules('fieldname', 'fieldlabel', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => 'Harap isi %s anda.'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => 'Harap isi %s anda.'
        ));
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required', array(
            'required' => 'Harap isi %s anda.'
        ));
        $this->form_validation->set_rules('email', 'Email', 'required', array(
            'required' => 'Harap isi %s anda.'
        ));

        if($this->form_validation->run() === FALSE){
            $this->load->view('playground/playground_v');
        } else {
            $this->load->view('playground/success_login');
        }
    }

    public function submit(){
        

        if($this->form_validation->run() == FALSE){
           redirect('playground');
        } else {
            $this->load->view('playground/success_login');
        }
    }

}

/* End of file Playground.php */
