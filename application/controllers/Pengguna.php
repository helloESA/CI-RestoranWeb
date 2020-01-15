<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengguna');
        
    }
    
    
    public function index()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'title2' => 'Kelola Pengguna',
            'pengguna' =>$this->m_pengguna->list(),
            'isi' => 'Admin/v_pengguna'
        );
        $this->load->view('Admin/layout/v_wrapper', $data, FALSE);
        
    }

    
    public function add()
    {
        $data = array('nama_lengkap' => $this->input->post('nama_lengkap'), 
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'level' => $this->input->post('level'),
                    'alamat' => $this->input->post('alamat'),
                    'no_telepon' => $this->input->post('no_telepon')
                );
        $this->m_pengguna->add($data);
        $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
        
        redirect('pengguna');
    }

    public function edit($id_pengguna)
    {
        $data = array('id_user' => $id_pengguna,
            'nama_lengkap'      => $this->input->post('nama_lengkap'), 
            'username'          => $this->input->post('username'),
            'password'          => $this->input->post('password'),
            'level'             => $this->input->post('level'),
            'alamat'            => $this->input->post('alamat'),
            'no_telepon'        => $this->input->post('no_telepon'));
        $this->m_pengguna->edit($data);
        $this->session->set_flashdata('pesan','Data Berhasil Diubah');
        
        redirect('pengguna');
    }
    
    
    public function delete($id_pengguna)
    {
        $data = array('id_user' => $id_pengguna);
        $this->m_pengguna->delete($data);
        $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        
        redirect('pengguna');
    }

}

/* End of file Pengguna.php */
