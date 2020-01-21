<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_login');
        
    }

    public function login($username, $password)
    {
        $cek = $this->ci->m_login->login($username,$password);
        if ($cek) {
            $username = $cek->username;
            $password = $cek->password;
            $nama_lengkap = $cek->nama_lengkap;
            $level = $cek->level;
            $alamat = $cek->alamat;
            $no_telepon = $cek->no_telepon;

            //buat Session
            $this->ci->session->set_userdata('username',$username);
            $this->ci->session->set_userdata('password',$password);
            $this->ci->session->set_userdata('nama_lengkap',$nama_lengkap);
            $this->ci->session->set_userdata('level',$level);
            $this->ci->session->set_userdata('alamat',$alamat);
            $this->ci->session->set_userdata('no_telepon',$no_telepon);
            redirect('admin');

        } else{
            $this->ci->session->set_flashdata('danger','Username/Password Salah');
            redirect('login');
        }
    }

    public function proteksi_web()
    {
        if ($this->ci->session->userdata('username')==""){
            $this->ci->session->set_flashdata('danger','Anda Belum Login');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('password');
        $this->ci->session->unset_userdata('nama_lengkap');
        $this->ci->session->unset_userdata('level');
        $this->ci->session->unset_userdata('alamat');
        $this->ci->session->unset_userdata('no_telepon');

        $this->ci->session->set_flashdata('pesan','Anda Berhasil Logout');
            redirect('login');
        
    }
}

/* End of file User_login.php */
