<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lini_bisnis_model extends CI_Model
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

	function updateLiniBisnis($data, $id_lini_bisnis)
	{
		$this->db->where('id_lini_bisnis', $id_lini_bisnis);
		$query = $this->db->update('tb_lini_bisnis', $data);

		return $query;
	}

	function getDetailLiniBisnis($id_lini_bisnis)
	{
		$this->db->where('id_lini_bisnis', $id_lini_bisnis);
		$this->db->from('tb_lini_bisnis');
		$query = $this->db->get();

		return $query->row();
	}
}
