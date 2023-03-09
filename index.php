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
        <?php require_once("templates/head.php")?>  <!-- HEADER DO SITE  -->
        <title>Super Nunes</title>
    </head>
    <body onload="carregaProdutos()"> 
        <main id='containerTotal'>
            <?php if(isset($_GET['area']) && $_GET['area'] == 'login'){?>
                <!-- VAI CAIR AQUI CASO O USUARIO QUEIRA FAZER O LOGIN OU CADASTRAR UMA NOVA CONTA -->
                <?php require_once("conteudo-login.php")?>
            <?php }else{?>
             <!-- CASO O USUARIO QUEIRA NÃO APERTE EM NADA VAI SEGUIR O FLUXO NORMAL DO SITE -->
               <?php require_once("templates/topo.php")?> <!-- HEADER DO SITE  -->
               
                <section id="container"><!-- CONTAINER QUE IRÁ CONTER O CONTEUDO PRINCIPAL DO SITE -->
                    <?php if(!isset($_GET['acao']) && $_GET['acao'] != 'busca' && $_GET['acao'] != 'carrinho'){?>
                        <script>requisitarPagina('container', 'conteudo_principal.php')</script> <!-- se o usuario seguir o fluxo normal a pagina vai ser requisitada -->
                        <?php require_once("conteudo_principal.php")?>
                    <?php }?>
                </section><!-- FIM DO CONTAINER QUE IRÁ CONTER O CONTEUDO PRINCIPAL DO SITE -->
                <?php require_once("templates/footer.php")?>  <!-- HEADER DO SITE  -->
            <?php }?>
        </main>
    </body>                                         
</html>