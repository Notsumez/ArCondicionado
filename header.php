<header>
    <div class="linha-topo-header">
        <img class="logo-header" src="./images/LogoBgRedondo.png" alt="logotipo">
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


