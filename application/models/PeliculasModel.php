<?php
    class PeliculasModel extends CI_Model {
       
        function getAll() {
            $r = $this->db->query("SELECT * FROM peliculas ");
            $peliculas = array();
            foreach ($r->result() as $pelicula){
                $peliculas[] = $pelicula;
            }
            
            return $peliculas;
           
        }
        function insertar($titulo,$anio,$pais,$cartel){
            
            $ruta = "imagenes/peliculas/".$cartel;

           $r= $this->db->query("select max(id) as id from peliculas");
            $row=$r->result()[0];
            $idMayor = $row->id + 1;
          
            $sql = "INSERT INTO peliculas(id,titulo,anio,pais,cartel) values ('$idMayor','$titulo','$anio','$pais','$ruta');";
           
            $r = $this->db->query($sql);
          
            return $r;

        }
        function eliminar($id){
            $sql = "delete from peliculas where id= '$id' ";
            $r = $this->db->query($sql);
        }

        function modificar($id,$titulo,$anio,$pais){

            $sql = "UPDATE peliculas SET id='".$id."',titulo='".$titulo."',anio=".$anio.",pais='".$pais."' WHERE id='".$id."'";
           
         
         $r= $this->db->query($sql);
       
        }
        function upload($cartel,$name_file){
          
            
                 $config['upload_path']= 'imagenes/peliculas';
                 $config['file_name'] = $cartel;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']  = 20000;
                $config['max_width']   = 20240;
                $config['max_height']  = 7680;

                $this->load->library('upload', $config);

              
                if ( ! $this->upload->do_upload($name_file))
                {
                    
                     return false;  
                }
                else
                {
                    return true;
                }
              
        }
    
    }