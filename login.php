<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/script.js"></script>
        <!-- script carousel -->
        <script src="js/senha.js" defer></script>
        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/f29238e7e8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/login.css">
        <link rel="shortcut icon" href="img/icone_titulo.jpg" type="image/x-icon">
        <title>Super Nunes</title>
    </head>
<body>
    <section class="caixa-formulario">
        <section>
            <img src="img/logo_2.png " width="250px" alt="">
        </section>
        <section id="conteudo-form">

        </section>
        <br><br>
        <?php if(isset($_GET) && $_GET['pagina'] == 'cadastro'){?>
            <script>requisitarPagina('conteudo-cadastro.php')</script>
        <?}?>
        <?php if(isset($_GET) && $_GET['pagina'] == 'login'){?>
            <script>requisitarPagina('conteudo-login.php')</script>
        <?}?>
    </section>
</body>
</html>