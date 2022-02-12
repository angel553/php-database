<?php
  require('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <style>
    table, th, td{
      border: 1px solid;
    }
    table {
      width: 50%;
      margin-left: 25%;
    }
    td{
      text-align: center;
    }
    h3{
      margin-left: 46%;
    }
    .h3_{
      margin-left: 45%;
    }
    a{
      margin-left: 48%;
      font-size: 18px;
    }
    h1{
      text-align:center;
    }
  </style>
</head>
<body>
  <h1>Conexión PHP y Base de Datos</h1>
  <div>
    <h3 class="h3_">Acceso al Formulario</h3> 
    <a href="formulario.php">Clic Aquí</a>
  </div>
  <div>
    <h3>Consulta de datos</h3> 
    <?php 
       //--- Aplicable a Sentencia SELECT ---//
      $sql = "SELECT * FROM datos";
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      // Configura los resultados como un arreglo asociativo
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      
      // $stmt->fetchAll() Obtiene el arreglo asociativo
      $arreglo = $stmt->fetchAll();
      //var_dump($arreglo);      
      ?>
      
      <table>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Sexo</th>
          <th>Email</th>
        </tr>
        <?php         
          foreach($arreglo as $row){
        ?>
        <tr>
          <?php
            foreach($row as $row2){            
          ?>
          <td><?php echo $row2 ?></td>
          <?php
            }
          ?>
        </tr>              
        <?php
          }
        ?>
      </table>
  </div>  
</body>
</html>