<?php


$id = $_GET['id'];

$tudo = mysqli_query($connect,"SELECT * FROM usuario WHERE id='$id'");
$saber = mysqli_fetch_assoc($tudo);

$email = $saber['usu_name'];

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    
</body>
</html>