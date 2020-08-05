<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends _backend {
    protected $title = array(
        'post' => 'Blog Post'
    );

    public function index()
    {
        // main data
        $data['menu'] = $this->menu;
        $data['user'] = $this->user;
        $data['page_title'] = $this->title['post'];
        $data['load_view'] = 'settings/usermgmt-settings.php';

        // additional and custom styles script
        $data['additional_styles'] = ''; // for plugins styles on php files
        $data['custom_styles'] = ''; // custom css files
        $data['custom_script'] = ''; // custom script with php files

        $this->load->view('backend/_backend_v', $data);
    }

}

/* End of file Post.php */
