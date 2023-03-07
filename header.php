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
        <div class="menu-hamburguer">
            <div class="linha"></div>
            <div class="linha"></div>
            <div class="linha"></div>
        </div>
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
    class MenuHamburguer {
        constructor(menuHamburguer, botoesNav) {
            this.menuHamburguer = document.querySelector(menuHamburguer);
            this.botoesNav = document.querySelector(botoesNav);
            this.activeClass = 'active';

            this.handleClick = this.handleClick.bind(this);
        }

        handleClick() {
            this.botoesNav.classList.toggle(this.activeClass);
        }

        addClickEvent() {
            this.menuHamburguer.addEventListener("click", () => this.handleClick());
        }

        init() {
            if (this.menuHamburguer) {
                this.addClickEvent();
            }
            return this;
        }
    }

    const menuHamburguer = new MenuHamburguer(
        ".menu-hamburguer",
        ".botoes-nav"
    );
    menuHamburguer.init();
</script>

</body>
</html>
