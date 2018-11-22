
<?php

echo "<form action='".site_url('peliculas/insertarPelicula')."' method='post' enctype='multipart/form-data'>
                
               titulo <input type='text' name='titulo' />
                <br><br>
                año<input type='text' name='anio' />
                <br><br>
                pais<input type='text' name='pais' />
                <br><br>
                cartel<input type='file' name='cartel' />
                <br><br> ";
                echo "<button type='submit' name='enviar'>modificar</button><br/></form>";
               
?>
