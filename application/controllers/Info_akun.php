<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Info_akun extends CI_Controller {

    
    

    public function index()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'title2' => 'Info Akun',
            // 'info'  => $this->m_infoakun->list($id_pengguna),
            'isi' => 'Admin/v_infoakun'
        );
        $this->load->view('Admin/layout/v_wrapper', $data, FALSE);
        
    }



}

/* End of file Controllername.php */
