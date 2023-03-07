<?php 
    include 'conn/connect.php';
    $id = $_GET['id'];
    $lista = $conn->query("select * from vw_produtos where id like '%$id%';");
    $row =  $lista->fetch_assoc();
    $num_linhas = $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link do css e reset -->
    <link rel="stylesheet" type="text/css" href="CSS/reset.css">
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="./images/logo-shorticon.png" type="image/png">
    <!-- Link do Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Detalhes</title>
</head>
<body>
    <?php include 'header.php';?>  
    <div id="container-detalhes">
        <!-- Top para voltar -->
        <h2>
            <a href="javascript:window.history.go(-1)" role="button" >
                <span class="btn-voltar">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                </span>
            </a>&nbsp;
            Detalhes de <?php echo $row['nome']; ?>
        </h2>             
        <div id="container-main">
            <figure>
                <img src="../ArCondicionado/images/<?php echo $row['imagem']; ?>" alt="">
            </figure>
        </div>
        <?php include 'footer.html';?>
</body>
</html>