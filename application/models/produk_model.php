<?php

class produk_model extends CI_Model {
    public function get_produk()
    {
        # code...
        $this->load->database();
        $query = $this->db->query('SELECT * FROM produk');
        return $query->result();
    }
}