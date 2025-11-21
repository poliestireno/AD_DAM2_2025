<?php
require_once("dbutils.php");
$miConexion = conectarDB();
$total_juegos = contarTodosJuegos($miConexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>EL NÚMERO TOTAL DE JUEGOS ACTUALMENTE ES <?php echo $total_juegos?></h2>
</body>
</html>