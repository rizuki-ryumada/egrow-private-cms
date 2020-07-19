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
    // Global Variables
    protected $menu = array();
    protected $user = array();

    public function __construct(){
        parent::__construct();

        // load library
        $this->load->library(['session', 'ion_auth']);

        // load model
        $this->load->model('_general_m');

        // Login Checker
        if(!$this->ion_auth->logged_in()){
            redirect('epLogin');
        }

        $this->menu = $this->getMenu(); // Get Menu
        $this->user = $this->getUserDetail(); // get detail user
    }

    function getMenu() {
        return $this->_general_m->getAll('*', 'user_menu', array());
    }

    function getUserDetail() {
        return $this->ion_auth->
        select('username, email, first_name, last_name, active, company, phone')->
        where(array('username' => $this->session->userdata('username')))->
        users()->row_array();
    }
}

/* End of file _backend.php */
