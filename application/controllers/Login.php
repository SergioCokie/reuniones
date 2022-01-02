<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("Login_model");
    }

    public function index()
    {
        $logged = $this->session->userdata("per_estado");//controlando el estado de la cuenta 0 desactivada 1 activa
        $contra_actualizada = $this->session->userdata("per_actualizacion");//controlando si ya actualizo su contraseña o no 
        if ($logged == 1) {
            if($contra_actualizada == 0){
                header("Location: " . site_url("Seguridad/Password"));//mandamos a cambiar su contra
            }else{
                header("Location: " . site_url("Dashboard"));//ya la cambio ya no lo mandamos ahi
            }
        } else {
            $this->load->view("Login/Login");
        }
    }
    public function Login()
    {
        $user = $this->input->post("per_nombre");
        $contra = $this->input->post("per_password");
        $res = $this->Login_model->login($user, $contra);
        //print_r($res);
        if ($res->estado) {
            if($this->session->userdata("per_estado") == 1){
                echo "USUARIO ACTIVO";
                $data = array(
                    "per_id_usuario" => $this->session->userdata("per_id"),//le enviamos al id 
                    "opc1" => 0, 
                    "contra_new" => 0,
                    "opc2" => 1, // solo seleccionamos la opcion 2 que actualizar la ultima fecha de conexion
                    "opc3" => 0,
                    "opc4" => 0,
                );
                $this->Login_model->ultima_conexion($data);
            }else{
                echo "USUARIO INACTIVO";
            }
        } else {
            echo "USUARIO INCORRECTO";
        }
    }
    //
    public function LogOut()
    {
        $this->session->sess_destroy();
        session_write_close();
        header("Location: " . site_url("Login"));
    }
}
