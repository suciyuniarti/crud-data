<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model {
    
    //Deklarasi variable
    //menampung nama tabel dan primary key
    private $table = 'data_diri';
    private $pk = 'id';

    //Method untuk menampilkan semua data
    function get_all()
    {
        //Ambil data dari database secara descending
        $this->db->order_by($this->pk, 'desc');

        //Kirim data ke controller
        return $this->db->get($this->table);
    }

    //Method untuk menampilkan data berdasarkan id
    function get_by_id($id = null)
    {
        //Ambil data dari database berdasarkan id
        $this->db->where($this->pk, $id);

        //Kirim data ke controller
        return $this->db->get($this->table);
    }

    //Method untuk menambahkan data
    function insert($data)
    {
        //Tambahkan data ke database
        return $this->db->insert($this->table, $data);
    }

    /**
   * Retrieve data from the database based on the given ID.
   *
   * @param int $id The ID of the data to be retrieved.
   * @return object|null The retrieved data as an object, or null if no data found.
   */
    function edit($id)
    {
        //Ambil data dari database berdasarkan id
        $this->db->where($this->pk, $id);

        //Kirim data ke controller
        return $this->db->get($this->table)->row();
    }

    //Method untuk mengupdate data
    function update($id, $data)
    {
        //Update data ke database berdasarkan id
        $this->db->where($this->pk, $id);

        //Kirim data ke controller
        return $this->db->update($this->table, $data);
    }

    //Method untuk menghapus data
    function delete($id)
    {
        //Hapus data dari database berdasarkan id
        $this->db->where($this->pk, $id);

        //Kirim data ke controller
        return $this->db->delete($this->table);
    }
}