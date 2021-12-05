<?php 
    include("header.php");

    $id = $_GET["from"];
    $tudo = mysqli_query($connect,"SELECT * FROM usuario WHERE id='$id'");
    $saber = mysqli_fetch_assoc($tudo);

    $user = $saber["usu_name"];

    $sql = mysqli_query($connect, "SELECT * FROM chat WHERE para = '$login_cookie' AND de = '$user' or de = '$login_cookie' AND para = '$user' ORDER BY id");

    if (isset($_POST["send"])) {
        
    }
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Where's My Player</title>
</head>
<body>

    <h4><a href="perfil.php?id=<?php echo $id; ?>"><?php echo $saber['usu_nick']?></a></h4>
    <form action="" method="POST">
        <div class="form-group">
        <div id="box">
            <object data="bubble.php?from=<?php echo$id; ?>#bottom" type="text/html"  width="635px" heigth="390px" style="overflow: auto;"></object>
        </div>
        <br>
        <div id="send">
            <input type="text" name="text" placeholder="Escreva sua mensagem aqui!" class="form-control">
            <a href="image.php?id=<?php echo $id; ?>"><button class="btn btn-primary" value="imagem" name="image">Imagem</button</a>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="submit" name="send" value="Enviar">Enviar</button>
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