<?php
           /* if(isset($data["msj"]))
           
            echo "<h3 style='color:red'>".$data["msj"]."</h3>";*/
            
           
            //echo "<a href='usuarios.php?do=showInsertarUsuarios'>Insertar</a><br>";
            //echo "<a href='index.php/usuarios/showInsertarUsuarios'>Insertar</a><br>";
            echo "<a href='".site_url('peliculas/showInsertarPelicula')."'>Insertar</a><br>";



            for ($i = 0; $i < count($listaPeliculas); $i++) {
                $peli = $listaPeliculas[$i];
            
                echo "<form action='".site_url('peliculas/modificar/'.$peli->id.'/')."' method='post' enctype='multipart/form-data'> 
                <input type='hidden' name='id' value='$peli->id'/>
                <input type='text' name='titulo' value='$peli->titulo'/>
                <input type='text' name='anio' value='$peli->anio'/>
                <input type='text' name='pais' value= '$peli->pais'/>
                <input type='file' name='cartel' value='http://localhost/codeIgniter/".$peli->cartel."'/>
                <img src='".base_url($peli->cartel)."' alt='imagen no disponible' style='width:200px;'/>
                
                ";
                
                echo " <input type='hidden' name='do' value=''>";
                echo "<a href='".site_url('peliculas/eliminarPeliculas/'.$peli->id.'')."'>Eliminar</a>
                    <button type='submit' name='enviar'>modificar Imagen</button><br/></form>
                    ";  

            }
           echo" </br>
            
            -------------------------------------------------------------------------------------<br>";
            echo "<a href='".site_url('lugares/showInsertarLugar')."'>Insertar</a><br>";



            for ($i = 0; $i < count($listaLugares); $i++) {
                $lug = $listaLugares[$i];
            
                echo "<form action='".site_url('lugares/modificar/'.$lug->id.'/')."' method='GET'>
                <input type='hidden' name='id' value='$lug->id'/>
                <input type='text' name='nombre' value='$lug->nombre'/>
                <input type='text' name='descripcion' value='$lug->descripcion'/>
                <input type='text' name='longuitud' value= '$lug->longuitud'/>
                <input type='text' name='latitud' value= '$lug->latitud'/>
                ";
                
                echo " <input type='hidden' name='do' value=''>";
                echo "<a href='".site_url('lugares/eliminarLugar/'.$lug->id.'')."'>Eliminar</a>
                    <button type='submit' name='enviar'>modificar</button><br/></form>
                    ";  

            }
           echo" </br>
            
            -------------------------------------------------------------------------------------";
            echo "<a href='".site_url('seguridad/cerrarSesion')."'>SALIR
            </a>"
            //sesion destroy 

            ?>