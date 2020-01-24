<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


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

			'isi'   => 'Home_Front/v_home'

		);
		$this->load->view('Home_Front/layout/v_wrapper', $data, FALSE);
	}


	public function menu_tampil()
	{
		$data = array(
			'title' => 'SecondKey Restaurant',
			'title2' => 'Menu',
			'menu' => $this->m_home->list(),
			'isi'   => 'Home_Front/v_menu'

		);
		$this->load->view('Home_Front/layout/v_wrapper', $data, FALSE);
	}
}

/* End of fils Home.php */
