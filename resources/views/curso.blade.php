<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 
</head>
<body>
    <?php

$con =new PDO("mysql:host=localhost;dbname=world", "root","toor");
$stmt=$con->query("SELECT Name,CountryCode,District FROM world.city limit 10;");
echo "<table  class='table'><tr><th>Nombre</th><th>Codigo</th><th>Distrito</th></tr>";
while ($fila = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
      $datos = "<tr><td>".$fila[0] . "</td><td>" . $fila[1] . "</td><td>" . $fila[2] . "</td></tr>";
      echo $datos;
}
echo "</table>";

    ?>
</body>
</html>