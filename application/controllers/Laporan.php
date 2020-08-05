<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends _backend {
    protected $title = array(
        'laporan' => 'Laporan Pengajaran'
    );

    public function index()
    {
        // main data
        $data['menu'] = $this->menu;
        $data['user'] = $this->user;
        $data['page_title'] = $this->title['laporan'];
        $data['load_view'] = 'settings/usermgmt-settings.php';

        echo(json_encode($data['user']));
        exit;

        // additional and custom styles script
        $data['additional_styles'] = ''; // for plugins styles on php files
        $data['custom_styles'] = ''; // custom css files
        $data['custom_script'] = ''; // custom script with php files

        $this->load->view('backend/_backend_v', $data);
    }

}

/* End of file Laporan.php */