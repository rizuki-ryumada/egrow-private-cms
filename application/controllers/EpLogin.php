<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EpLogin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();

        // load library
        $this->load->library('session');

        // load model
        $this->load->model('_general_m');

        // login checker
        // if($this->session->userdata('user')){ // cek apa user sudah login
        //     redirect('admin');
        // }
    }
    

    public function index() {
        // login checker
        if($this->session->userdata('nama_pengguna')){ // cek apa user sudah login
            redirect('admin');
        }

        $this->load->view('backend/login_v');
    }

    public function logmein(){
        $user = $this->_general_m->getOnce('username, password', 'user', array('username' => $this->input->post('nama_pengguna')));

        // cek jika tidak ada username
        if(empty($user)){
            // siapkan pesan error pakai alert
            // $this->session->set_flashdata(
            //     'msg',
            //     '<div class="alert alert-danger alert-dismissible">
            //         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            //         <h5><i class="icon fas fa-ban"></i> Tidak ditemukan!</h5>
            //         Maaf, akun dengan nama pengguna '. $this->input->post('nama_pengguna').' tidak ditemukan, 
            //         silakan hubungi web admin untuk info lebih lanjut.
            //     </div>'
            // );
            $this->session->set_flashdata(
                'msg',
                array(
                    'icon' => 'error',
                    'title' => 'Tidak ditemukan',
                    'msg' => 'Maaf, akun dengan nama pengguna '. $this->input->post('nama_pengguna').' tidak ditemukan, silakan hubungi web admin untuk info lebih lanjut.'
                )
            );

            redirect('epLogin');
        }

        if(!password_verify($this->input->post('sandi'), $user['password'])){
            // siapkan pesan error pakai alert
            // $this->session->set_flashdata(
            //     'msg',
            //     '<div class="alert alert-danger alert-dismissible">
            //         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            //         <h5><i class="icon fas fa-ban"></i> Kata Sandi salah !</h5>
            //         Kata sandi untuk akun '. $this->input->post('nama_pengguna').' salah, silakan coba lagi 
            //         atau hubungi web admin.
            //     </div>'
            // );

            $this->session->set_flashdata(
                'msg',
                array(
                    'icon' => 'error',
                    'title' => 'Kata Sandi salah',
                    'msg' => 'Kata sandi untuk akun '. $this->input->post('nama_pengguna').' salah, silakan coba lagi atau hubungi web admin.'
                )
            );

            redirect('epLogin');
        }
    }



    public function testHash() {
        $password_string = 'qwerty';
        $password = password_hash($password_string, PASSWORD_ARGON2I);

        print_r($password);

        echo"<br/>";
        echo"<br/>";
        if(password_verify($password_string, $password)){
            echo"password is valid";
        } else {
            echo"password is invalid";
        }
    }

}

/* End of file EpLogin.php */
