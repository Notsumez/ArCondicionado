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
        <nav class="botoes-nav">
            <ul>
                <li><a class="botoes-nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') { echo ' active-border'; } ?>" href="index.php#menu">Home</a></li>
                <li><a class="botoes-nav-item" href="index.php#servicos">Serviços</a></li>
                <li><a class="botoes-nav-item" href="index.php#sobre">Sobre Nós</a></li>
                <li><a class="botoes-nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'detalhes.php') { echo ' active-border'; } ?>" href="index.php#produtos">Produtos</a></li>
                <li><a class="botoes-nav-item" href="#contato">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>
<script>
    // Script para o menu hamburguer
    const menuHamburguer = document.querySelector('.menu-hamburguer');
    const botoesNav = document.querySelector('.botoes-nav ul');

    menuHamburguer.addEventListener('click', () => {
        botoesNav.classList.toggle('active');
    });
</script>

</body>
</html>
