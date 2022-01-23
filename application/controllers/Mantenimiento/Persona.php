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

        if( $this->session->userdata("per_id_tipo_persona") != 1){
            $data["datos_persona"] = $this->Persona_model->getTable($this->session->userdata("per_id"));
        }else{
            $data["datos_persona"] = $this->Persona_model->getTable();

        }
        $data["datos_tipo_persona"] = $this->Tipo_persona_model->getTable("",1);//le pasamos parametros (mas informacion ir al metodo)
        $data["titulo"] = "Mantenimiento - Persona";
        $this->load->view("Layout/Header", $data);
        $this->load->view("Layout/navbar_sidebar");
        $this->load->view("Mantenimiento/Persona/Persona_index", $data);
    }
    public function agregar_persona()
    {
        //vista de agregar persona (Se agregan personas / usuarios)
        $data["datos_persona"] = $this->Persona_model->getTable();
        $data["datos_tipo_persona"] = $this->Tipo_persona_model->getTable("",1);//le pasamos parametros
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
        date_default_timezone_set('America/El_Salvador');    
        $DateAndTime = date('m-d-Y h:i:s a', time());  
        echo $DateAndTime;        
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
                "opc2" => 0, 
                "opc3" => 0,
                "opc4" => 1,
            );
            $this->Persona_model->acutalizar_estado($data);
            echo true;
        }
    }

    public function reiniciar_password()
    {
        $usuario = $this->session->userdata("per_id");//obtenemos el codigo actual para envitar 
        $per_id = $this->input->post("id");           // el usuario actual (mas informacion)
                                                      //en el if
        $contra = $this->input->post("pass");           // el usuario actual (mas informacion)

       /*  echo $per_id;
        echo $contra;
      */
        if($per_id == $usuario){
            echo false;
        }else{
            $data = array(
                "per_id_usuario" => $per_id,//le enviamos al id 
                "opc1" => 0, 
                "contra_new" => $contra,
                "opc2" => 0, 
                "opc3" => 1,
                "opc4" => 0,
            );
            $this->Persona_model->acutalizar_estado($data);
            echo true;
        }
    }

    public function cambiar_rol_usuario()
    {
        $per_id = $this->input->post("codigo_user");// obtenemnos el usuario actual por medio de su id
        $data = $this->Persona_model->getTable($per_id);
        echo json_encode($data); //imprimimos la informacion en un json
    }

    public function editar_rol_usuario()
    {
        $data = array(
            "per_id_tipo_persona" => $this->input->post("per_id_tipo_persona"),//le enviamos al id 
        );

        $res = $this->Persona_model->editar_rol_usuario($data, array("per_id" => $this->input->post("per_id")));
        echo $res;
    }
}
