<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_menu');
        
    }
    

    public function index()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'title2' => 'Kelola Menu',
            'menu' =>$this->m_menu->list(),
            'isi' => 'Admin/v_menu'
        );
        $this->load->view('Admin/layout/v_wrapper', $data, FALSE);
        
    }

    public function add()
    {
        $data = array('kategori_idkategori' => $this->input->post('kategori_idkategori'), 
                    'nama_menu' => $this->input->post('nama_menu'),
                    'harga_menu' => $this->input->post('harga_menu'));
        $this->m_menu->add($data);
        $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
        
        redirect('menu');
    }

    public function edit($id_menu)
    {
        $data = array('id_menu' => $id_menu,
                    'kategori_idkategori' => $this->input->post('kategori_idkategori'), 
                    'nama_menu' => $this->input->post('nama_menu'),
                    'harga_menu' => $this->input->post('harga_menu'));
        $this->m_menu->edit($data);
        $this->session->set_flashdata('pesan','Data Berhasil Diubah');
        
        redirect('menu');
    }
    
    
    public function delete($id_menu)
    {
        $data = array('id_menu' => $id_menu);
        $this->m_menu->delete($data);
        $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        
        redirect('menu');
    }

}

/* End of file Menu.php */
