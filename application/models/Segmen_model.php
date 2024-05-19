<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Segmen_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAllSegmen()
    {
        $this->db->from('tb_segmen');
        $query = $this->db->get();

        return $query->result();
    }

    function addSegmen($data)
    {
        return $this->db->insert('tb_segmen', $data);
    }

    function updateSegmen($data, $id_segmen)
    {
        $this->db->where('id_segmen', $id_segmen);
        $query = $this->db->update('tb_segmen', $data);

        return $query;
    }

    function getDetailSegmen($id_segmen)
    {
        $this->db->where('id_segmen', $id_segmen);
        $this->db->from('tb_segmen');
        $query = $this->db->get();

        return $query->row();
    }
}
