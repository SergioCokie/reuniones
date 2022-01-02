<?php
class Password_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getPassword($id_user)
    {
        $this->db->select("per_id,per_password");
        $this->db->from("per_persona");
        $this->db->where("per_id",$id_user);

        $query = $this->db->get();
        return $query->result();
    }
    public function actualizar_contraseña($data)
    {
        try {
            $sql = "CALL `sp_usuarios`(?,?,?,?,?,?)";
            $result = $this->db->query($sql,$data); // $data included 3 param and binding & query to db
            $this->db->close();

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;    
    }
    
}