<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends _backend {
    protected $title = array(
        'usermgmt' => 'User Management',
        'profil'   => 'Profil'
    );

    public function index()
    {
        
    }

    public function userMgmt() {
        // $this->load->model('ion_auth');

        //list the users
        // $data['users'] = $this->ion_auth->select('username, email, first_name, last_name, active, company, phone')->users()->result();

        // print_r(($data['users']));
        // exit;
            
        // main data
        $data['menu']       = $this->menu;
        $data['user']       = $this->user;
        $data['page_title'] = $this->title['usermgmt'];
        $data['load_view']  = 'settings/usermgmt-settings.php';

        // additional and custom styles script
        $data['additional_styles'] = '';  // for plugins styles on php files
        $data['custom_styles']     = '';  // custom css files
        $data['custom_script']     = '';  // custom script with php files

        $this->load->view('_main_v', $data);
    }

    public function profile(){
        // main data
        $data['menu']       = $this->menu;
        $data['user']       = $this->user;
        $data['page_title'] = $this->title['profil'];
        $data['load_view']  = 'settings/profile-settings.php';

        // additional and custom styles script
        $data['additional_styles'] = '';  // for plugins styles on php files
        $data['custom_styles']     = '';  // custom css files
        $data['custom_script']     = '';  // custom script with php files

        $this->load->view('_main_v', $data);
    }

    public function saveProfile(){
        // cek passwordnya

        // buka form_validation server side

        
    }

}

/* End of file Settings.php */
