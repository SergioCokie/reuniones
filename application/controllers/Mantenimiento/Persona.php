<?php
include(APPPATH . "controllers/Padre.php");

class Persona extends Padre
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mantenimiento/Persona_model");
        $this->load->model("Mantenimiento/Tipo_persona_model");

        $this->load->helper("url");
    }
    public function index()
    {
        //vista de index de personas (se muestra tabla e informacion de personas)
        $data["datos_persona"] = $this->Persona_model->getTable();

        $data["titulo"] = "Mantenimiento - Persona";
        $this->load->view("Layout/Header", $data);
        $this->load->view("Layout/navbar_sidebar");
        $this->load->view("Mantenimiento/Persona/Persona_index", $data);
    }
    public function agregar_persona()
    {
        //vista de agregar persona (Se agregan personas / usuarios)
        $data["datos_persona"] = $this->Persona_model->getTable();
        $data["datos_tipo_persona"] = $this->Tipo_persona_model->getTable();
        $data["titulo"] = "Mantenimiento - Persona - Agregar";
        $this->load->view("Layout/Header", $data);
        $this->load->view("Layout/navbar_sidebar");
        $this->load->view("Mantenimiento/Persona/Agregar_persona", $data);
        $this->load->view("Layout/Footer");
    }

    public function agregar_personas()
    {
        $existe = false;
        $yeard = date("y");//los ultimos dijitos le asignamos el año actual
        $primerosdos = rand(10, 99);
        $segundossdos = rand(10, 99);
        $codigoRamdon = $primerosdos.$segundossdos.$yeard;

        $DateAndTime = date('m-d-Y h:i:s a', time());          
        //metodo para agregar personas 
        $data = array(
            "per_id" => 0,
            "per_codigo" => $codigoRamdon,
            "per_username" => $this->input->post("per_username"),
            "per_password" => sha1($this->input->post("per_username")),
            "per_firstNombre" => $this->input->post("per_firstNombre"),
            "per_lastName" => $this->input->post("per_lastName"),
            "per_alias" => $this->input->post("per_alias"),
            "per_actualizacion" => 0,
            "per_estado" => $this->input->post("per_estado"),
            "per_id_tipo_persona" => $this->input->post("per_id_tipo_persona"),
            "per_fecha_creacion" => $DateAndTime,
            "per_fecha_actualizacion" => NULL,
            "per_ultima_conexion" => NULL,
        );
        $usuarios = $this->Persona_model->getTable();
        foreach ($usuarios as $key => $value) {
          //  echo $value->per_username ."\n";
            if($value->per_username == $this->input->post("per_username")){
                $existe = true;
                break;
            }else{
                $existe = false;
            }
        }
        if($existe){
            echo false;
        }else{
            $res = $this->Persona_model->guardar_persona($data);
            echo true;
        }
    }
    public function actualizar_estado()
    {
        $usuario = $this->session->userdata("per_id");//obtenemos el codigo actual para envitar 
        $per_id = $this->input->post("id");           // el usuario actual (mas informacion)
                                                      //en el if
        if($per_id == $usuario){
            echo false;
        }else{
            $data = array(
                "per_id_usuario" => $per_id,//le enviamos al id 
                "opc1" => 0, 
                "contra_new" => 0,
                "opc2" => 0, // solo seleccionamos la opcion 2 que actualizar la ultima fecha de conexion
                "opc3" => 0,
                "opc4" => 1,
            );
            $this->Persona_model->acutalizar_estado($data);
            echo true;
        }
    }
}
