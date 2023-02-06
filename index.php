<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link do css e reset -->
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="shortcut icon" href="./images/logo-shorticon.png" type="image/png">
    <!-- Link do Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Air-Dited</title>
</head>
<body ng-app="meuApp" ng-controller="meuController">
    <!-- incluuindo o header -->
    <?php include('header.html');?>

    <!-- começo do principal  -->
    <main>
        <section class="conteudo-principal">
            <img class="banner-energia-solar" src="./images/energia_solar.png" alt="Imagem Energia Solar">
            <div class="conteudo-principal-direita" >
                <div class="conteudo-principal-direita-frase">
                    <p>
                        &nbsp; &nbsp; Experimente a força transformadora da energia solar. Na sua casa. <br>
                        Na sua empresa. Na sua vida. Você economiza e ajuda a mudar o mundo.
                        <img class="linha-divisoria" src="./images/linha.svg" alt="Linha Divisória">
                    </p>
                    
                </div>
            </div>
        </section>
        
        <section class="bg-mvv">
            <div class="mvv-container">
                <div class="mvv-conteudo">Missão
                    <div>Texto</div>
                </div>
                <div class="mvv-conteudo">Visão
                    <div>Texto</div>
                </div>
                <div class="mvv-conteudo">Valores
                    <div>Texto</div>
                </div>
            </div>
        </section>

        <!-- Começo do Produtos  -->
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
                <div>
                    <img src="../ArCondicionado/images/item_arcondicionado4.png" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/item_arcondicionado4.png" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/item_arcondicionado4.png" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/item_arcondicionado4.png" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/item_arcondicionado4.png" alt="">
                </div>
            </div>
            <div class="imagens-produtos" ng-show="inverter">
                <div>
                    <img src="../ArCondicionado/images/item_inverter2.webp" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/item_inverter2.webp" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/item_inverter2.webp" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/item_inverter2.webp" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/item_inverter2.webp" alt="">
                </div>
            </div>
            <div class="imagens-produtos" ng-show="multisplit">
                <div>
                    <img src="../ArCondicionado/images/Ar-Multi-Split.jpg" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/Ar-Multi-Split.jpg" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/Ar-Multi-Split.jpg" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/Ar-Multi-Split.jpg" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/Ar-Multi-Split.jpg" alt="">
                </div>
            </div>
            <div class="imagens-produtos" ng-show="energiasolar">
                <div>
                    <img src="../ArCondicionado/images/energia.webp" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/energia.webp" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/energia.webp" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/energia.webp" alt="">
                </div>
                <div>
                    <img src="../ArCondicionado/images/energia.webp" alt="">
                </div>
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
    </main>  

    <!-- Incluindo o Footer -->
    <?php include('footer.html');?>
</body>
</html>