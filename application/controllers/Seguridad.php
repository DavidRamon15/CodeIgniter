<?php

class Seguridad extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model("UsuariosModel");
        $this->load->library("session");
    }
    public function datos($session){
       
        $array=array(
            'usuario'=>$session
        );
        $this->session->set_userdata($array);
    }
    public function verificar(){
        if($this->session->usuario){
            return true;
        }else{
            echo "<script> alert('error');</script>";
            $data["vista"]= "formLogin";
                        $this->load->view("Template_admin",$data);   
            return false;

        }
        
    }
    public function cerrarSesion(){
        $this->session->sess_destroy();
        $data["vista"]= "FormLogin";
        $this->load->view("Template_admin",$data);   
    }

}

?>