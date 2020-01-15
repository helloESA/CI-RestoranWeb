<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

    public function list()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->order_by('id_kategori', 'desc');
        return $this->db->get()->result();
    }

    public function add($data){
        $this->db->insert('user', $data);
        
    }

    public function edit($data){
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('user', $data);    
    }

    public function delete($data){
        $this->db->where('id_user', $data['id_user']);
        $this->db->delete('user', $data);    
    }
    
}

/* End of file M_pengguna.php */
