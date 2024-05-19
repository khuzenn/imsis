<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produk_public_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getAllProduk($number, $offset)
	{
		$this->db->order_by('id_produk', 'DESC');
		$query = $this->db->get('views_produk', $number, $offset);

		return $query->result();
	}

	function jumlahDataProduk()
	{
		return $this->db->get('views_produk')->num_rows();
	}

	function jumlahDataProdukSearch($keyword = null)
	{
		if (!empty($keyword)) {
			$this->db->like('produk', $keyword);
		}

		return $this->db->get('views_produk')->num_rows();
	}

	function getProduk($limit, $start, $st = NULL)
	{
		if ($st == NULL) $st = "";

		$sql = "select * from views_produk where produk like '%$st%' limit " . $start . ", " . $limit;
		$query = $this->db->query($sql);

		return $query->result();
	}

	function getDataProduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->from('views_produk');
		$query = $this->db->get();

		return $query->row();
	}

	function getAllKBLIProduk($id_produk)
	{
		$this->db->where('tb_produk_kbli.id_produk', $id_produk);
		$this->db->from('tb_produk_kbli');
		$this->db->join('tb_kbli', 'tb_kbli.id_kbli = tb_produk_kbli.id_kbli', 'left');

		$query = $this->db->get();

		return $query->result();
	}

	function getAllImageProduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->from('tb_produk_image');
		$query = $this->db->get();

		return $query->result();
	}

	function getFilePresentasiProduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->from('tb_produk_presentasi');
		$query = $this->db->get();

		return $query->result();
	}

	function getLinkYoutubeProduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->from('tb_produk_youtube');
		$query = $this->db->get();

		return $query->result();
	}

	function getDetailFilePresentasi($id_file)
	{
		$this->db->where('id_produk_presentasi', $id_file);
		$this->db->from('tb_produk_presentasi');

		$query = $this->db->get();

		return $query->row();
	}
}
