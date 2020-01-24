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
            'title2' => 'Daftar Menu',
            'menu' =>$this->m_menu->list(),
            'isi' => 'Admin/menu/v_list'
        );
        $this->load->view('Admin/layout/v_wrapper', $data, FALSE);
        
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required');
        $this->form_validation->set_rules('keterangan_menu', 'Keterangan', 'required');
        $this->form_validation->set_rules('harga_menu', 'Harga', 'required');

        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './gambar_menu/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->upload->initialize($config);

                if (!$this->upload->do_upload('gambar_menu'))
                {
                    
                        $data = array(
                            'title'     => 'Halaman Admin',
                            'title2'    => 'Tambah Menu',
                            'error'     => $this->upload->display_errors(),
                            'isi'       => 'Admin/menu/v_add'
                        );
                        $this->load->view('Admin/layout/v_wrapper', $data, FALSE);
                        
                        
                    
                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './gambar_menu/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);
                    
                    $data = array(
                                'nama_menu'         => $this->input->post('nama_menu'),
                                'keterangan_menu'   => $this->input->post('keterangan_menu'),
                                'harga_menu'        => $this->input->post('harga_menu'),
                                'gambar_menu'       => $upload_data['uploads']['file_name']
                                );
                    $this->m_menu->add($data);
                    $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
                    redirect('menu');
                }
        }

        $data = array(
                    'title'     => 'Halaman Admin',
                    'title2'    => 'Tambah Menu',
                    'isi'       => 'Admin/menu/v_add'
                    );
        $this->load->view('Admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_menu)
    {
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required');
        $this->form_validation->set_rules('keterangan_menu', 'Keterangan', 'required');
        $this->form_validation->set_rules('harga_menu', 'Harga', 'required');

        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './gambar_menu/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->upload->initialize($config);

                if (!$this->upload->do_upload('gambar_menu'))
                {
                    
                    $data = array(
                                'title'     => 'Halaman Admin',
                                'title2'    => 'Edit Menu',
                                'error'     =>  $this->upload->display_errors(),
                                'menu'      =>  $this->m_menu->detail($id_menu),
                                'isi'       => 'Admin/menu/v_edit'
                                );
                    $this->load->view('Admin/layout/v_wrapper', $data, FALSE);
                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './gambar_menu/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);
                    
                    $data = array(
                                'id_menu'           => $id_menu,
                                'nama_menu'         => $this->input->post('nama_menu'),
                                'keterangan_menu'   => $this->input->post('keterangan_menu'),
                                'harga_menu'        => $this->input->post('harga_menu'),
                                'gambar_menu'       => $upload_data['uploads']['file_name']
                                );
                    $this->m_menu->edit($data);
                    $this->session->set_flashdata('pesan','Data Berhasil Diubah');
                    redirect('menu');
                }
                $upload_data                = array('uploads' => $this->upload->data());
                $config['image_library']    = 'gd2';
                $config['source_image']     = './gambar_menu/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                
                $data = array(
                            'id_menu'           => $id_menu,
                            'nama_menu'         => $this->input->post('nama_menu'),
                            'keterangan_menu'   => $this->input->post('keterangan_menu'),
                            'harga_menu'        => $this->input->post('harga_menu')
                            );
                $this->m_menu->edit($data);
                $this->session->set_flashdata('pesan','Data Berhasil Diubah');
                redirect('menu');
        }

        $data = array(
            'title'     => 'Halaman Admin',
            'title2'    => 'Edit Menu',
            'menu'      =>  $this->m_menu->detail($id_menu),
            'isi'       => 'Admin/menu/v_edit'
            );
        $this->load->view('Admin/layout/v_wrapper', $data, FALSE);
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
