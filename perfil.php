<?php 
include("header.php");

$id = $_GET["id"];
$saberr = mysqli_query($connect, "SELECT * FROM usuario WHERE id='$id'");
$saber = mysqli_fetch_assoc($saberr);
$email = $saber["usu_name"];

    if ($email == $login_cookie) {
        header("location: myprofile.php");
    }

$pubs = mysqli_query($connect,"SELECT * FROM pubs WHERE user='$email' ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where's My Player</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">

</head>
<body>
    <div class="container">
    <?php       
    if ($saber["usu_img"]==null) {
        echo '<img src="img/perfil.png" id=profile>';
    }else{
        echo '<img src="upload/'.$saber["usu_img"].'" id="profile">';
    }
    
    ?>
    <div id="menu">    <h3><?php 
    echo $saber['usu_nick'];
    ?></h3>
        <h4><?php 
    echo $saber['usu_name'];
    ?></h4>
    <input type="submit" value="Denunciar" name="report" class="form-control sm">
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
<?php 
    while($pub=mysqli_fetch_assoc($pubs)){
        $email = $pub['user'];
        $saberr = mysqli_query($connect,"SELECT * FROM usuario WHERE usu_name='$email'");
        $saber = mysqli_fetch_assoc($saberr);
        $nome = $saber['usu_nick']." " .$saber['usu_name'];
        $id = $pub['id'];

        if($pub['imagem']==null){
            echo'<div class="pub" id="'.$id.'">
            <p><a href="perfil.php?id='.$saber['id'].'">'.$nome.'</a>
            '.$pub["dataa"].'
            </p>
            <span>'.$pub['texto'].'</span><br/>
            </div>';
        }else {
            echo'<div class="pub" id="'.$id.'">
            <p><a href="perfil.php?id='.$saber['id'].'">'.$nome.'</a>
             '.$pub["dataa"].'
            </p>
            <span>'.$pub['texto'].'</span><br/>
            <img src="upload/'.$pub["imagem"].'"/>
            </div>';
        }
    }
?>
</body>
</html>