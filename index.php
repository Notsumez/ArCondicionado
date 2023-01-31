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
<body ng-app="">
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
                    </p>
                    <img class="linha-divisoria" src="./images/linha.svg" alt="Linha Divisória">
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
            <div class="conteudo-produtos-items">
                <div>
                    <input type="radio" ng-model="opcao" value="ArCondicionado">Ar Condicionado
                    <input type="radio" ng-model="opcao" value="ArCondicionadoInverter">Ar Condicionado Inverter
                    <input type="radio" ng-model="opcao" value="MultiSplit">Multi Split
                    <input type="radio" ng-model="opcao" value="EnergiaSolar">EnergiaSolar
                </div>
            </div>
                <div ng-switch="opcao">
                    <div ng-switch-when="ArCondicionado" class="conteudo-produtos-items-desc-item">
                        <div><img src="./images/item_arcondicionado1.png" alt="Ar Condicionado Split Hi Wall Gree Eco Garden 9000 BTU/h Frio GWC09QA - 220 Volts"></div> <!-- https://www.magazineluiza.com.br/ar-condicionado-split-hi-wall-gree-eco-garden-9000-btu-h-frio-gwc09qa-220-volts/p/fc52069574/ar/arsp/ -->
                        <div><img src="./images/item_arcondicionado2.png" alt="Ar Condicionado Split Hi Wall Electrolux Ecoturbo 9000 BTU/h Frio VI09F/VE09F - 220 Volts"></div> <!-- https://www.magazineluiza.com.br/ar-condicionado-split-hi-wall-electrolux-ecoturbo-9000-btu-h-frio-vi09f-ve09f-220-volts/p/kdkhe5j9gk/ar/arsp/ -->
                        <div><img src="./images/item_arcondicionado3.png" alt=""></div> <!-- https://www.magazineluiza.com.br/ar-condicionado-split-hi-wall-philco-black-12000-btu-h-frio-pac12000tfm12-220-volts/p/dck05746g3/ar/arsp/ -->
                        <div><img src="./images/item_arcondicionado4.png" alt=""></div> <!-- https://www.magazineluiza.com.br/ar-condicionado-janela-gree-10000-btu-h-frio-eletronico-gjc10bl-a3nrnd2q-127-volts/p/fc2gb2gdc7/ar/arja/ -->
                        <div><img src="./images/item_arcondicionado5.png" alt="Ar-condicionado de Janela Springer Midea - 7.500 BTUs Frio QCI078BB"></div><!-- https://www.magazineluiza.com.br/ar-condicionado-de-janela-springer-midea-7-500-btus-frio-qci078bb/p/216885800/ar/arja/ -->
                    </div>
                    <div ng-switch-when="ArCondicionadoInverter" class="conteudo-produtos-items-desc-item">
                        <div><img src="./images/item_inverter1.webp" alt="Ar Condicionado Split Inverter 12000 BTUs Quente Frio Springer Midea Connect 220v"></div> <!-- https://www.magazineluiza.com.br/ar-condicionado-split-inverter-12000-btus-quente-frio-springer-midea-connect-220v/p/gb686je6eg/ar/arsp/ -->
                        <div><img src="" alt=""></div> <!-- -->
                        <div><img src="" alt=""></div> <!-- -->
                        <div><img src="" alt=""></div> <!-- -->
                        <div><img src="" alt=""></div> <!-- -->
                    </div>
                    <div ng-switch-when="MultiSplit" class="conteudo-produtos-items-desc-item">
                        <div><img src="" alt=""></div> <!-- -->
                        <div><img src="" alt=""></div> <!-- -->
                        <div><img src="" alt=""></div> <!-- -->
                        <div><img src="" alt=""></div> <!-- -->
                        <div><img src="" alt=""></div> <!-- -->
                    </div>
                    <div ng-switch-when="EnergiaSolar" class="conteudo-produtos-items-desc-item">
                        <div><img src="" alt=""></div> <!-- -->
                        <div><img src="" alt=""></div> <!-- -->
                        <div><img src="" alt=""></div> <!-- -->
                        <div><img src="" alt=""></div> <!-- -->
                        <div><img src="" alt=""></div> <!-- -->
                    </div>
                </div>
        </section>
        <!-- Fim do Produtos  -->
    </main>  

    <!-- Incluindo o Footer -->
    <?php include('footer.html');?>
</body>
</html>