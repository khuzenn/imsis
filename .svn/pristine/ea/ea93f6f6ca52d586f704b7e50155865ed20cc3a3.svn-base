<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class KBLI_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getAllKBLI()
	{
		$this->db->from('tb_kbli');
		$query = $this->db->get();

		return $query->result();
	}

	function getDetailKBLi($id_kbli)
	{
		$this->db->where('id_kbli', $id_kbli);
		$this->db->from('tb_kbli');
		$query = $this->db->get();

		return $query->row();
	}
}
