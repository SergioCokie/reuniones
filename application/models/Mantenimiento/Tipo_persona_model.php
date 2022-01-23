<?php
class Tipo_persona_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getTable($codigo = null,$estado = NULL)
    {//codigo en especifico y estado si existe o no
        $this->db->select("
        tiper_id,
        tiper_nombre,
        tiper_descripcion,
        if(tiper_estado=1,'Activo','Inactivo') as estado,
        tiper_estado,
        tiper_fecha_creacion,
        IF(tiper_fecha_actualizacion != '',
            tiper_fecha_actualizacion,
            'Sin Modificación') AS tiper_fecha_actualizacion
        ");
		$this->db->from('tiper_tipo_persona');
        if($codigo != null){
            $this->db->where('tiper_id',$codigo);
        }
        if($estado != null){
            $this->db->where('tiper_estado', $estado);
        }
		$query = $this->db->get();
		return $query->result();
    }
    public function guardar_tipo_persona($data)
	{
		$this->db->insert("tiper_tipo_persona", $data);
		return $this->db->insert_id();
	}

    public function eliminar_tiper_persona($tiper_id)
    {
        $this->db->delete('tiper_tipo_persona', array('tiper_id' => $tiper_id));
		return $this->db->affected_rows();
    }

    public function getDatos($table=NULL,$where=NULL)
    {
        $this->db->select("*");
		$this->db->from($table);
		$query = $this->db->get();
		return $query->result();
    }

    public function editar_tipo_persona($data, $where)
	{
		$this->db->update('tiper_tipo_persona', $data, $where);
		return $this->db->affected_rows();
	}
   
}