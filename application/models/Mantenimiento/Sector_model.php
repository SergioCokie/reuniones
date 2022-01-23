<?php
class Sector_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getTable($codigo = null)
    {
        $this->db->select("*");
        $this->db->from("sec_sector");
        $this->db->join("per_persona", "sec_supervisor_id_per = per_id");

        $query = $this->db->get();
		return $query->result();
    }
}