

    <?php
            //session_destroy();
            if (isset($data["msj"])) echo "<h2 style='color:red'>".$data["msj"]."</h2>";

    ?>
        <h1>Login</h1>
        <?php
            echo form_open("usuarios/processFormLogin");
        ?>
            Usuario: <input type="text" name="usuario" id="nombre" /> 
            <span id="mensaje"></span>
            <br/>
            
            Contraseña: <input type="text" name="password"/>
            
            <br/>
            <input type="hidden" name="do" value="processFormLogin"/>
            <input type="submit" value="Enviar"/>
        </form>


<script>
    $(document).ready(function(){
        $("#nombre").blur(function(){
           nombre = document.getElementById("nombre").value;
            mensaje = document.getElementById("mensaje");
           site_url ='<?php echo site_url("usuarios/onblurUsuario/");?>'+nombre;
           
            $.get(site_url,function(data){
                switch(data){
                    case "0":
                        mensaje.innerHTML = "Usuario correcto";
                        mensaje.style.color = "green";
                        break;
                    case "1":
                        mensaje.innerHTML = "Usuario incorrecto";
                        mensaje.style.color = "red";
                        break; 
                    
                }
            });
        });

    });





</script>
