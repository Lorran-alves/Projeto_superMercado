<?php 
$acao = 'resgatarFavoritos';
require "area_controle.php";
?>
<h4 class='tituloFavoritos'>Aqui estão os seus produtos favoritos</h4>
<section class="row" id="container">
    <?php if(isset($_SESSION['id_atual'])){?>
        <section id='produtos-novidades' class="row row-produtos">
            <?php foreach($favoritos as $indece => $produto){?>
                <section class="container-produto sombra">
                    <img src="arquivos/img_banco_dados/<?=$produto['imagem']?>"  alt="">
                    <h4><?= $produto['nome']?></h4>
                    <h3><?= number_format($produto['preco'], 2, ',', '.')?></h3>
                    <i class="fa-solid fa-star icon-star favorito"></i>
                    <i class="fa-solid fa-cart-plus icon-buy" onclick="requisitarPagina('container', 'carrinho.php?id_produto=<?=$produto['id_produto']?>&estoque=<?=$produto['estoque']?>')" ></i>
                </section>
            <?php }?>
        </section>        
    <?php }else{?>
        <h4>FAÇA LOGIN PARA QUE SEJA POSSIVEL FAVORITAR UM PRODUTO!</h1>
    <?php }?>
</section> 
