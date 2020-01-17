<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function list()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->join('kategori', 'kategori.id_kategori = menu.kategori_idkategori', 'left');
        $this->db->order_by('id_menu', 'desc');
        return $this->db->get()->result();
    }

    public function add($data){
        $this->db->insert('pemesanan', $data);
    }

}

/* End of file M_home.php */
