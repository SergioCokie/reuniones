<?php
class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //Obtenemos todos los datos del usuario para ver si existe, si no trae nada no lo dejamos pasar
    public function getLogin($user, $pass)
    {
        $newPass = sha1($pass);
        $this->db->select("*");
        $this->db->from("per_persona");
        $this->db->where("per_username", $user);
        $this->db->where("per_password", $newPass);
        $query = $this->db->get();
        return $query->row();
    }
    //Declaramos todos los datos que queremos del usuario
    public function array_session($objquery)
    {
        $datasession = array(
            "per_id" => $objquery->per_id,
            "per_codigo" => $objquery->per_codigo,
            "per_username" => $objquery->per_username,
            "per_password" => $objquery->per_password,
            "per_actualizacion" => $objquery->per_actualizacion,
            "per_estado" => $objquery->per_estado,
            "per_id_tipo_persona" => $objquery->per_id_tipo_persona,
            "per_ultima_conexion" => $objquery->per_ultima_conexion,
            "LOGGED_IN" => TRUE
        );
        return $datasession;
    }
    //Controlamos si el usuario se ha logeado o no
    public function login($user, $pass)
    {
        $datos = new stdClass();
        $datos->estado = false;

        $objquery = $this->getLogin($user, $pass);
        if ($objquery != null) {
            if ($objquery->per_id >= 1) {
                $datos->estado = true;
                $datos->mensaje = "LOGIN CORRECTO";
            }
        } else {
            $datos->estado = false;
            $datos->mensaje = "LOGIN INCORRECTO";
        }

        if ($datos->estado == true) {
            $array_session = $this->array_session($objquery);
            $this->session->set_userdata($array_session);
        }
        return $datos;
    }
    //Controlamos la actividad del cliente (ultima conexion)
    public function ultima_conexion($data)
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
