<?php
class Padre extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->driver("cache", array("adapter" => "apc", "backup" => "file"));

        if ($this->session) {
            $logged = $this->session->userdata("per_estado");
            if ($logged == 0) {
                header("Location: " . site_url("Login"));
            }
        } else {
            header("Location: " . site_url("Login"));
        }
    }
}
