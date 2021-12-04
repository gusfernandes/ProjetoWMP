<?php 
    include("header.php");
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/pesquisar.css">
    <title>Document</title>
</head>
<body>
    <div class="container-sm">
    <h3>Resultados da pesquisa</h3><br>
    <?php 
        $query = $_GET['query'];
        $min_lenght = 1;

        if (strlen($query) >=$min_lenght) {
            $query = htmlspecialchars($query);
            $query = mysqli_real_escape_string($connect, $query);

            $raw_results = mysqli_query($connect, "SELECT * FROM usuario WHERE (usu_nick LIKE '%".$query."%')");
            $rows = mysqli_num_rows($raw_results);
            if($rows > 0) {
            echo "<br><br>";
            while ($results = mysqli_fetch_array($raw_results)){
                echo '<div id="box"><a href="perfil.php?id='.$results["id"].'" name="p"><br><p name="p"><h4>'.$results["usu_nick"].'</h4></p><br></a></div><hr>';
            }
            }else{
                echo'<br><div class="alert alert-danger" role="alert">
                Conteúdo de pesquisa inválido!
              </div>';
            }
        }else{
            echo'<br><div class="alert alert-danger" role="alert">
            Escreva algo!
          </div>';
        }
    
    
    ?>
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