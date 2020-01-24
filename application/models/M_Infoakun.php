<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Infoakun extends CI_Model {

    public function list($id_pengguna){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $id_pengguna);
        return $this->db->get()->row();
    }

}

/* End of file M_Infoakun.php */