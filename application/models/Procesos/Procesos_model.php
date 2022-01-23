<?php
class Procesos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDistritos()
    {
        $this->db->select("
        dis_id,
        dis_codigo,
        dis_nombre,
        per_username,
        INSERT((SELECT 
                    GROUP_CONCAT(zon_nombre
                            SEPARATOR ', ')
                FROM
                    zon_zona
                        INNER JOIN
                    dxz_distritoxzona ON dxz_id_zona = zon_id
                WHERE
                    dxz_id_distrito = dis_id),
            0,
            0,
            '') AS zonas,
            INSERT((SELECT 
                    GROUP_CONCAT(zon_id
                            SEPARATOR ', ')
                FROM
                    zon_zona
                        INNER JOIN
                    dxz_distritoxzona ON dxz_id_zona = zon_id
                WHERE
                    dxz_id_distrito = dis_id),
            0,
            0,
            '') AS zonas_codigos");
        $this->db->from("dis_distrito");
        $this->db->join("per_persona","per_id = dis_pastor_id_per");
        $query = $this->db->get();
		return $query->result();
    }

    public function getZonas($data)
    {
        $this->db->select("
        zon_id,
        zon_nombre,
            INSERT((SELECT 
                        GROUP_CONCAT(sec_nombre
                                SEPARATOR ', ')
                    FROM
                        sec_sector
                            INNER JOIN
                        zxs_zonaxsector ON zxs_id_sector = sec_id
                    WHERE
                        zxs_id_zona = zon_id),
                0,
                0,
                '') AS sectores");
        $this->db->from("zon_zona");
        $this->db->where("zon_id IN "."(".$data.")");
        $query = $this->db->get();
		return $query->result();
    }
}