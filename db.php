<?php 
    $base="dbwmp";
    error_reporting(E_ALL ^ E_DEPRECATED);
    $connect = mysqli_connect("localhost","etecia","123456") or die("Não foi possivel conectar ao servidor");
    $db = mysqli_select_db($connect,$base) or die("Não foi possivel conectar ao banco de dados");
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where's My Player</title>
</head>
<body>
    
</body>
</html>