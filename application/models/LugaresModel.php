<?php
    class LugaresModel extends CI_Model {
        function getAll() {
            $r = $this->db->query("SELECT * FROM lugares ");
            $lugares = array();
            foreach ($r->result() as $lugar){
                $lugares[] = $lugar;
            }
            
            return $lugares;
           
        }
        function insertar($nombre,$descripcion,$longuitud,$latitud){
            

            $r= $this->db->query("select max(id) as id from lugares");
             $row=$r->result()[0];
             $idMayor = $row->id + 1;
           
             $sql = "INSERT INTO lugares(id,nombre,descripcion,longuitud,latitud) values ('$idMayor','$nombre','$descripcion','$longuitud','$latitud');";
            
             $r = $this->db->query($sql);
           
             return $r;
 
         }
         function eliminar($id){
            $sql = "delete from lugares where id= '$id' ";
            $r = $this->db->query($sql);
        }
        function modificar($id,$nombre,$descripcion,$longuitud,$latitud){
            $sql = "update lugares set nombre = '".$nombre."', descripcion='".$descripcion."',longuitud='".$longuitud."',latitud='".$latitud."' where id=".$id."";
         
         $r= $this->db->query($sql);
        }
    }