<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pemesanan');
        
    }

    public function index()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'title2' => 'Pemesanan',
            'pesanan' =>$this->m_pemesanan->list(),
            'isi' => 'Admin/v_pesanan'
        );
        $this->load->view('Admin/layout/v_wrapper', $data, FALSE);
    }

    // public function add()
    // {
    //     $data = array('id_pesanan' => $this->input->post('id_pesanan'), 
    //                 'total' => $this->input->post('total'),
    //                 'bayar' => $this->input->post('bayar'),
    //                 'bayar' => $this->input->post('bayar'),
    //                 'harga_menu' => $this->input->post('harga_menu'));
    //     $this->m_menu->add($data);
    //     $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
        
    //     redirect('menu');
    // }

    public function delete($id_pemesanan)
    {
        $data = array('id_pemesanan' => $id_pemesanan);
        $this->m_pemesanan->delete($data);
        $this->session->set_flashdata('pesan','Pesanan Berhasil Diproses');
        
        redirect('pesanan');
    }

}

/* End of file Pemesanan.php */
