<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends _backend {

    public function index() {
        // main data
        $data['menu'] = $this->menu;
        // template
        $this->load->view('_main_v', $data);
    }

}

/* End of file Admin.php */
