<!DOCTYPE html>
<?php 
 

$acao = 'recuperarDados';

if(isset($_GET['acao']) && $_GET['acao'] == 'busca'){
    $acao = 'busca';
    
}




require "area_controle.php";


$_SESSION['pagina'] = isset($_GET['pagina'])? $_GET['pagina']:1;
// $_SESSION['login'] = '';//para que a mensagem de erro de login não seja exibido
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/script.js"></script>
        <!-- script carousel -->
        <!-- <script src="js/carousel.js" defer></script> -->
        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/f29238e7e8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/carousel.css">
        <link rel="stylesheet" href="css/carrinho.css">
    
        <link rel="shortcut icon" href="img/icone_titulo.jpg" type="image/x-icon">
        <title>Super Nunes</title>
    </head>
    <body > 
        
        <main>
            <header>  
                <a><img src="img/logo_2.jpg" width="500px" alt=""></a>
                <ul>
                    <?php if(isset($_GET['acao']) && $_GET['acao'] == 'busca' || isset($_GET['pagina'])){?>
                        <li>
                            <a href="index.php">Home</a>
                        </li>    
                    <?}else{?>
                        <li>
                            <a href="#" onclick="requisitarPagina('container', 'conteudo_principal.php')">Home</a>
                        </li>
                    <?}?>
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
                    <?php if(isset($_GET['acao']) && $_GET['acao'] == 'busca'){?>
                        <li>
                            <a href="admin.php">Admin</a>
                        </li>
                    <?}else{?>
                        <li>
                            <a href="#" onclick="requisitarPagina('container', 'admin.php')">Admin</a>
                        </li>
                    <?}?>
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
                            <a onclick= "requisitarPagina('container', 'carrinho.php')"><i class="fa-solid fa-basket-shopping"></i></a>
                        </li>
                    </ul>
                </section>
                <section>
                    <ul id="ul-login">
                    <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'aceito' && isset($dadosUsuario)){?>
                        <li>
                            <a href="login.php?pagina=login">Olá, <?=$dadosUsuario['nome']?><i class="fa-solid fa-user icon-login"></i></a>
                        </li>       
                    <?}else{?>
                        <li>
                            <a href="login.php?pagina=login">Fazer login<i class="fa-solid fa-user icon-login"></i></a>
                        </li> 
                    <?}?> 
                    </ul>
                </section>
               
                <form action="index.php" method="GET" class="form-pesquisa">
                    <input type="text" name="acao" value="busca" class="busca">
                    <input type="text" placeholder="Pesquisar" name='pesquisa'>
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>    
                </form>
           
            </header>
            
            <section id="container">
            <?php if(!isset($_GET['acao']) && $_GET['acao'] != 'busca' && $_GET['acao'] != 'carrinho'){?>?>
                <script>requisitarPagina('container', 'admin.php')</script>
                <!-- <script src="js/carousel.js" defer></script> -->
            <?} if(isset($_GET['pagina']) && $_GET['pagina'] == 'carrinho'){?>
                
                <script>requisitarPagina('container', 'carrinho.php')</script>
               
            <?}?>
                
               <?php 
                if(isset($_GET['acao']) && $_GET['acao'] == 'busca'){?>
                    <h1 class="titulos-produtos">Resultado da pesquisa</h1>
                    <section class="row"  >
                    
                        <?php if(sizeof($resultado_pesquisa) == 0){?>
                            <h4>Nenhum resultado decorrente da sua pesquisa</h4>                                    
                        <?} ?>
                      
                        <section id='produtos-confira' class="row row-produtos">
                        <?php foreach($resultado_pesquisa as $indece => $produto){?>
                            <section class="container-resultado sombra">
                                <img src="arquivos/img_banco_dados/<?=$produto['imagem']?>"  alt="">
                                <h4><?= $produto['nome']?></h4>
                                <p><?= $produto['descricao']?></p>
                                <h3><?= number_format($produto['preco'], 2, ',', '.')?></h3>
                                <i class="fa-solid fa-star icon-star"></i>
                                <i class="fa-solid fa-cart-plus icon-buy"></i>
                            </section>
                        <?}?>
                        </section>
                    </section>
               <?}?>
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