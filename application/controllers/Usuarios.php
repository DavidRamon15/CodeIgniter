<?php
// controlador principal 
 include_once('Seguridad.php');
    class Usuarios extends Seguridad {
        public function __construct() {
            parent::__construct();
            $this->load->model("UsuariosModel");
            $this->load->model("PeliculasModel");
            $this->load->model("LugaresModel");
            
        }

        public function index() {
            $data["vista"]= "FormLogin";
            $this->load->view("Template_admin",$data);
        }

        public function processFormLogin() {
            $usuario = $this->input->get_post("usuario");
            $pass = $this->input->get_post("password");
            $resultado = $this->UsuariosModel->checkLogin($usuario, $pass);
            if ($resultado == 0) { // Error: usuario o contraseña no existen
                $data["vista"]= "FormLogin";
                $this->load->view("Template_admin",$data);
            } else {
                $this->datos($usuario);
                echo site_url("usuarios/main");
                redirect(site_url("usuarios/main"));
                //$this->main();
               /* $this->load->model("peliculasLugares");
                $data["listaPeliculas"] = $this->peliculasModel->getAll();
                $this->load->view("mainMenu", $data);*/
            }
        }
        public function main(){
            $data["listaPeliculas"] = $this->PeliculasModel->getAll();
            $data["listaLugares"] = $this->LugaresModel->getAll();
            $data["vista"]= "MainMenu";
            $this->load->view("Template_admin", $data);
        }
        
        

        public function onblurUsuario($nombre){
            $resultado = $this->UsuariosModel->compruebaNombre($nombre);
                if($resultado){
                        echo "0";
                }else{
                    echo "1";
                }

        }


        }
    


?>