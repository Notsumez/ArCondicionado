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
    <title>Compras</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <main class="container-compras">
        <!-- Top para voltar -->
        <h2>
            <a href="javascript:window.history.go(-1)" role="button" >
                <span class="btn-voltar">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                </span>
            </a>&nbsp;
            Comprando: <?php echo $row['nome']; ?>
        </h2>             
        <div class="container-conteudo">
            <div class="conteudo-flex">
                <div class="conteudo-esquerda">
                    <h1>Selecione a Forma de Pagamento:</h2>
                    <div class="conteudo-flex">
                        <div class="bancos">  
                            <a href="">
                                <img src="./images/bbrasil.png" width="10%" alt="">
                            </a>
                            &nbsp;
                            <a href="">
                                <img src="./images/itau.png" width="10%" alt="">
                            </a>
                            &nbsp;
                            <a href="">
                                <img src="./images/santander.png" width="10%" alt="">
                            </a>
                            <h1 class="info-compra">Informações da Compra:</h1> <br>
                                <h2>Nome:</h2>
                                    <h4 class="info-item"><?php echo $row['nome'];?></h4>
                                <h2>Descrição:</h2>
                                    <h4 class="info-item"><?php echo $row['descricao'];?></h4>
                                <h2>Resumo:</h2>
                                    <h4 class="info-item"><?php echo $row['resumo'];?></h4>
                                <h2>Quantidade:</h2>
                                    <h4 class="info-item"><?php echo $row['quantidade'];?></h4>
                                <h2>Total:</h2>
                                    <h4 class="info-item">R$ <?php echo $row['custo_total'];?></h4>
                        </div>
                        <div class="conteudo-direita">
                            <img src="./images/<?php echo $row['imagem']; ?>" width="150px" height="150px" alt="Imagem do Produto a ser comprado">
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </main>

    <?php include 'footer.php';?>
</body>
</html>