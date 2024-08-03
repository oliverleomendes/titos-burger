<?php $separarUrl = explode("/", $_SERVER['PHP_SELF']); ?>

<aside class="navbar navbar-titos">
    <div class="navbar-logo">
        <a href="#"><img src="assets/img/logo.png" alt="" class="logo"></a>
    </div>
    <hr>
    <nav class="navbar-titos-aside">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link nav-link-titos 
                    <?php if($separarUrl[2] == 'dashboard.php') echo 'active'; ?>">
                    <ion-icon name="home-outline"></ion-icon>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="gestao-clientes.php" class="nav-link nav-link-titos 
                    <?php if($separarUrl[2] == 'gestao-clientes.php') echo 'active'; ?>">
                    <ion-icon name="people-outline"></ion-icon>
                    Clientes
                </a>
            </li>
            <li class="nav-item">
                <a href="gestao-fornecedores.php" class="nav-link nav-link-titos
                    <?php if($separarUrl[2] == 'gestao-fornecedores.php') echo 'active'; ?>">
                    <ion-icon name="storefront-outline"></ion-icon>
                    Fornecedores
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link nav-link-titos">
                    <ion-icon name="receipt-outline"></ion-icon>
                    Pedidos
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link nav-link-titos">
                    <ion-icon name="albums-outline"></ion-icon>
                    Categorias
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link nav-link-titos">
                    <ion-icon name="beer-outline"></ion-icon>
                    Produtos
                </a>
            </li>
            <li class="nav-item">
                <a href="gestao-usuarios.php" class="nav-link nav-link-titos
                    <?php if($separarUrl[2] == 'gestao-usuarios.php') echo 'active'; ?>">
                    <ion-icon name="people-outline"></ion-icon>
                    Usuários
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link nav-link-titos">
                    <ion-icon name="cog-outline"></ion-icon>
                    Configurações
                </a>
            </li>
        </ul>
    </nav>
</aside>