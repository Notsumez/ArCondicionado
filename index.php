<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link do css e reset -->
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/estilo.css">
    <!-- Link do Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Air-Dited</title>
</head>
<body ng-app="">
    <!-- incluuindo o header -->
    <?php include('header.html');?>

    <main>
        <section class="conteudo-principal">
            <img class="banner-energia-solar" src="./images/energia_solar.png" alt="Imagem Energia Solar">
            <div class="conteudo-principal-direita" >
                <div class="conteudo-principal-direita-frase">
                    <p>
                        &nbsp; &nbsp; &nbsp; Experimente a força transformadora da energia solar. Na sua casa. <br>
                        Na sua empresa. Na sua vida. Você economiza e ajuda a mudar o mundo.
                    </p>
                </div>
                <div class="conteudo-principal-direita-linha-divisoria">
                    <img class="linha-divisoria" src="./images/linha.svg" alt="Linha Divisória">
                </div>
            </div>
        </section>
    </main>  

    <!-- Criando uma área de seleção de conteúdo  -->

    <form>
        Escolha um topico:
        <input type="radio" ng-model="opcao" value="ArCondicionado">Ar Condicionado
        <input type="radio" ng-model="opcao" value="ArCondicionadoInverter">Ar Condicionado Inverter
        <input type="radio" ng-model="opcao" value="MultiSplit">Multi Split
        <input type="radio" ng-model="opcao" value="EnergiaSolar">EnergiaSolar
    </form>

    <div ng-switch="opcao">
        <div ng-switch-when="ArCondicionado">
            <h1>Ar Condicionado</h1>
            <p>lorem</p>
        </div>

        <div ng-switch-when="ArCondicionadoInverter">
            <h1>Ar Condicionado Inverter</h1>
            <p>lorem</p>
        </div>

        <div ng-switch-when="MultiSplit">
            <h1>Multi Split</h1>
            <p>lorem</p>
        </div>

        <div ng-switch-when="EnergiaSolar">
            <h1>Energia Solar</h1>
            <p>lorem</p>
        </div>

        <!-- fim da área de seleção de conteúdo  -->
    </div>
    <!-- Incluindo o Footer -->
    <?php include('footer.html');?>
</body>
</html>