<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kastemer_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getAllKastemer()
	{
		$this->db->from('views_kastemer');
		$this->db->order_by('id_kastemer', 'DESC');

		$query = $this->db->get();

		return $query->result();
	}

	function getAllSegmen()
	{
		$this->db->from('tb_segmen');
		$query = $this->db->get();

		return $query->result();
	}

	function addKastemer($data)
	{
		$this->db->insert('tb_kastemer', $data);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}

	function updateKastemer($data, $id_kastemer)
	{
		$this->db->where('id_kastemer', $id_kastemer);
		$query = $this->db->update('tb_kastemer', $data);

		return $query;
	}

	function deletedKBLIKastemer($id_kastemer, $data)
	{
		$this->db->where('id_kastemer', $id_kastemer);
		$query = $this->db->update('tb_kastemer_kbli', $data);

		return $query;
	}

	function deleteKastemer($id_kastemer, $data)
	{
		$this->db->where('id_kastemer', $id_kastemer);
		$query = $this->db->update('tb_kastemer', $data);

		return $query;
	}

	function getDetailKastemer($id_kastemer)
	{
		$this->db->where('id_kastemer', $id_kastemer);
		$this->db->from('views_kastemer');
		$this->db->order_by('id_kastemer', 'DESC');

		$query = $this->db->get();

		return $query->row();
	}

	function getKBLISelected($id_kastemer)
	{
		$this->db->where('id_kastemer', $id_kastemer);
		$this->db->from('tb_kastemer_kbli');

		$query = $this->db->get();
		$id_kbli = array();

		foreach ($query->result() as $data) {
			$id_kbli[] = encrypt_url($data->id_kbli);
		}

		return $id_kbli;
	}

	function addKBLI($data)
	{
		return $this->db->insert('tb_kastemer_kbli', $data);
	}

	function deleteKBLIKastemer($id_kastemer)
	{
		$this->db->where('id_kastemer', $id_kastemer);
		return $this->db->delete('tb_kastemer_kbli');
	}

	function getAllKBLI()
	{
		$this->db->from('tb_kbli');
		$this->db->order_by('kbli', 'ASC');
		$query = $this->db->get();

		return $query->result();
	}

	function selectedKKBLIKastemer($id_kastemer)
	{
		$this->db->where('id_kastemer', $id_kastemer);
		$this->db->from('tb_kastemer_kbli');
		$this->db->join('tb_kbli', 'tb_kbli.id_kbli = tb_kastemer_kbli.id_kbli');

		$query = $this->db->get();

		return $query->result();
	}

	function addBatchKastemer($data)
	{
		return $this->db->insert_batch('tb_kastemer', $data);
	}

	function addVIP($data)
	{
		return $this->db->insert('tb_kastemer_vip', $data);
	}

	function getAllVIP($id_kastemer)
	{
		$this->db->where('id_kastemer', $id_kastemer);
		$this->db->from('tb_kastemer_vip');
		$query = $this->db->get();

		return $query->result();
	}

	function updateVIP($data, $id_vip)
	{
		$this->db->where('id_kastemer_vip', $id_vip);
		$this->db->update('tb_kastemer_vip', $data);
	}

	function deleteVIP($id_kastemer, $id_vip)
	{
		$this->db->where('id_kastemer', $id_kastemer);
		$this->db->where('id_kastemer_vip', $id_vip);
		return $this->db->delete('tb_kastemer_vip');
	}

	function getAllProduk($id_kbli)
	{
		(count($id_kbli) == '0') ? $id_kbli = '' : $id_kbli;

		$this->db->select('views_produk.produk, views_produk.harga, views_produk.kategori_produk');
		$this->db->where_in('id_kbli', $id_kbli);
		$this->db->from('tb_produk_kbli');
		$this->db->join('views_produk', 'views_produk.id_produk = tb_produk_kbli.id_produk', 'right');
		$query = $this->db->get();

		return $query->result();
	}
}
