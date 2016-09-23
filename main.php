<?
    session_start();
    try {
        if ($_SESSION['login'] != '1') header("Location: index.html");

    }
    catch (Exception $e) {
        header("Location: index.html");
    }
?>

<html>

<head>
    <meta charset="utf-8" />
    <link href="css/style.css" rel="stylesheet" />
    <title>Prueba 4</title>
</head>

<body>
    <button class="buttonLogout" onclick="window.location.href = 'logout.php';">Logout</button>

    <header>
        <h1>APPNET</h1>
        <img src="img/logo.png">
    </header>

    <nav class="menu">
        <ul>
            <li><a href="#">CLIENTES</a></li>
            <li><a href="#">PROVEEDORES</a></li>
            <li><a href="#">ALMACÉN</a></li>
            <li><a href="#">RRHH</a></li>
        </ul>
    </nav>

    <div class="main">
        <article class="content"></article>
    </div>

    <div class="beforeFooter">SÍGUENOS EN:
        <a href="#"><img src="img/f_twitter.png"></a>
        <a href="#"><img src="img/f_facebook.png"></a>
        <a href="#"><img src="img/f_google.png"></a>
        <a href="#"><img src="img/f_linkedin.png"></a>
    </div>

    <footer>
        <div class="contentFooter">
            <span>CONÓCENOS</span>
            <p><a href="#">Nuestra filosofía</a></p>
            <p><a href="#">Dónde estamos</a></p>
            <p><a href="#">Nuestros números</a></p>
        </div>
        <div class="contentFooter">
            <span>NOVEDADES</span>
            <p><a href="#">Blog</a></p>
        </div>
        <div class="contentFooter">
            <span>SOPORTE</span>
            <p><a href="#">FAQS</a></p>
            <p><a href="#">Sugerencias</a></p>
        </div>
        <div class="contentFooter">
            <span>POLÍTICA</span>
            <p><a href="#">Privacidad</a></p>
            <p><a href="#">Condiciones de uso</p>
            <p><a href="#">Aviso legal</a></p>
        </div>
    </footer>
</body>

</html>