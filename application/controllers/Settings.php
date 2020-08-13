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

        // data user
        $data['users'] = $this->ion_auth->select('first_name, id, username, last_name, email, active, phone')->users()->result_array();
        foreach ($data['users'] as $k => $user){
			$data['users'][$k]['groups'] = $this->ion_auth->get_users_groups($user['id'])->result_array();
        }
            
        // main data
        $data['menu']       = $this->menu;
        $data['user']       = $this->user;
        $data['page_title'] = $this->title['usermgmt'];
        $data['load_view']  = 'settings/usermgmt-settings.php';

        // additional and custom styles script
        $data['additional_styles'] = '';  // for plugins styles on php files
        $data['custom_styles']     = '';  // custom css files
        $data['custom_script']     = '';  // custom script with php files

        $this->load->view('backend/_backend_v', $data);
    }

    public function profile(){
        // load library form validation
        $this->load->library('form_validation');
        
        // set pengaturan form validation server side
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]', array(
            'required'  => 'Harap masukkan %s  sasd anda.',
            'min_length' => 'Seharusnya %s anda lebih dari 4 karakter'
        ));
        $this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[5]',array(
            'required' => 'Harap masukkan %s anda.',
            'min_length' => 'Seharusnya %s anda lebih dari 4 karakter'
        ));
        $this->form_validation->set_rules('last_name', 'Last Name', 'min_length[5]',array(
            'min_length' => 'Seharusnya %s anda lebih dari 4 karakter'
        ));
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email',array(
            'required' => 'Harap masukkan %s anda.',
            'valid_email' => 'Harap masukkan email dengan benar.'
        ));
        $this->form_validation->set_rules('current_password', 'Password', 'required|min_length[8]',array(
            'required' => 'Harap masukkan %s anda.',
            'min_length' => 'Seharusnya %s anda lebih dari 7 karakter'
        ));
        $this->form_validation->set_rules('change_password', 'New Password', 'min_length[8]',array(
            'min_length' => 'Seharusnya %s anda lebih dari 7 karakter'
        ));
        $this->form_validation->set_rules('retype_password', 'New Password', 'min_length[8]|matches[change_password]',array(
            'min_length' => 'Seharusnya %s anda lebih dari 7 karakter',
            'matches' => 'Password yang anda ketikkan ulang tidak sama, harap coba lagi.'
        ));
        // buka form_validation server side
        if($this->form_validation->run() == FALSE){
            // set pesan error
            // $this->session->set_userdata('notif_msg', array(
            //     'icon' => 'error',
            //     'msg' => 'validasi error',
            //     'other' => validation_errors()
            // ));

            // main data
            $data['menu']       = $this->menu;
            $data['user']       = $this->user;
            $data['page_title'] = $this->title['profil'];
            $data['load_view']  = 'settings/profile-settings';

            // additional and custom styles script
            $data['additional_styles'] = '';  // for plugins styles on files
            $data['custom_styles']     = '';  // custom css files
            $data['custom_script']     = array('plugins/jquery-validation/script-jquery-validation', 'settings/script-profile-settings');  // custom script with php files

            $this->load->view('backend/_backend_v', $data);
        } else {
            // jika berhasil cek password
            $my_password = $this->_general_m->getOnce('password', 'users', array('username' => $this->session->userdata('username')))['password'];

            // cek passwordnya
            if(password_verify($this->input->post('current_password'), $my_password)){
                // set pesan error
                $this->session->set_userdata('profile_msg', array(
                    'type' => 'success',
                    'title' => 'Berhasil disimpan',
                    'msg' => 'Perubahan anda berhasil disimpan.'
                ));

                // ambil semua data dari user
                $data_user = $this->_general_m->getOnce('username, password, email, first_name, last_name', 'users', array('username' => $this->session->userdata('username')));
                
                // cek satu per satu ada yang berubah
                // cek username apa sudah ada
                if($this->input->post('username') != $data_user['username']){ // cek apa username berubah
                    if (!$this->ion_auth->username_check($this->input->post('username'))){
                        $changed_data_user['username'] = $this->input->post('username');
                    } else {
                        // set pesan error
                        $this->session->set_userdata('profile_msg', array(
                            'type' => 'danger',
                            'title' => 'Username sudah ada',
                            'msg' => 'Username yang anda ketikkan sudah terdaftar, silakan pilih Email lain.'
                        ));

                        redirect('settings/profile');
                    }
                }
                // cek first name
                if($this->input->post('first_name') != $data_user['first_name']){
                    $changed_data_user['first_name'] = $this->input->post('first_name');
                }
                // cek last name
                if($this->input->post('last_name') != $data_user['last_name']){
                    $changed_data_user['last_name'] = $this->input->post('last_name');
                }
                // cek email
                if($this->input->post('email') != $data_user['email']){
                    if (!$this->ion_auth->email_check($this->input->post('email'))) {
                        $changed_data_user['email'] = $this->input->post('email');
                    } else {
                        // set pesan error
                        $this->session->set_userdata('profile_msg', array(
                            'type' => 'danger',
                            'title' => 'Email sudah ada',
                            'msg' => 'Email yang anda ketikkan sudah terdaftar, silakan pilih Email lain.'
                        ));

                        redirect('settings/profile');
                    }
                }

                // cek password apa diubah
                if(!empty($this->input->post('password'))){
                    $changed_data_user['password'] = password_hash($this->input->post('password'), PASSWORD_ARGON2I);
                }

                // update data ke database
                $this->_general_m->update('users', 'username', $this->session->userdata('username'), $changed_data_user);

                // ubah username di session
                $this->session->unset_userdata('username');
                $this->session->unset_userdata('identity');
                $this->session->set_userdata('username', $this->input->post('username'));
                $this->session->set_userdata('identity', $this->input->post('username'));

                redirect('settings/profile');
            } else {
                // set pesan error
                $this->session->set_userdata('profile_msg', array(
                    'type' => 'danger',
                    'title' => 'Password Salah',
                    'msg' => 'Password yang anda ketikkan salah, silakan coba lagi.'
                ));

                redirect('settings/profile');
            }
        }
    }

    /* -------------------------------------------------------------------------- */
    /*                               PROFILE METHODS                              */
    /* -------------------------------------------------------------------------- */

}

/* End of file Settings.php */
