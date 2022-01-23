<?php
class Distrito_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getTable($codigo = NULL)
    {
        $this->db->select("
            dis_id,
            dis_codigo,
            dis_nombre,
            per_firstNombre,
            dis_fecha_creacion,
            if(dis_fecha_actualizacion != '',
                dis_fecha_actualizacion,
                'Sin Modificación') AS dis_fecha_actualizacion,
            
        ");
        $this->db->from("dis_distrito");
        $this->db->join("per_persona","dis_pastor_id_per = per_id");
        $query = $this->db->get();
		return $query->result();
    }
    public function agregar_distrito($data)
    {
        $this->db->insert("dis_distrito", $data);
		return $this->db->insert_id();   
    }
}