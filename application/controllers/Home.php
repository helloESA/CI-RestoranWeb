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
	public function listpesanan()
	{
		$data = array(
			'title' => 'SecondKey Restaurant',
			'title2' => 'Pesanan',
			'pesanan' => $this->db->query("select t2.*,t1.jumlah_menu from pemesanan as t1
			left outer join menu as t2 on t1.menu_idmenu=t2.id_menu;")->result(),
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
