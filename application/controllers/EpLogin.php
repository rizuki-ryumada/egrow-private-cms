<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EpLogin extends CI_Controller {
    
    public $data = array();
    protected $title = array(
        'login' => 'Login'
    );

    public function __construct()
    {
        parent::__construct();

        // load library
        $this->load->library(['ion_auth', 'session', 'form_validation']);
        // $this->load->helper(['form']);

        // load model
        $this->load->model('_general_m');

        // Ion Auth
		// $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
        $this->lang->load('auth');

        // login checker
        if($this->ion_auth->logged_in()){ // cek apa user sudah login
            redirect('admin');
        }
    }

    public function index() {
        // set pengaturan form validation server side
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]', array(
            'required'  => 'Harap masukkan %s anda.',
            'min_length' => 'Seharusnya %s anda lebih dari 4 karakter'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',array(
            'required' => 'Harap masukkan %s anda.',
            'min_length' => 'Seharusnya %s anda lebih dari 7 karakter'
        ));

        if($this->form_validation->run() == FALSE){ // tampilkan halaman login
            // main data
            $data['custom_login'] = array('login_styles');
            $data['page_title'] = $this->title['login'];

            $this->load->view('backend/login_v', $data);
        } else {
            $this->logmein();
        }
    }

    public function logmein(){
        $identity = $this->input->post('username');
        $password = $this->input->post('password');
        $remember = filter_var($this->input->post('remember'), FILTER_VALIDATE_BOOLEAN); // remember the user convert to boolean using filter var

        if($this->ion_auth->is_max_login_attempts_exceeded($identity)){ // cek percobaan login
            $this->session->set_flashdata('msg', 'Anda sudah melebihi batas percobaan login, harap tunggu beberapa saat sebelum melakukan percobaan login lagi.');
            redirect('epLogin');
        }

        // proses cek login
        if($this->ion_auth->login($identity, $password, $remember)){
            redirect('admin'); // jika berhasil arahkan ke halaman admin
        } else {
            // cek username apa tersedia
            if (!$this->ion_auth->username_check($identity)){
                $this->session->set_flashdata('msg', 'Akun dengan username '.$identity.' tidak ditemukan.');
                redirect('epLogin');
            } else { // jika username ada salahkan passwordnya
                $this->session->set_flashdata('msg', 'Password anda salah.');
                redirect('epLogin');
            }
        }

    }

    // public function logmein(){
    //     $user = $this->_general_m->getOnce('username, password', 'user', array('username' => $this->input->post('nama_pengguna')));

    //     // cek jika tidak ada username
    //     if(empty($user)){
    //         // siapkan pesan error pakai alert
    //         // $this->session->set_flashdata(
    //         //     'msg',
    //         //     '<div class="alert alert-danger alert-dismissible">
    //         //         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    //         //         <h5><i class="icon fas fa-ban"></i> Tidak ditemukan!</h5>
    //         //         Maaf, akun dengan nama pengguna '. $this->input->post('nama_pengguna').' tidak ditemukan, 
    //         //         silakan hubungi web admin untuk info lebih lanjut.
    //         //     </div>'
    //         // );
    //         $this->session->set_flashdata(
    //             'msg',
    //             array(
    //                 'icon' => 'error',
    //                 'title' => 'Tidak ditemukan',
    //                 'msg' => 'Maaf, akun dengan nama pengguna '. $this->input->post('nama_pengguna').' tidak ditemukan, silakan hubungi web admin untuk info lebih lanjut.'
    //             )
    //         );

    //         redirect('epLogin');
    //     }

    //     if(!password_verify($this->input->post('sandi'), $user['password'])){
    //         // siapkan pesan error pakai alert
    //         // $this->session->set_flashdata(
    //         //     'msg',
    //         //     '<div class="alert alert-danger alert-dismissible">
    //         //         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    //         //         <h5><i class="icon fas fa-ban"></i> Kata Sandi salah !</h5>
    //         //         Kata sandi untuk akun '. $this->input->post('nama_pengguna').' salah, silakan coba lagi 
    //         //         atau hubungi web admin.
    //         //     </div>'
    //         // );

    //         $this->session->set_flashdata(
    //             'msg',
    //             array(
    //                 'icon' => 'error',
    //                 'title' => 'Kata Sandi salah',
    //                 'msg' => 'Kata sandi untuk akun '. $this->input->post('nama_pengguna').' salah, silakan coba lagi atau hubungi web admin.'
    //             )
    //         );

    //         redirect('epLogin');
    //     }
    // }



    // public function testHash() {
    //     $password_string = 'qwertyuiop';
    //     $password = password_hash($password_string, PASSWORD_ARGON2I);

    //     print_r($password);

    //     echo"<br/>";
    //     echo"<br/>";
    //     if(password_verify($password_string, $password)){
    //         echo"password is valid";
    //     } else {
    //         echo"password is invalid";
    //     }
    // }

}

/* End of file EpLogin.php */
