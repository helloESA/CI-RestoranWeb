<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

    public function list()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->order_by('id_menu', 'desc');
        return $this->db->get()->result();
    }

    public function listpesan()
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('menu', 'menu.id_menu = pemesanan.menu_idmenu', 'left');
        $this->db->order_by('id_pemesanan', 'desc');
        return $this->db->get()->result();
    }

    public function sumpesanan()
    {
        $this->db->select_sum('jumlah_menu, harga_menu');
        $this->db->from('pemesanan');
        $this->db->join('menu', 'menu.id_menu = pemesanan.menu_idmenu', 'left');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('pemesanan', $data);
    }
}

/* End of file M_home.php */
