<?php
class Zona_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getTable($codigo = null)
    {
        $this->db->select("*");
        $this->db->from("zon_zona");
        $this->db->join("per_persona", "zon_coordinador_id_per = per_id");

        $query = $this->db->get();
		return $query->result();
    }
}