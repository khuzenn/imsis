<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Target_am_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getAllLiniBisnis()
	{
		$this->db->from('tb_lini_bisnis');
		$query = $this->db->get();

		return $query->result();
	}

	function getAllSegmen()
	{
		$this->db->from('tb_segmen');
		$query = $this->db->get();

		return $query->result();
	}

	function getAllKastemer()
	{
		$this->db->from('views_kastemer');
		$query = $this->db->get();

		return $query->result();
	}

	function getAllProduk()
	{
		$this->db->from('views_produk');
		$query = $this->db->get();

		return $query->result();
	}

	function addTargetAm($data)
	{
		return $this->db->insert('tb_target_am', $data);
	}

	function getDatailKastemer($id_segmen)
	{
		$this->db->where('id_segmen', $id_segmen);
		$this->db->from('views_kastemer');
		$query = $this->db->get();

		return $query->result();
	}

	function getKbliKastemer($id_kastemer)
	{
		$this->db->where('id_kastemer', $id_kastemer);
		$this->db->from('tb_kastemer_kbli');
		$query = $this->db->get();

		return $query->result();
	}

	function getAllProdukKbli($id_kbli)
	{
		(count($id_kbli) == '0') ? $id_kbli = '' : $id_kbli;

		$this->db->select('views_produk.id_produk, views_produk.produk');
		$this->db->where_in('id_kbli', $id_kbli);
		$this->db->from('tb_produk_kbli');
		$this->db->join('views_produk', 'views_produk.id_produk = tb_produk_kbli.id_produk', 'right');
		$query = $this->db->get();

		return $query->result();
	}
}
