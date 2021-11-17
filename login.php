<?php
    include("db.php");
    if(isset($_POST["entrar"])){
    $teste="usu_name";
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $verifica = mysqli_query($connect, "SELECT * FROM usuario WHERE usu_name='$user' AND usu_pass='$pass'") or die(mysqli_error($connect));
    if(mysqli_num_rows($verifica)<=0){
        echo '<div class="alert alert-danger" role="alert">
        Nome de usuário ou senha inválidos, tente novamente!
      </div>';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <title>Where's My Player</title>
</head>
<body>
    <div class="container">
    <div class="form-group">
        <img src="./img/logo.png" alt="Logo do Site" height="70" width="70">
    <h3>Faça seu login aqui</h3>
    <form method="POST">
  </div class="form-group">
        <input type="username" placeholder="Nome de usuário" name="user" class="form-control"><br>
        <input type="password" placeholder="Escreva a sua senha" name="pass" class="form-control"><br>
        <input type="submit" value="Entrar" name="entrar" class="form-control">
    </form>
    </div>
    <div class="cad">
    <h6 style="color:#FFF">Ainda não tem uma conta? <a href="registrar.php">cadastre-se aqui!</a></h6>
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
