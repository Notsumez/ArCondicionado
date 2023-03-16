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
                    
                    <div class="conteudo-flex">
                        <div class="bancos">  
                            <h1>Selecione a Forma de Pagamento:</h2>
                            <a href="">
                                <img src="./images/bbrasil.png" width="7%" alt="">
                            </a>
                            &nbsp;
                            <a href="">
                                <img src="./images/itau.png" width="7%" alt="">
                            </a>
                            &nbsp;
                            <a href="">
                                <img src="./images/santander.png" width="7%" alt="">
                            </a>
                            &nbsp;
                            <a href="">
                                <img src="./images/nubank.png" width="7%" alt="">
                            </a>
                            &nbsp;
                            <a href="">
                                <img src="./images/picpay.png" width="7%" alt="">
                            </a>
                            &nbsp;
                            <a href="">
                                <img src="./images/inter.png" width="7%" alt="">
                            </a>
                            <h1 class="info-compra">Informações da Compra:</h1> <br>
                            <form action="">
                                <h2 class="info-compra">Nome:</h2>
                                    <h4 class="info-item"><?php echo $row['nome'];?></h4>
                                    <br><br> 
                                <h2 class="info-compra">Descrição:</h2>
                                    <h4 class="info-item"><?php echo $row['descricao'];?></h4>
                                    <br><br> 
                                <h2 class="info-compra">Resumo:</h2>
                                    <h4 class="info-item"><?php echo $row['resumo'];?></h4>
                                    <br><br> 
                                <h2 class="info-compra">Quantidade:</h2>
                                    <input type="number" name="quantidade" min="1" max="<?php echo $row['quantidade']; ?>" value="1" onchange="atualizarValorTotal(); validarQuantidadeMaxima(<?php echo $row['quantidade']; ?>);"><?php echo $row['quantidade']; ?> Disponível
                                <br><br> 
                                <?php
                                     // Define o valor do desconto como 10%
                                        $desconto = 0.1;
                                    // Obtém o custo total do produto
                                        $custo_total = $row['custo_total'];
                                    // Calcula o valor com desconto
                                     $preco_com_desconto = $custo_total * (1 - $desconto);
                                    ?>
                                <h2 class="info-compra">Total:</h2>
                                    <h4 class="info-item" id="valor-total">R$ <?php echo number_format($preco_com_desconto, 3, '.', ','); // formata para exibir com duas casas decimais e separador de milhar com ponto ?></h4>
                                <div class="alinhar-btn">
                                    <button class="btn-finalizar">
                                        <span>Finalizar Compra <i class="fa-regular fa-credit-card"></i></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div class="conteudo-direita">
                            <img src="./images/<?php echo $row['imagem']; ?>" width="500px" alt="Imagem do Produto a ser comprado">
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </main>

    <?php include 'footer.php';?>
</body>
<script>
    function atualizarValorTotal() {
        const quantidade = parseInt(document.querySelector("input[name='quantidade']").value);
        const custoTotal = parseFloat("<?php echo $row['custo_total']; ?>".replace(".", "."));
        const novoValorTotal = (quantidade * custoTotal).toFixed(3).replace(".", ".");
        document.querySelector("#valor-total").textContent = "R$ " + novoValorTotal;
    }
</script>
<script>
function validarQuantidadeMaxima(maxQuantidade) {
  var quantidade = parseInt(document.getElementsByName("quantidade")[0].value);
  if (quantidade == maxQuantidade) {
    alert("Esse é o máximo disponível na loja.");
  }
}
</script>
</html>