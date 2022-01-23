<?php   
include (APPPATH."controllers/Padre.php");
    class Zonas extends Padre{
        public function __construct()
        {
            parent::__construct();
            $this->load->model("Procesos/Procesos_model");
        }

        public function index()
        {

        //    $cadena_con_comillas_dobles = 'aquí " hay comillas dobles escapadas';
            //print_r($_POST);
            $separado_por_comas = implode(",", $_POST);
           echo addslashes($separado_por_comas);

           $data = $this->Procesos_model->getZonas(addslashes($separado_por_comas));
           echo json_encode($data); //imprimimos la informacion en un json
       //     print_r($data);*/
        
        }

        
}