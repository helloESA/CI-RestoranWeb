<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'title2' => 'Beranda',
            'isi' => 'Admin/v_home'
        );
        $this->load->view('Admin/layout/v_wrapper', $data, FALSE);
        
    }

}

/* End of file Controllername.php */
