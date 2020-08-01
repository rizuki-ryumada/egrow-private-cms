<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar extends _backend {
    protected $title = array(
        'Pengajar' => 'Data Pengajar'
    );

    public function index()
    {
        // main data
        $data['menu'] = $this->menu;
        $data['user'] = $this->user;
        $data['page_title'] = $this->title['Pengajar'];
        $data['load_view'] = 'settings/usermgmt-settings.php';

        // additional and custom styles script
        $data['additional_styles'] = ''; // for plugins styles on php files
        $data['custom_styles'] = ''; // custom css files
        $data['custom_script'] = ''; // custom script with php files

        $this->load->view('_main_v', $data);
    }

}

/* End of file Pengajar.php */
