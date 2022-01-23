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
       // $data["distritos"] = $this->Distrito_model->getTable();
        $data["persona"] = $this->Persona_model->getTable("",3);

        $data["titulo"] = "Mantenimiento - Distrito Agregar";
        $this->load->view("Layout/Header", $data);
        $this->load->view("Layout/navbar_sidebar");
        $this->load->view("Mantenimiento/Distrito/Agregar_distrito", $data);
        $this->load->view("Layout/Footer");
    }

    public function agregar_distrito()
    {
        $data = array(
            "dis_id" => 0,
            "dis_codigo" => $this->input->post("dis_codigo"),
            "dis_nombre" => $this->input->post("dis_nombre"),
            "dis_pastor_id_per" => $this->input->post("dis_pastor"),
            "dis_fecha_creacion" => $this->input->post("tiper_fecha_creacion"),
            "dis_fecha_actualizacion" => NULL,
        );
        //acordarse modificar el campo de fecha ya que no acepta string
        $res = $this->Distrito_model->agregar_distrito($data);
        print_r($res);
        /* echo "<pre>";
        print_r($data); */
    }
    public function obtener_ultimo_codigo()//metodo para obtener el ultimo codigo de dsitritos
    {
        $data = $this->Distrito_model->getTable();
        echo json_encode($data);
    }
}