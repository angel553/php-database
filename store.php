<?php
  require('conexion.php');

  $nombre = $_POST['name'];
  $apellido = $_POST['apellido'];
  $sexo = $_POST['sexo'];
  $email = $_POST['email'];

  //echo var_dump($_POST);

 //--- Aplicable a Sentencias INSERT, UPDATE, DELETE ---//
 
 if(count($_POST) > 0){
    $sql = "INSERT INTO datos (nombre, apellido, sexo, email)
    VALUES ('$nombre', '$apellido', '$sexo', '$email')";
 }else{
    echo "Llena todos los campos";
 }

 header("Location: /index.php");
 
 // Utilizar exec() dado que no se regresan resultados
 $conn->exec($sql);

?>