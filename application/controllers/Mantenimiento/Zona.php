<?php
include(APPPATH . "controllers/Padre.php");

class Zona extends Padre
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mantenimiento/Distrito_model");
        $this->load->model("Mantenimiento/Persona_model");
        $this->load->model("Mantenimiento/Zona_model");

    }
    public function index()
    {
        $data["zonas"] = $this->Zona_model->getTable();
        $data["titulo"] = "Mantenimiento - Distrito";
        $this->load->view("Layout/Header", $data);
        $this->load->view("Layout/navbar_sidebar");
        $this->load->view("Mantenimiento/Zona/index_zona", $data);
    }
}