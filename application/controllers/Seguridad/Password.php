<?php
include (APPPATH."controllers/Padre.php");
class Password extends Padre
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model("Seguridad/Password_model");
        $this->load->helper("url");

    }
    public function index()
    {
        $data["titulo"] = "Reuniones - Password";
        $this->load->view("Layout/Header", $data);
        $this->load->view("Layout/navbar_sidebar", $data);
        $this->load->view("seguridad/index_seguridad");
        $this->load->view("Layout/Footer", $data);

    }
    public function validar_contra_actual()
    {
        //print_r($_POST);
        $res = $this->Password_model->getPassword($this->session->userdata("per_id"));
        $contra = sha1($this->input->post("per_contra_actual"));
        //echo '<pre>';
        //print_r($res);
        foreach($res as $value){
            if ($value->per_password == $contra) {
                $data = array(
                    "per_id_usuario" => $this->session->userdata("per_id"),//le enviamos el id del usuario que queremos cambiar
                    "opc1" => 1, // solo seleccionamos la opcion 1 que actualizar la contra del usuario
                    "contra_new" => $this->input->post("nuevaContra"), //le enviamos la nueva contraseña
                    "opc2" => 0, 
                    "opc3" => 0,
                    "opc4" => 0,
                );
                $this->Password_model->actualizar_contraseña($data);
                $response = true;
            }else{
                $response = false;
            }
        }
        echo $response;


    }
}
