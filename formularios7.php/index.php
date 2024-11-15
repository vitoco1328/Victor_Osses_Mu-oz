!DOCTYPE html>
<html>

    <head>
        <title>control semana 7</title>
    </head>
    <fieldset>
        </body>

        <h1 style="color: forestgreen">Formulario de registro clientes</h1>
        <p>Registro de clientes</p>
        <input type="radio" name="botondeopcion" checked value="1">obligatorio<br />
        <br>
        <form action="index2.php" method="post">
            <label for="username">Nombre de usuario:</label><br>
            <input type="text" id="username" name=" username" required><br>
            <br>
            <label for="passwork">Contraseña:</label><br>
            <input type="passwork" id="passwork" name="passwork" required><br>
            <br>
            <input type="submit" value="Registrar"><br>
        </form>
        <?php
            
            $username=$_POST["username"];
            $passwork= $_POST["passwork"];
            $username= "";
            $passwork= "Vic#1428";
            if (strlen($username)==8 && substr($username,-3)=="r12" ){ // se imprime si el usuario es valido o invalido.
                echo "Usuario valido <br>" ;
            }
            if(strpos($username," ") !== false){
            echo " El usuario es invalido tiene espacios en blanco<br>";
            }else{
                echo "El usuario es valido<br>";
            }
            if (strlen($passwork)>= 8 && ctype_upper(substr($passwork,0,1)) && substr($passwork,3,1) =="*,#,%" ){
                    //Se imprime si la contraseña es valida o invalida.
                echo " Formato de contraseña valida <br>";
        
            }
                //Verificación de espacios en blanco de contraseña
            if(strpos($passwork," ") !== false){
               echo "La contraseña es invalida tiene espacios en blanco<br>";
            }
        >?
            
    </fieldset>

</html>