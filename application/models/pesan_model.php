<?php

class pesan_model extends CI_Model {
    public function get_current()
    {
        # code...
        $this->load->database();
        $query = $this->db->query('SELECT id, nama, harga, jumlah, total FROM pesan');
        return $query->result();
    }
    public function update_pesan($id, $jumlah, $harga)
    {
        # code...
        $total = $harga * $jumlah;
        $this->load->database();
        $this->db->query("UPDATE pesan SET jumlah='$jumlah', total='$total' WHERE id = '$id'");
    }
    public function delete_pesan($id)
    {
        # code...
        $this->load->database();
        $this->db->query("DELETE FROM pesan WHERE id = '$id'");
            
    }
    public function tambah_pesan($id_produk, $nama_produk, $harga_produk, $jumlah_produk, $total_produk)
    {
        # code...
        $this->load->database();
        $this->db->query("INSERT INTO pesan (id, nama, harga, jumlah, total) VALUES ('$id_produk', '$nama_produk', '$harga_produk', '$jumlah_produk', '$total_produk') ");
    }
    
}