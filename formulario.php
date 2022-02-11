<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>
  <h1>Formulario</h1>
  <form action="store.php" method="POST">
    <label for="name">Nombre: </label>
    <input type="text" name="name" id="name"><br><br>
    <label for="apellido">Apellido: </label>
    <input type="text" name="apellido" id="apellido"><br><br>
    <label for="h">Hombre</label>
    <input type="checkbox" name="sexo" id="h" value="hombre">
    <label for="m">Mujer</label>
    <input type="checkbox" name="sexo" id="m" value="mujer"><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email"><br><br>
    <input type="submit" value="Submit">    
  </form>
</body>
</html>