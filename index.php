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
                        &nbsp; O sistema de Energia Solar funciona com a captação da luz do sol através dos painéis solares, que geram a energia “transportada” até o inversor solar, responsável por converter a energia para a sua rede elétrica.
                        A partir daí energia solar pode ser usada para alimentar qualquer aparelho doméstico, como geladeiras, lâmpadas e aparelhos de ar condicionado, por exemplo.
                        <img class="linha-divisoria" src="./images/linha.svg" alt="Linha Divisória">
                    </p>
                    
                </div>
            </div>
        </section>
        <!-- Começo do MVV  -->
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

        <!-- Começo do Serviços  -->
        <section class="bg-servicos">
            <div class="container-servicos">
                <h2 class="titulo-servicos" id="servicos">Serviços
                    <img class="linha-divisoria-servicos" src="./images/linha.svg" alt="Linha Divisória">
                </h2>
                <div class="grade-servicos">

                </div>
            </div>
        </section>

        <!-- Começo do sobre nós  -->
        <section>
            <div class="container-sobre">
                <h2 class="titulo-sobre" id="sobre">Sobre Nós
                    <img class="linha-divisoria-sobre" src="./images/linha.svg" alt="Linha Divisória">
                </h2>
                <div class="conteudo-sobre">
                    <p class="texto-sobre">
                        A Air-Dited nasceu para lhe proporcionar a melhor experiência do mercado em relação a energia solar. <br>
                        Aqui você não precisa se preocupar com projeto, instalação, burocracia, manutenção, logística ou <br>
                        qualquer outra coisa que te preocupe. Além de darmos suporte total para o financiamento do seu sistema <br>
                        solar, somos responsáveis pelo estudo de viabilidade técnica, financeira, projeto e dimensionamento do <br>
                        seu sistema fotovoltaico, homologação com a concessionária, instalação, monitoramento, seguro e manutenção. <br> <br>
                        Aqui nós literalmente entregamos a solução completa para você! Somos um braço de Itaquera fundado em 2020, <br>
                        que vem construindo uma história de sucesso, ampliando seus negócios com solidez e transparência desde então. <br>
                        Dentro de Itaquera também temos a Air-D Solar, nossa importadora e distribuidora dos melhores equipamentos e <br>
                        produtos para Energia Solar. Escolhemos a qualidade, inovação, tecnologia e atendimento como nossa essência de <br>
                        ser. Por este motivo a Provedor Solar nasceu para entregar o que tem de melhor em tecnologia e tranquilidade <br>
                        aos nossos clientes. Este sempre será o nosso foco, você!
                    </p>
                    <img class="logotipo-sobre" src="../ArCondicionado/images/LogoBgPreto.png" alt="Logotipo">
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