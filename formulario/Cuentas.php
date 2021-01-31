<?php
require("O:/xampp/htdocs/ProyectoServidor/formulario/ip.php");
 $Ip = $_SERVER['SERVER_ADDR'];
 $nombre=  $_POST['nombres'];
 $apellido= $_POST['apellidos'];
 $correo=  $_POST['correos']; 
 $contra=  $_POST["contra"];
 $contra2= $_POST["contra2"];
 $sexo= $_POST["hm"];
 $nacimiento = $_POST["fecha"]; 
 $fecha = time();
 $file = "O:/xampp/htdocs/ProyectoServidor/DatosPersonales/$nombre-$apellido.TXT";


 $contenido="

**********************************************
 Nombre: $nombre        Apellidos: $apellido
 Email: $correo         
 Sexo: $sexo            FechaNacimiento: $nacimiento
 IP: $Ip

 Contraseña: $contra 
 Segundo Intento: $contra2 \n
 Fecha de cración: ".date("d-m-Y (H:i:s)", $fecha); 


$archivo=fopen("O:/xampp/htdocs/ProyectoServidor/DatosPersonales/$nombre-$apellido.TXT","a") or die("Hay un ERROR");
fwrite($archivo,$contenido);
fclose($archivo);    
 header("Location: http://localhost/ProyectoServidor/pag2_2.html");
 write_visita ();

 
?> 
