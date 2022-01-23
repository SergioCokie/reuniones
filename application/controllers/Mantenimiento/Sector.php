<?php
include(APPPATH . "controllers/Padre.php");

class Sector extends Padre
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mantenimiento/Distrito_model");
        $this->load->model("Mantenimiento/Persona_model");
        $this->load->model("Mantenimiento/Sector_model");

    }

    public function index()
    {
        $data["sectores"] = $this->Sector_model->getTable();
        $data["titulo"] = "Mantenimiento - Sectores";
        $this->load->view("Layout/Header", $data);
        $this->load->view("Layout/navbar_sidebar");
        $this->load->view("Mantenimiento/Sector/index_sector", $data);
    }
}