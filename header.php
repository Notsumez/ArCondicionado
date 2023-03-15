<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
    

<header>
    <div class="linha-topo-header">
        <a href="index.php">
            <img class="logo-header" src="./images/LogoBgRedondo.png" alt="logotipo">
        </a>
        <div class="mobile-menu">
            <div class="linha1"></div>
            <div class="linha2"></div>
            <div class="linha3"></div>
        </div>
        <nav class="botoes-nav">
            <ul>
                <li><a class="botoes-nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') { echo ' active-border'; } ?>" href="index.php#menu">Home</a></li>
                <li><a class="botoes-nav-item" href="index.php#servicos">Serviços</a></li>
                <li><a class="botoes-nav-item" href="index.php#sobre">Sobre Nós</a></li>
                <li><a class="botoes-nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'detalhes.php') { echo ' active-border'; } else if (basename($_SERVER['PHP_SELF']) == 'compra.php') { echo ' active-border'; } ?>" href="index.php#produtos">Produtos</a></li>
                <li><a class="botoes-nav-item" href="#contato">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>
<script src="js/script.js">
</script>

</body>
</html>
