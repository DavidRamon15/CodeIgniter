
<?php

echo "<form action='".site_url('lugares/insertarLugar')."' method='GET'>
                
              nombre <input type='text' name='nombre' />
                <br><br>
                descripcion <input type='text' name='descripcion' />
                <br><br>
                longuitud<input type='text' name='longuitud' />
                <br><br>
                latitud<input type='text' name='latitud'/>
                <br><br> ";
                echo "<button type='submit' name='enviar'>modificar</button><br/></form>";
               
?>
