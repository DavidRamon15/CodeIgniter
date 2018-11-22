<?php
// controlador principal 
    class Lugares extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model("LugaresModel");
            $this->load->model("PeliculasModel");
        }

        public function menu($result){
            if ($result == 0) { // Error al borrar
                $data["msj"] = "Error al insertar el usuario";
                $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                $data["listaLugares"] = $this->LugaresModel->getAll();
                $this->load->view("MainMenu", $data);
            } else { // Borrado con éxito
                $data["msj"] = "Usuario insertado con éxito";
                $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                $data["listaLugares"] = $this->LugaresModel->getAll();
                $this->load->view("MainMenu", $data);
            }
            
        }
        public function showInsertarLugar(){
            $this->load->view("insertarLugar");
        }
        public function insertarLugar(){
            $nombre =$this->input->get_post("nombre");
            $descrpicon =$this->input->get_post("descripcion");
            $longuitud =$this->input->get_post("longuitud");
            $latitud =$this->input->get_post("latitud");

            $result=$this->LugaresModel->insertar($nombre,$descrpicon,$longuitud,$latitud);

               
            if ($result == 0) { // Error al borrar
                $data["msj"] = "Error al insertar el usuario";
                $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                $data["listaLugares"] = $this->LugaresModel->getAll();
                $this->load->view("mainMenu", $data);
            } else { // Borrado con éxito
                $data["msj"] = "Usuario insertado con éxito";
                $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                $data["listaLugares"] = $this->LugaresModel->getAll();
                $this->load->view("mainMenu", $data);
            }
                   
        }
        public function eliminarLugar($id){

            $result=$this->LugaresModel->eliminar($id);


            if ($result == 0) { // Error al borrar
                $data["msj"] = "Error al insertar el usuario";
                $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                $data["listaLugares"] = $this->LugaresModel->getAll();
                $this->load->view("MainMenu", $data);
            } else { // Borrado con éxito
                $data["msj"] = "Usuario insertado con éxito";
                $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                $data["listaLugares"] = $this->LugaresModel->getAll();
                $this->load->view("MainMenu", $data);
            }
        }
        public function modificar($id){
            $nombre =$this->input->get_post("nombre");
            $descrpicon =$this->input->get_post("descripcion");
            $longuitud =$this->input->get_post("longuitud");
            $latitud =$this->input->get_post("latitud");

            $result =$this->LugaresModel->modificar($id,$nombre,$descrpicon,$longuitud,$latitud);

            if ($result == 0) { // Error al borrar
                $data["msj"] = "Error al insertar el usuario";
                $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                $data["listaLugares"] = $this->LugaresModel->getAll();
                $this->load->view("MainMenu", $data);
            } else { // Borrado con éxito
                $data["msj"] = "Usuario insertado con éxito";
                $data["listaPeliculas"] = $this->PeliculasModel->getAll();
                $data["listaLugares"] = $this->LugaresModel->getAll();
                $this->load->view("MainMenu", $data);
            }


        }

    }