<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends _backend {
    protected $title = array(
        'admin' => 'Admin'
    );

    public function index() {
        // main data
        $data['menu']       = $this->menu;
        $data['user']       = $this->user;
        $data['page_title'] = $this->title['admin'];
        $data['load_view']  = 'admin/index-admin.php';

        // additional and custom styles script
        $data['additional_styles'] = '';  // for plugins styles on php files
        $data['custom_styles']     = '';  // custom css files
        $data['custom_script']     = '';  // custom script with php files

        // template
        $this->load->view('backend/_backend_v', $data);
    }

}

/* End of file Admin.php */
