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
            Detalhes de 
                            <?php echo $row['nome']; ?>
                           
                        
        </h2>             
        <div id="container-main">
            <img src="../ArCondicionado/images/<?php echo $row['imagem']; ?>" alt="">
            <div>
                <p>
                    <h2 id="desc"><?php echo $row['descricao']; ?> 
                    <img src="./images/linha.svg" alt="Linha Divisória" width="50%"></h2> 
                    <br> <br>
                    <?php echo $row['resumo']; ?> <br><br>
                    <hr width="100%">
                    <br>
                    Quantidade Disponível: <?php echo $row['quantidade']; ?> em estoque
                </p>
                <?php
                    // Define o valor do desconto como 10%
                        $desconto = 0.1;
                    // Obtém o custo total do produto
                        $custo_total = $row['custo_total'];
                    // Calcula o valor com desconto
                        $preco_com_desconto = $custo_total * (1 - $desconto);
                ?>
                <p id="preco">
                    <h2 id="vinte">
                        PREÇO: R$
                        <?php echo number_format($preco_com_desconto, 3, '.', ','); // formata para exibir com duas casas decimais e separador de milhar com ponto ?>
                        <span class="preco-original">
                            de&nbsp;<strike>R$<?php echo number_format($custo_total, 3, '.', ','); ?></strike>
                        </span>
                    </h2>
                    <button id="button-detalhes" aria-label="enviar" role="button">
                        Comprar
                        <i class="fa-solid fa-money-check-dollar"></i>
                    </button>
                    <br>
                </p>
            </div>
        </div>
        <hr width="100%">
                <div id="container-sugestoes">
                        <h3>Produtos relacionados</h3>
                            <div class="lista-sugestoes">
                            <?php 
                                // Selecione 3 produtos relacionados com base na categoria do produto atual
                                    $tipos = rand(1, 4);
                                    $sugestoes = $conn->query("SELECT * FROM vw_produtos WHERE id_tipo='$tipos' AND id != '$id' LIMIT 3;");
                                    while($sugestao = $sugestoes->fetch_assoc()) { 
                            ?>
                                <div class="sugestao" style="margin: 20px;">
                                            <a href="detalhes.php?id=<?php echo $sugestao['id']; ?>">
                                            <img src="../ArCondicionado/images/<?php echo $sugestao['imagem']; ?>" alt="<?php echo $sugestao['nome']; ?>">
                                            <h2 style="font-size: 14pt;"><?php echo $sugestao['nome']; ?></h2>
                                        <h5>R$<?php echo number_format($sugestao['custo_total'], 3, '.', ','); ?></h5>
                                    </a>
                                    <br>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
        
        <?php include 'footer.html';?>
</body>
</html>