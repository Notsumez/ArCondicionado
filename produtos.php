<?php 
    //Consulta para recuperar os produtos do banco de dados
    include 'conn/connect.php';
    $arCondicionado = $conn->query("SELECT * FROM vw_produtos WHERE id_tipo = 1 ORDER BY id;");
    $inverter = $conn->query("SELECT * FROM vw_produtos WHERE id_tipo = 2 ORDER BY id;");
    $multiSplit = $conn->query("SELECT * FROM vw_produtos WHERE id_tipo = 3 ORDER BY id;");
    $energiaSolar = $conn->query("SELECT * FROM vw_produtos WHERE id_tipo = 4 ORDER BY id;");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Produtos</title>
</head>
<body>

<section class="conteudo-produtos" id="produtos">
    <div class="conteudo-produtos-info">
        <h2 class="conteudo-produtos-info-titulo">Produtos
            <img class="conteudo-produtos-info-divisoria" src="./images/linha.svg" alt="Linha Divisória">
        </h2>
        </div>
        <!-- Começo escolha dos Items -->
        <div class="produtos-opcoesbtns">
            <div class="opcao" ng-mouseover="funcArcondicionado()">Ar Condicionado</div>
            <div class="opcao" ng-mouseover="funcInverter()">Ar Condicionado Inverter</div>
            <div class="opcao" ng-mouseover="funcMultisplit()">Multi Split</div>
            <div class="opcao" ng-mouseover="funcEnergiasolar()">Energia Solar</div>
        </div>
        <div class="imagens-produtos" ng-show="arcondicionado">
            <?php while ($row = $arCondicionado->fetch_assoc()) { ?>
                <a href="detalhes.php?id=<?php echo $row['id']; ?>" role="button">
                    <img src="../ArCondicionado/images/<?php echo $row['imagem']; ?>" alt="">
                </a>
            <?php } ?>
        </div>

        <div class="imagens-produtos" ng-show="inverter">
            <?php while ($row = $inverter->fetch_assoc()) { ?>
                <a href="detalhes.php?id=<?php echo $row['id']; ?>" role="button">
                    <img src="../ArCondicionado/images/<?php echo $row['imagem']; ?>" alt="">
                </a>
            <?php } ?>
        </div>

        <div class="imagens-produtos" ng-show="multisplit">
            <?php while ($row = $multiSplit->fetch_assoc()) { ?>
                <a href="detalhes.php?id=<?php echo $row['id']; ?>" role="button">
                    <img src="../ArCondicionado/images/<?php echo $row['imagem']; ?>" alt="">
                </a>
            <?php } ?>
        </div>

    <div class="imagens-produtos" ng-show="energiasolar">
        <?php while ($row = $energiaSolar->fetch_assoc()) { ?>
            <tr>
                <td>
                    <a href="detalhes.php?id=<?php echo $row['id']; ?>" role="button">
                        <img src="../ArCondicionado/images/<?php echo $row['imagem']; ?>">
                    </a>
                </td>
            </tr>
        <?php } ?>
    </div>

        <script>
		    var app = angular.module('meuApp', []);
		        app.controller('meuController', function($scope) {
			        $scope.arcondicionado = true;
			        $scope.inverter = false;
			        $scope.multisplit = false;
                    $scope.energiasolar = false;
			
			    $scope.funcArcondicionado = function() {
			        $scope.arcondicionado = true;
			        $scope.inverter = false;
			        $scope.energiasolar = false;
			        $scope.multisplit = false;
			    }

			    $scope.funcInverter = function() {
				    $scope.inverter = true;
				    $scope.arcondicionado = false;
				    $scope.energiasolar = false;
				    $scope.multisplit = false;
			    }

			    $scope.funcMultisplit = function() {
				    $scope.multisplit = true;
				    $scope.arcondicionado = false;
				    $scope.inverter = false;
                    $scope.energiasolar = false;
			    }

			    $scope.funcEnergiasolar = function() {
				    $scope.energiasolar = true;
				    $scope.arcondicionado = false;
			        $scope.inverter = false;
			        $scope.multisplit = false;
			    }
		    });
	    </script>
        <!-- fim escolha dos items  -->
</section>
<!-- Fim do Produtos  -->
</body>
</html>