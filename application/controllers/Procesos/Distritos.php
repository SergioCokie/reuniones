<?php   
include (APPPATH."controllers/Padre.php");
    class Distritos extends Padre{
        public function __construct()
        {
            parent::__construct();
            $this->load->model("Procesos/Procesos_model");
        }

        public function index()
        {
            //comentario para ver como se hacen los cambios
            // de nuevo
            $data["distritos_resumen"] = $this->Procesos_model->getDistritos();
            $data["titulo"] = "Reuniones - Dashboard";
            $this->load->view("Layout/Header", $data);
            $this->load->view("Layout/navbar_sidebar");
            $this->load->view("Procesos/distritos",$data);
            $this->load->view("Layout/Footer");
        }

        
}