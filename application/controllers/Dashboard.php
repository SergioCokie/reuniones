<?php   
include (APPPATH."controllers/Padre.php");
    class Dashboard extends Padre{
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $data["titulo"] = "Reuniones - Dashboard";
            $this->load->view("Layout/Header", $data);
            $this->load->view("Layout/navbar_sidebar", $data);
            $this->load->view("Dashboard/Dashboard");
            $this->load->view("Layout/Footer");

        }
    }