<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori');
        
    }
    
    
    public function index()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'title2' => 'Kelola Kategori',
            'kategori' =>$this->m_kategori->list(),
            'isi' => 'Admin/v_kategori'
        );
        $this->load->view('Admin/layout/v_wrapper', $data, FALSE);
        
    }

    
    public function add()
    {
        $data = array('nama_kategori' => $this->input->post('nama_kategori'), 
                    'keterangan_kategori' => $this->input->post('keterangan_kategori'));
        $this->m_kategori->add($data);
        $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
        
        redirect('kategori');
    }

    public function edit($id_kategori)
    {
        $data = array('id_kategori'      => $id_kategori,
            'nama_kategori'          => $this->input->post('nama_lengkap'), 
            'keterangan_kategori'    => $this->input->post('username'));
        $this->m_kategori->edit($data);
        $this->session->set_flashdata('pesan','Data Berhasil Diubah');
        
        redirect('kategori');
    }
    
    
    public function delete($id_kategori)
    {
        $data = array('id_kategori' => $id_kategori);
        $this->m_kategori->delete($data);
        $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        
        redirect('kategori');
    }

}

/* End of file Pengguna.php */
