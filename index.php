<!DOCTYPE html>
<?php 
session_start();
// $_SESSION['login'] = '';//para que a mensagem de erro de login não seja exibido
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/script.js"></script>
        <!-- script carousel -->
        <script src="js/carousel.js" defer></script>
        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/f29238e7e8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/carousel.css">
        <link rel="stylesheet" href="css/carrinho.css">
    
        <link rel="shortcut icon" href="img/icone_titulo.jpg" type="image/x-icon">
        <title>Super Nunes</title>
    </head>
    <body onload="requisitarPagina('container', 'conteudo_principal.php')">
        <main>
            <header>  
                <a><img src="img/logo_2.jpg" width="500px" alt=""></a>
                <ul>
                    <li>
                        <a href="#" onclick="requisitarPagina('container', 'conteudo_principal.php')">Home</a>
                    </li>
                    <li>
                        <a href="#">Alimentos</a>
                    </li>
                    <li>
                        <a href="#">Higiene</a>
                    </li>
                    <li>
                        <a href="#">Gelados</a>
                    </li>
                    <li>
                        <a href="#">Outros</a>
                    </li>
                    <li>
                        <a href="#" onclick="requisitarPagina('container', 'admin.php')">Admin</a>
                    </li>
                </ul>

                <section>
                    <ul id="ul-rigth">
                        <li>
                            <a href=""><i class="fa-solid fa-question"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-phone"></i></a>
                        </li>
                        <li>
                            <a onclick= "requisitarPagina('container', 'carrinho.html')"><i class="fa-solid fa-basket-shopping"></i></a>
                        </li>
                    </ul>
                </section>
                <section>
                    <ul id="ul-login">
                    <?php if(isset($_SESSION['login']) && isset($_GET['login']) && $_SESSION['login'] == 'aceito'){?>
                        <li>
                            <a href="login.php?pagina=login">Olá Lorran<i class="fa-solid fa-user icon-login"></i></a>
                        </li>       
                    <?}else{?>
                        <li>
                            <a href="login.php?pagina=login">Fazer login<i class="fa-solid fa-user icon-login"></i></a>
                        </li> 
                    <?}?> 
                    </ul>
                </section>
               
                    <form action="" class="form-pesquisa">
                        <input type="text" placeholder="Pesquisar">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>    
                    </form>
           
            </header>
            <section id="container">

            </section>
            <footer class="sombra">
                <section class="row voltar-inicio">
                    <h2><a href="#" Target="_top">voltar ao inicio</a></h2>
                </section>
                <section class="row">
                     <section class="conteudo-footer">
                        <h1>Sobre Nós</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos doloremque accusamus sunt non doloribus in at dicta, temporibus, iste aliquam minus harum, t inventore?</p>
                     </section>
                     <section class="conteudo-footer">
                        <h1>Nossas redes sociais</h1>
                        <section class="row">
                            <a href="https://www.instagram.com/supernuness/?hl=pt" >
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            
                        </section>
                    </section>
                    <section class="conteudo-footer">
                       <h1>Pagamentos</h1>
                       <section class="row">
                            <i class="fa-brands fa-pix"></i>
                            <i class="fa-regular fa-credit-card"></i>
                            <i class="fa-regular fa-money-bill-1"></i>
                       </section>
                    </section>
                    <sec class="conteudo-footer">
                        <img src="img/logo_2.png" alt="">
                    </sec>
                    
                 
                </section>
               
            </footer>
            
        </main>
    </body>                                         
</html>