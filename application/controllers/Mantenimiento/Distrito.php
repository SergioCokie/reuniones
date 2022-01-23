<?php
include(APPPATH . "controllers/Padre.php");

class Distrito extends Padre
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mantenimiento/Distrito_model");
        $this->load->model("Mantenimiento/Persona_model");

    }
    public function index()
    {
        $data["distritos"] = $this->Distrito_model->getTable();

        $data["titulo"] = "Mantenimiento - Distrito";
        $this->load->view("Layout/Header", $data);
        $this->load->view("Layout/navbar_sidebar");
        $this->load->view("Mantenimiento/Distrito/Distrito_index", $data);
    }
    public function agregar()
    {
       $data["datos_personas"] = $this->Persona_model->getTable("",1,1);
        $data["titulo"] = "Mantenimiento - Distrito Agregar";
        $this->load->view("Layout/navbar_sidebar");
        $this->load->view("Mantenimiento/Distrito/Agregar_distrito", $data);
        $this->load->view("Layout/Footer");
    }

    public function obtener_ultimo_codigo()//metodo para obtener el ultimo codigo de dsitritos
    {
        $data = $this->Distrito_model->getTable();
        echo json_encode($data);
    }
}