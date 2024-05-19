<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produk_model extends CI_Model
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

	function getAllKategoriProduk()
	{
		$this->db->from('tb_kategori_produk');
		$query = $this->db->get();

		return $query->result();
	}

	function addProduk($data)
	{
		$this->db->insert('tb_produk', $data);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}

	function addKBLI($data)
	{
		return $this->db->insert('tb_produk_kbli', $data);
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

	function searchProduk($keyword = null, $number, $offset)
	{
		$this->db->order_by('id_produk', 'DESC');
		if (!empty($keyword)) {
			$this->db->like('produk', $keyword);
		}

		$query = $this->db->get('views_produk', $number, $offset);

		return $query->result();
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

	function updateProduk($id_produk, $data)
	{
		$this->db->where('id_produk', $id_produk);
		$query = $this->db->update('tb_produk', $data);

		return $query;
	}

	function deleteProduk($id_produk, $data)
	{
		$this->db->where('id_produk', $id_produk);
		$query = $this->db->update('tb_produk', $data);

		return $query;
	}

	function getAllKBLI()
	{
		$this->db->from('tb_kbli');
		$this->db->order_by('kbli', 'ASC');
		$query = $this->db->get();

		return $query->result();
	}

	function deleteKBLIKastemer($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		return $this->db->delete('tb_produk_kbli');
	}

	function getKBLISelected($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->from('tb_produk_kbli');

		$query = $this->db->get();
		$id_kbli = array();

		foreach ($query->result() as $data) {
			$id_kbli[] = encrypt_url($data->id_kbli);
		}

		return $id_kbli;
	}

	function getAllKBLIProduk($id_produk)
	{
		$this->db->where('tb_produk_kbli.id_produk', $id_produk);
		$this->db->from('tb_produk_kbli');
		$this->db->join('tb_kbli', 'tb_kbli.id_kbli = tb_produk_kbli.id_kbli', 'left');

		$query = $this->db->get();

		return $query->result();
	}

	function addYoutube($data)
	{
		$this->db->insert('tb_produk_youtube', $data);
	}

	function addPresentasi($data)
	{
		$this->db->insert('tb_produk_presentasi', $data);
	}

	function addProdukImage($data)
	{
		$this->db->insert('tb_produk_image', $data);
	}

	function getAllImageProduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->from('tb_produk_image');
		$query = $this->db->get();

		return $query->result();
	}

	function getAllPresentasiProduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->from('tb_produk_presentasi');
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

	function getAllYoutubeProduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->from('tb_produk_youtube');
		$query = $this->db->get();

		return $query->result();
	}

	function getDataImageProduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->from('tb_produk_image');
		$query = $this->db->get();

		return $query->result();
	}

	function getDetailImageProduk($id_file)
	{
		$this->db->where('id_produk_image', $id_file);
		$this->db->from('tb_produk_image');

		$query = $this->db->get();

		return $query->row();
	}

	function getDetailFilePresentasi($id_file)
	{
		$this->db->where('id_produk_presentasi', $id_file);
		$this->db->from('tb_produk_presentasi');

		$query = $this->db->get();

		return $query->row();
	}

	function deleteImageProduk($id_file)
	{
		$this->db->where('id_produk_image', $id_file);
		return $this->db->delete('tb_produk_image');
	}

	function deletePresentasiProduk($id_file)
	{
		$this->db->where('id_produk_presentasi', $id_file);
		return $this->db->delete('tb_produk_presentasi');
	}

	function getLinkYoutubeProduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->from('tb_produk_youtube');
		$query = $this->db->get();

		return $query->result();
	}

	function deleteYoutubeProduk($id_produk, $id_youtube)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->where('id_produk_youtube', $id_youtube);
		return $this->db->delete('tb_produk_youtube');
	}

	function deleteUrlYoutube($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		return $this->db->delete('tb_produk_youtube');
	}

	function addUrlYoutube($data)
	{
		$this->db->insert('tb_produk_youtube', $data);
	}

	function getAllKastemer($id_kbli)
	{
		(count($id_kbli) == '0') ? $id_kbli = '' : $id_kbli;

		$this->db->select('views_kastemer.kastemer, views_kastemer.segmen');
		$this->db->where_in('id_kbli', $id_kbli);
		$this->db->from('tb_kastemer_kbli');
		$this->db->join('views_kastemer', 'views_kastemer.id_kastemer = tb_kastemer_kbli.id_kastemer', 'right');
		$query = $this->db->get();

		return $query->result();
	}
}
