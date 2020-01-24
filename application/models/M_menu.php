<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {

    public function list()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->order_by('id_menu', 'desc');
        return $this->db->get()->result();
    }

    public function add($data){
        $this->db->insert('menu', $data);
        
    }


    public function detail($id_menu){
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('id_menu', $id_menu);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id_menu', $data['id_menu']);
        $this->db->update('menu', $data);    
    }

    public function delete($data){
        $this->db->where('id_menu', $data['id_menu']);
        $this->db->delete('menu', $data);    
    }

}

/* End of file M_menu.php */
