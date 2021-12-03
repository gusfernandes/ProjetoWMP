<?php 
  include("db.php");
  $login_cookie = $_COOKIE['login'];
  $infoo = mysqli_query($connect,"SELECT * FROM usuario WHERE usu_name='$login_cookie'");
  $info = mysqli_fetch_assoc($infoo);

    if(isset($_POST['criar'])){
        $nome = $_POST['nome'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];

    if ($nome==null) {
      echo "Escreva o seu nome!";
    }elseif($user==null){
      echo "Escreva o nickname!";
    }elseif ($pass==null) {
      echo "Escreva a sua senha corretamente!";
    }else{
      $query = "UPDATE `usuario` SET `usu_name`='$user', `usu_nick` = '$nome', `usu_pass` = '$pass' WHERE `usu_name` = '$login_cookie'";
      $data = mysqli_query($connect, $query);
      if ($data) {
        header("Location: myprofile.php");
      }else {
        echo "Algo deu errado! Tente novamente!";
      }
    }
    }
    if(isset($_POST['cancelar'])){
      header("Location: myprofile.php");
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
    <link rel="stylesheet" href="./css/settings.css">
</head>
<body>
<div class="topo">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="./img/logo.png" width="50" height="50" alt="Logo">
  </a>
</nav>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="myprofile.php">Perfil</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="Login"> 
    <img src="./img/logo.png" id="logoset" alt="">  
    <h2>Alterar suas informações</h2>
    <form action="" method="POST">
        <div class="form-group">
        <input type="username" placeholder="Nome de usuário" value="<?php echo $info['usu_name'];?>" name="user"><br>
        <input type="name" placeholder="Nome e Sobrenome" value="<?php echo $info['usu_nick'];?>" name="nome"><br>
        <input type="password" placeholder="Escreva a sua senha" value="<?php echo $info['usu_pass'];?>" name="pass"><br>
        <input type="submit" value="Atualizar" name="criar">&nbsp;&nbsp;<input type="submit" value="Cancelar" name="cancelar">
        </div>
    </form>
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