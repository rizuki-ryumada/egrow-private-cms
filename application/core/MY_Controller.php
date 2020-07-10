<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Sub Class Controller
class MY_Controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // Your own constructor code
    }
}

// backend controller
class _backend extends MY_Controller {
    public function __construct(){
        parent::__construct();

        // load library
        $this->load->library('session');

        // load model
        $this->load->model('_general_m');

        // other function
        $this->is_logged();
    }

    public function is_logged(){
        if(!$this->session->userdata('user')){ // cek apa user sudah login
            redirect('epLogin');
        }
    }
}

/* End of file _backend.php */
