<?php 
    include("header.php");

    $sql = mysqli_query($connect,"SELECT * FROM chat WHERE para='$login_cookie' GROUP BY de ORDER BY id");

    $ups = mysqli_query($connect, "SELECT * FROM chat WHERE para='$login_cookie' AND `status`=0");
    $contagem = mysqli_num_rows($ups);

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/inbox.css">
    <title>Document</title>
</head>
<body>
    <h4>Chat</h4>
    <form action="" method="POST">
    <div class="">
    <?php 
        if ($contagem<=0) {
            echo'<h4>Ainda não há conversas!</h4>';
        }else {
            while($msg=mysqli_fetch_assoc($sql)){
                $from = $msg["de"];
                $tudo = mysqli_query($connect,"SELECT * FROM usuario WHERE usu_name='$from'");
                $all = mysqli_fetch_assoc($tudo);
                $conta = mysqli_query($connect,"SELECT * FROM chat WHERE de='$from' and para='$login_cookie' and `status` = 0");
                $contar = mysqli_num_rows($conta);

                echo '<br><a name="d" href="chat.php?from='.$all["id"].'"><div id="box">
                <br><p>'.$all["usu_nick"].' - '.$contar.' mensagens novas</p><br>
                </div></a> <hr>';
            }
        }
    ?>

    </div>
    </form>

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
<div id="footer"><p>&copy; Where's my Player, 2021 - Todos os direitos reservados</p></div>
</body>
</html>