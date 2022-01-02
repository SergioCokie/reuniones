<?php
class Persona_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getTable($codigo = null)
    {
        $this->db->select("
        per_id,
        per_codigo,
        per_username,
        per_firstNombre,
        per_lastName,
        per_alias,
        tiper_nombre,
        if(per_estado=1,'Cuenta Activa','Cuenta Inactiva') as estado,
        per_estado,
        per_fecha_creacion,
        IF(per_fecha_actualizacion != '',
            per_fecha_actualizacion,
            'Sin Modificación') AS per_fecha_actualizacion,
        IF(per_ultima_conexion != '',
            per_ultima_conexion,
            'Nunca Conectado') AS per_ultima_conexion,
        
        ");
        
		$this->db->from('per_persona');
        $this->db->join("tiper_tipo_persona","per_id_tipo_persona = tiper_id");
        if($codigo != null){
            $this->db->where('per_id',$codigo);
        }
		$query = $this->db->get();
		return $query->result();
    }
    public function guardar_persona($data)
	{
		$this->db->insert("per_persona", $data);
		return $this->db->insert_id();
	}
}