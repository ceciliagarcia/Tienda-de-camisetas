<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Camisetas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!--Cabecera-->
    <header id="header">
        <div id="logo">
            <img src="assets/img/camiseta.png" alt="Camiseta logo">
            <a href="index.php"> Tienda de Camisetas</a>
        </div>
    </header>
    <!--Menu-->
    <nav id="menu">
        <ul>
            <li>
                <a href="">Inicio</a>
            </li>
            <li>
                <a href="">Categorias</a>
            </li>
            <li>
                <a href="">Categorias 2</a>
            </li>
        </ul>
    </nav>

    <div id="content">
    <!--Barra lateral-->
    <aside id="lateral">
         <div id="login" class="block_aside">
             <h3>Entrar a la web</h3>
             <form action="" method="POST">

                 <label for="email">Email</label>
                 <input type="email" name="email">
                 <label for="password">Password</label>
                 <input type="password" name="password">
                 <input type="submit" value="Enviar">
             </form>
            <ul>
                <li> <a href="">Mis pedidos</a></li>
                <li> <a href="">Gestionar pedidos</a></li>
                <li> <a href="">Gestionar categorias</a></li>
            </ul>
            
        </div>
    </aside>
    <!--Contenido Central-->
        <div id="central">
             <h1>Productos destacados</h1>
            <div class="product">
                <img src="assets/img/camiseta.png">
                <h2>Camiseta Azul</h2>
                <p>30 euros</p>
                <a href="" class="button">Comprar</a>
            </div>

            <div class="product">
                <img src="assets/img/camiseta.png">
                <h2>Camiseta Azul</h2>
                <p>30 euros</p>
                <a href="" class="button">Comprar</a>
            </div>

            <div class="product">
                <img src="assets/img/camiseta.png">
                <h2>Camiseta Azul</h2>
                <p>30 euros</p>
                <a href="" class="button">Comprar</a>
            </div>

        </div>
    </div>
    <!--Pie de pagina-->

    <footer id="footer">
    <p>Desarrollado por Cecilia Garcia &copy;<?php date("Y")?></p>
    </footer>
</body>
</html>