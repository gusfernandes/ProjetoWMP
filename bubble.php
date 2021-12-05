<?php 
include ("db.php");

$login_cookie = $_COOKIE['login'];

$info = mysqli_query($connect,"SELECT * FROM usuario WHERE usu_name='$login_cookie'");
$infoo = mysqli_fetch_assoc($info);

$id = $_GET['from'];

$tudo = mysqli_query($connect,"SELECT * FROM usuario WHERE id='$id'");
$saber = mysqli_fetch_assoc($tudo);

$email = $saber['usu_name'];

$sql = mysqli_query($connect,"SELECT * FROM chat WHERE para='$login_cookie' and de='$email' or de='$login_cookie' and para='$email'") or die(mysqli_error($connect));

$mysql = "UPDATE chat SET `status`=1 WHERE para='$login_cookie' and de='$email'";
$update = mysqli_query($connect,$mysql);

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta http-equiv="refresh" content="5;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bubble.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Where's My Player</title>
</head>
<body>
    <?php 
    while($msg=mysqli_fetch_assoc($sql)){
        if($msg['de']==$login_cookie){
            if ($msg["imagem"]==null) {
                echo '<div class="bubble">
                    <br>
                    <span name="msg1">'.$msg["texto"].'</span>
                    <br><br>
                    <p>'.$msg["data"].'</p>
                    <br>
                    </div><br>';
            }else{
                echo '<div class="bubble">
                <br>
                <span name="msg1">'.$msg["texto"].'</span>
                <br>
                <img src="upload/'.$msg["imagem"].'">
                <br>
                <p>'.$msg["data"].'</p>
                <br>
                </div><br>';

            }
        }else{
            if ($msg["imagem"]==null) {
                echo '<div class="bubble2">
                    <br>
                    <span name="msg1">'.$msg["texto"].'</span>
                    <br><br>
                    <p>'.$msg["data"].'</p>
                    <br>
                    </div><br>';
            }else{
                echo '<div class="bubble2">
                <br>
                <span name="msg1">'.$msg["texto"].'</span>
                <br>
                <img src="upload/'.$msg["imagem"].'">
                <br>
                <p>'.$msg["data"].'</p>
                <br>
                </div><br>';

            }
        }
    }


    ?>


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