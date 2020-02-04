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

	public function addtocart($id_menu)
	{
		$menu = $this->m_home->find($id_menu);
		

		$data = array(
			'menu_idmenu'     	=> $menu->id_menu,
			'jumlah_menu'   	=> 1
		);

		$this->cart->insert($data);
		redirect('home/menu_tampil');
	}


	public function listpesanan()
	{
		$data = array(
			'title' => 'SecondKey Restaurant',
			'title2' => 'Pesanan',
			'pesanan' => $this->m_home->listpesan(),
			'isi'   => 'Home_Front/v_listpesanan'

		);
		$this->load->view('Home_Front/layout/v_wrapper', $data, FALSE);
	}

	public function pesan($id_menu)
	{
		$this->db->query("insert into pemesanan(menu_idmenu,jumlah_menu) values ($id_menu,1)");
		redirect('home/menu_tampil');
	}
}

/* End of fils Home.php */
