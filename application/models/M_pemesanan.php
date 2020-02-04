<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_pemesanan extends CI_Model
{

    public function list()
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('menu', 'menu.id_menu = pemesanan.menu_idmenu', 'left');
        $this->db->order_by('id_pemesanan', 'desc');
        return $this->db->get()->result();
    }

    public function delete($data)
    {
        $this->db->where('id_pemesanan', $data['id_pemesanan']);
        $this->db->delete('pemesanan', $data);
    }
}

/* End of file M_pemesanan.php */
