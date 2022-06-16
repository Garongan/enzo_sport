<?php

class home_model extends CI_Model {
    public function get_jersey()
    {
        # code...
        $this->load->database();
        $query = $this->db->query('SELECT * FROM produk LIMIT 4');
        return $query->result();
    }
}