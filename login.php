<?php
    include("db.php");
    if(isset($_POST["entrar"])){
    $teste="usu_name";
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $verifica = mysqli_query($connect, "SELECT * FROM usuario WHERE usu_name='$user' AND usu_pass='$pass'") or die(mysqli_error($connect));
    if(mysqli_num_rows($verifica)<=0){
        echo "<h2>Senha ou nome de usuário inválidos!</h2>";
    }else{
        setcookie("login",$user);
        header("location: ./");
    }

}
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Where's My Player</title>
</head>
<body>
<div class="cad">
        <h6 style="color:#FFF">Ainda não tem uma conta? <a href="registrar.php">cadastre-se aqui!</a></h6>
    </div>
    <div class="Login">
        <img src="./img/logo.png" alt="Logo do Site" height="70" width="70">
    <h2>Faça seu login aqui</h2>
    <form method="POST">
        <input type="username" placeholder="Nome de usuário" name="user"><br>
        <input type="password" placeholder="Escreva a sua senha" name="pass"><br>
        <input type="submit" value="Entrar" name="entrar">
    </form>
    </div>
</body>
</html>
