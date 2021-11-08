<?php 
include("db.php");
    if(isset($_POST['criar'])){
        $nome = $_POST['nome'];
        $user = $_POST['user'];
        $mail = $_POST['email'];
        $idade = $_POST['idade'];
        $pass = $_POST['pass'];

        $user_check = mysqli_query($connect, "SELECT usu_name FROM usuario WHERE usu_name='$user'") or die(mysqli_error($connect));
        $do_user_check = mysqli_num_rows($user_check);
        if ($do_user_check >=1) {
            echo"<h5>Esse nome de usuário já existe, troque ou faça o login <a href=login.php>aqui!</a></h5>";
        }
        $email_check = mysqli_query($connect, "SELECT usu_mail FROM usuario WHERE usu_mail='$mail'") or die(mysqli_error($connect));
        $do_email_check = mysqli_num_rows($email_check);
        if ($do_email_check >= 1) {
            echo"<h5>Esse email já está cadastrado no sistema!<br> faça o login <a href=login.php> aqui</a> </h5>";
        }elseif($nome == '' or strlen($nome)<3){
            echo"<h5>Escreva seu nome corretamente!</h5>";
        }elseif($pass == '' or strlen($pass)<8){
            echo"<h5> Sua senha deve ter 8 ou mais caracteres!</h5>";
        }else {
         $query = mysqli_query($connect, "INSERT INTO usuario ('usu_nick','usu_name','usu_mail','usu_pass','usu_date') VALUES ('$nome','$user','$mail','$pass','$idade')");
        $idade = mysqli_query($connect ,$query) or die(mysqli_error('Error: ' . mysqli_error($connect)));
        if($idade){
            setcookie("login",$user);
            header("location: ./");
        }else {
         echo"<h5>Desculpe, houve um erro ao registrar, tente novamente!</h5>";
        }
        }
        }


?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where's My Player</title>
    <link rel="stylesheet" href="./css/registro.css">
</head>
<body>
<div class="cad">
        <h5 style="color:#FFF">Já tem uma conta? <a href="login.php">entre aqui</a></h5>
    </div>
    <div class="Login">
        <img src="./img/logo.png" alt="Logo do Site" height="70" width="70">
    <h2>Cadastre-se!</h2>
    <p>e faça parte dessa comunidade incrível!</p>
    <form method="POST">
        <input type="username" placeholder="Nome de usuário" name="user"><br>
        <input type="name" placeholder="Nome e Sobrenome" name="nome"><br>
        <input type="email" placeholder="Endereço de Email" name="email"><br>
        <input type="date" placeholder="Data de nascimento" name="idade"><br>
        <input type="password" placeholder="Escreva a sua senha" name="pass"><br>
        <input type="submit" value="Criar conta" name="criar">
    </form>
    </div>
</body>
</html>