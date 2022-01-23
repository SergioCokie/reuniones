<?php
include(APPPATH . "controllers/Padre.php");

class Tipo_persona extends Padre
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mantenimiento/Tipo_persona_model");
        $this->load->helper("url");
    }
    public function index()
    { //metodo para mostrar vista de index tipo de persona (ahi se encuentran a tabla y mas funcionalidades)
        $data["titulo"] = "Mantenimiento - Tipo de personas";
        $data["tipo_persona"] = $this->Tipo_persona_model->getTable();
        $this->load->view("Layout/Header", $data);
        $this->load->view("Layout/navbar_sidebar");
        $this->load->view("Mantenimiento/Tipo_persona/Tipo_persona_index", $data);
    }
    public function agregar_tipo_persona()
    { //metodo para mostrar vista de formulario para agregar tipos de persona
        $data["titulo"] = "Mantenimiento - Tipo de personas - Agregar";
        $this->load->view("Layout/Header", $data);
        $this->load->view("Layout/navbar_sidebar");
        $this->load->view("Mantenimiento/Tipo_persona/Agregar_tipo_persona");
        $this->load->view("Layout/Footer");

    }
    public function editar_tipo_persona()
    {
        # code.. carga la vista para editar
        $codigo = $_GET["id"];
        $data["titulo"] = "Mantenimiento - Tipo de personas - Editar";
        $data["tipo_persona"] = $this->Tipo_persona_model->getTable($codigo);
        $this->load->view("Layout/Header", $data);
        $this->load->view("Layout/navbar_sidebar");
        $this->load->view("Mantenimiento/Tipo_persona/Editar_tipo_persona");
        $this->load->view("Layout/Footer");

    }
    public function agregando_tipo_persona()
    {
        $data = array(
            "tiper_id" => 0,
            "tiper_nombre" => $this->input->post("tiper_nombre"),
            "tiper_descripcion" => $this->input->post("tiper_descripcion"),
            "tiper_estado" => $this->input->post("tiper_estado"),
            "tiper_fecha_creacion" => $this->input->post("tiper_fecha_creacion"),
            "tiper_fecha_actualizacion" => "",
        );

        $res = $this->Tipo_persona_model->guardar_tipo_persona($data);
        if ($res > 0) {
            header("Location: " . site_url("Mantenimiento/Tipo_persona"));
        }
    }
    public function eliminar_tiper_persona()
    {
        $tiper_id = $this->input->post("id");
        $res = $this->Tipo_persona_model->getDatos("per_persona");
        foreach ($res as $value) {
            if ($value->per_id_tipo_persona == $tiper_id) {
                echo false;
                break;
            }
            else {
                echo true;
                $this->Tipo_persona_model->eliminar_tiper_persona($tiper_id);
            }
        }
    }
    public function editar_tiper_persona()
    {
        $data = array(
            "tiper_nombre" => $this->input->post("tiper_nombre"),
            "tiper_descripcion" => $this->input->post("tiper_descripcion"),
            "tiper_estado" => $this->input->post("tiper_estado"),
            "tiper_fecha_actualizacion" => $this->input->post("tiper_fecha_creacion"),
        );

        /* print_r($data);
         echo  $this->input->post("tiper_id") ."dasdasd"; */

        $res = $this->Tipo_persona_model->editar_tipo_persona($data, array("tiper_id" => $this->input->post("tiper_id")));
        echo $res;
    }



}