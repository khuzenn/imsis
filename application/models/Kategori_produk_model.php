<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kategori_produk_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAllKategori()
    {
        $this->db->from('tb_kategori_produk');
        $query = $this->db->get();

        return $query->result();
    }

    function getDetailKategori($id_kategori_produk)
    {
        $this->db->where('id_kategori_produk', $id_kategori_produk);
        $this->db->from('tb_kategori_produk');
        $query = $this->db->get();

        return $query->row();
    }

    function getListProduk($id_kategori_produk)
    {
        $this->db->where('id_kategori_produk', $id_kategori_produk);
        $this->db->from('views_produk');
        $query = $this->db->get();

        return $query->result();
    }

    function getDetailProduk($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->from('views_produk');
        $query = $this->db->get();

        return $query->row();
    }

    function getListKastemer($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->from('views_target_am');
        $query = $this->db->get();

        return $query->result();
    }

    function addKategori($data)
    {
        return $this->db->insert('tb_kategori_produk', $data);
    }

    function updateKategori($data, $id_kategori_produk)
    {
        $this->db->where('id_kategori_produk', $id_kategori_produk);
        $query = $this->db->update('tb_kategori_produk', $data);

        return $query;
    }
}
