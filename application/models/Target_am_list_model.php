<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Target_am_list_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAllTargetAM()
    {
        $this->db->from('views_target_am');
        $query = $this->db->get();

        return $query->result();
    }
}
