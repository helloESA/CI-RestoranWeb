<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		
	}
	

	public function index()
	{
		$data = array(
			'title' => 'SecondKey Restaurant', 
			'title2' => 'Home', 
			'menu'  => $this->m_home->list(),
			'isi'   => 'Home_Front/v_home'
			
		);
		$this->load->view('Home_Front/layout/v_wrapper', $data, FALSE);
		
	}

	
    public function add()
    {
        $data = array('menu_idmenu' => $this->input->post('menu'), 
                    'jumlah_menu' => $this->input->post('jumlah'),
                    'nama_pemesan' => $this->input->post('nama_pemesan'));
        $this->m_home->add($data);
        $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
        redirect('home');
    }

}

/* End of fils Home.php */


