<?php
// controlador principal 
include_once("Seguridad.php");
    class Peliculas extends Seguridad {
        public function __construct() {
            parent::__construct();
            $this->load->model("PeliculasModel");
            $this->load->model("LugaresModel");
           
        }
        public function showInsertarPelicula(){
            if($this->verificar()){
                $data["vista"]= "insertar";
                $this->load->view("Template_admin",$data);            }
        }
        public function insertarPelicula(){
            if($this->verificar()){
            $titulo =$this->input->get_post("titulo");
            $anio =$this->input->get_post("anio");
            $pais =$this->input->get_post("pais");
            $cartel = $_FILES["cartel"]["name"];

            $result =$this->PeliculasModel->upload($cartel,'cartel');

            if($result){
            $result1=$this->PeliculasModel->insertar($titulo,$anio,$pais,$cartel);
            }
                    if ($result == 0) { // Error al borrar
                        $data["msj"] = "Error al insertar el usuario";
                        $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                        $data["listaLugares"] = $this->LugaresModel->getAll();
                        $data["vista"]= "MainMenu";
                        $this->load->view("Template_admin",$data);
                    } else { // Borrado con éxito
                        $data["msj"] = "Usuario insertado con éxito";
                        $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                        $data["listaLugares"] = $this->LugaresModel->getAll();
                        $data["vista"]= "MainMenu";
                        $this->load->view("Template_admin",$data);                    }
            }
        }
        public function eliminarPeliculas($id){
        if($this->verificar()){
            $result=$this->PeliculasModel->eliminar($id);


            if ($result == 0) { // Error al borrar
                $data["msj"] = "Error al insertar el usuario";
                $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                $data["listaLugares"] = $this->LugaresModel->getAll();
                $data["vista"]= "MainMenu";
                $this->load->view("Template_admin",$data);
            } else { // Borrado con éxito
                $data["msj"] = "Usuario insertado con éxito";
                $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                $data["listaLugares"] = $this->LugaresModel->getAll();
                $data["vista"]= "MainMenu";
                $this->load->view("Template_admin",$data);
            }
        }
        }


        public function modificar($id){
            if($this->verificar()){
            $titulo =$this->input->get_post("titulo");
            $anio =$this->input->get_post("anio");
            $pais =$this->input->get_post("pais");
            $cartel = $_FILES["cartel"]["name"];
               
            $result= $this->PeliculasModel->modificar($id,$titulo,$anio,$pais);
            if ($result == 0) { // Error al borrar
                $data["msj"] = "Error al insertar el usuario";
                $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                $data["listaLugares"] = $this->LugaresModel->getAll();
                $data["vista"]= "MainMenu";
                $this->load->view("Template_admin",$data);
            } else { // Borrado con éxito
                $data["msj"] = "Usuario insertado con éxito";
                $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                $data["listaLugares"] = $this->LugaresModel->getAll();
                $data["vista"]= "MainMenu";
                $this->load->view("Template_admin",$data);
            }


        }
    }
}


?>