<?php
defined('BASEPATH') or exit('No direct script access allowed');

// PostModel berisi semua tentang data arsip apa saja yang di simpan di database oleh user
class PostModel extends CI_Model
{
    private $table = "post";

    public function getAll()
    {
        return $this->db->get($this->table)->result();  // Mengambil semua data di table user
    }

    // Insert data ke database
    public function create($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Delete data dari database
    public function deletePost($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('post');
    }

    public function updatePostRuangan($data, $table)
    {
        $this->db->where('id', $data['id']);
        $this->db->update($table, $data);
    }
}
