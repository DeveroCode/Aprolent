<?php
      $servidor = "localhost";
      $nombreBd = "aprolent";
      $usuario = "root";
      $pass = "";
  
      // Creando la conexion
      $conexion = new mysqli($servidor,$usuario,$pass,$nombreBd);
      //  Creamos un if en caso de que no se puede hacer una conexion
      if ($conexion->connect_error) {
          die("Hubo un problema al conectar con el servidor");
      }
  
?>