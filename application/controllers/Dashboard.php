<?php   
include (APPPATH."controllers/Padre.php");
    class Dashboard extends Padre{
        public function __construct()
        {
            parent::__construct();
            $this->load->model("Procesos/Procesos_model");
        }

        public function index()
        {
            //$data["distritos_resumen"] = $this->Procesos_model->getDistritos();
            $data["titulo"] = "Reuniones - Dashboard";
            $this->load->view("Layout/Header", $data);
            $this->load->view("Layout/navbar_sidebar");
            $this->load->view("Dashboard/Dashboard",$data);
            $this->load->view("Layout/Footer");

        }
    }