<!-- PROXIMO É FAZER COM QUE O USUARIO POSSA SAIR DA SUA CONTA TAMBÉM -->


<!DOCTYPE html>
<?php 
 

$acao ='recuperarDados';
// $acao = 'teste';

if(isset($_GET['acao']) && $_GET['acao'] == 'busca'){
    $acao = 'busca';
}
require "area_controle.php";
$_SESSION['pagina'] = isset($_GET['pagina'])? $_GET['pagina']:1;
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/script.js"></script>   <!-- script total -->
        <script src="js/carousel.js"></script><!-- script carousel -->
        <script src="js/senha.js" defer></script>   <!-- script da senha -->
        <script src="https://kit.fontawesome.com/f29238e7e8.js" crossorigin="anonymous"></script><!-- FONT AWESOME -->
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/carousel.css">
        <link rel="stylesheet" href="css/carrinho.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="shortcut icon" href="img/icone_titulo.jpg" type="image/x-icon">
        <title>Super Nunes</title>
    </head>
    <body onload="carregaProdutos()"> 
        <main id='containerTotal'>
            <?php if(isset($_GET['area']) && $_GET['area'] == 'login'){?>
                <!-- VAI CAIR AQUI CASO O USUARIO QUEIRA FAZER O LOGIN OU CADASTRAR UMA NOVA CONTA -->
                <section class="caixa-formulario">

                    <section>
                        <img src="img/logo_2.png " width="250px" alt="">
                    </section>
                    <section id="conteudo-form">
                        <!-- ESSE CONTEUDO DA SECTION É DINAMICO POREM EU TIVE QUE COLOCAR UM PARA QUE FOSSE POSSIVEL COMEÇAR -->
                        <form class='formulario-login'>
                            <h1 class='autenticaoUsuario'>Login</h1>
                            <section class="secao-inputs">
                                <input type="text" placeholder="Digite o seu email" name="email" id='email'>
                                <i class="fa-solid fa-envelope iconFormularioUsuario"></i>
                            </section>
                            <section class="secao-inputs">
                                <input type="password" placeholder="Digite a sua senha" id="senhalogin" name="senha">
                                <i class="fa-solid fa-eye iconFormularioUsuario" id="iconLogin" onclick="verSenha('senhalogin','iconLogin')"></i>
                            </section>
                            <p>É novo por aqui?<a class='formularioUsuario' onclick="requisitarPagina('conteudo-form', 'conteudo-cadastro.php?area=cadastro')">Criar conta</a></p>
                            
                        </form>

                        <button class='buttonFormularioUsuario' onclick="loginOuCadastroUsuario('conteudo-form', 'conteudo-login.php?acao=login&area=autenticar', 'login', 'senhalogin')">Entrar</button>
                    </section>
                </section>
            <?}else{?>
             <!-- CASO O USUARIO QUEIRA NÃO APERTE EM NADA VAI SEGUIR O FLUXO NORMAL DO SITE -->
                <header>  
                    <a><img src="img/logo_2.jpg" width="500px" alt=""></a>
                    <ul>
                        <li>
                            <a onclick="requisitarPagina('container', 'conteudo_principal.php')">Home</a>
                        </li>                
                        <li>
                            <a href="#">Alimentos</a>
                        </li>
                        <li>
                            <a href="#">Higiene</a>
                        </li>
                        <li>
                            <a onclick="requisitarPagina('container', 'favoritos.php?acao=resgatarFavoritos')">Favoritos</a>
                        </li>
                        <?php if(isset($dadosUsuario['id_usuario']) && $dadosUsuario['id_usuario'] == 6){?>
                            <li>
                                <a onclick="requisitarPagina('container', 'admin.php')">Admin</a>
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
                            <li class=' coluna' >
                                <section class='centralizar' onclick='menuHeader()'>
                                    <p class='p-header'>Olá, <?= $dadosUsuario['nome']?></p><i class="fa-solid fa-bars iconMenu"></i>
                                </section>
                                <section class='menuInterativo' id='menuInterativo'>
                                    <ul class='coluna'>
                                        <li onclick='loginOuLogouf("logouf")'>Sair</li>
                                        <li onclick="editarConta()">Editar</li>
                                        <li>Ajuda</li>
                                    </ul>
                                </section>
                            </li>       
                        <?}else{?>
                            <li>
                                <a onclick="requisitarPagina('containerTotal', 'index.php?area=login')">Fazer login<i class="fa-solid fa-user icon-login"></i></a>
                            </li> 
                        <?}?> 
                        </ul>
                    </section>
                    <section class="form-pesquisa">
                            <form>
                                <input type="text" placeholder="Pesquisar" name='pesquisa' id='pesquisaUsuario'>                        
                            </form>
                            <button class='pesquisaCliente' onclick="pesquisaCliente('container', 'pesquisaProdutosClientes.php')"><i class="fa-solid fa-magnifying-glass"></i></button>    
                    </section>
                </header>
                <section id="container"><!-- CONTAINER QUE IRÁ CONTER O CONTEUDO PRINCIPAL DO SITE -->
                    <?php if(!isset($_GET['acao']) && $_GET['acao'] != 'busca' && $_GET['acao'] != 'carrinho'){?>
                        <script>requisitarPagina('container', 'conteudo_principal.php')</script> <!-- se o usuario seguir o fluxo normal a pagina vai ser requisitada -->
                    <?}?>
                </section><!-- FIM DO CONTAINER QUE IRÁ CONTER O CONTEUDO PRINCIPAL DO SITE -->
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
            <?}?>
        </main>
    </body>                                         
</html>