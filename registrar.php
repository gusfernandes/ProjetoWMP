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
        }elseif($nome == null or strlen($nome)<3){
            echo"<h5>Escreva seu nome corretamente!</h5>";
        }elseif($pass == null or strlen($pass)<8){
            echo"<h5> Sua senha deve ter 8 ou mais caracteres!</h5>";
        }else {
         $query = mysqli_query($connect, "INSERT INTO usuario (usu_nick, usu_name, usu_mail, usu_pass, usu_date) VALUES ('$nome','$user','$mail','$pass','$idade')");
        
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/registro.css">
</head>
<body>
    <div class="container-sm">
    <div class="Login">   
    <h2>Cadastre-se!</h2>
    <p>e faça parte dessa comunidade incrível!</p>
    <form method="POST">
        <div class="form-group">
        <input type="username" placeholder="Nome de usuário" name="user"><br>
        <input type="name" placeholder="Nome e Sobrenome" name="nome"><br>
        <input type="email" placeholder="Endereço de Email" name="email"><br>
        <input type="date" placeholder="Data de nascimento" name="idade"><br>
        <input type="password" placeholder="Escreva a sua senha" name="pass"><br>
        <input type="submit" value="Criar conta" name="criar">
        </div>
    </form>
    </div>
    <div class="cad">
        <h5 style="color:#FFF">Já tem uma conta? <a href="login.php">entre aqui</a></h5>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>
</html>