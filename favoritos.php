<?php 
$acao = 'resgatarFavoritos';
require "area_controle.php";
echo '<pre>';
print_r($favoritos);
echo '<pre>';

?>

<h4 class='tituloFavoritos'>Aqui estão os seus produtos favoritos</h4>
<!-- vou trabalhar fazendo a parte de favoritar os produtos 
 -->
 <section class="row" id="container">

<section id='produtos-novidades' class="row row-produtos">
    <?php foreach($favoritos as $indece => $produto){?>
        <section class="container-produto sombra">
            <img src="arquivos/img_banco_dados/<?=$produto['imagem']?>"  alt="">
            <h4><?= $produto['nome']?></h4>
            <h3><?= number_format($produto['preco'], 2, ',', '.')?></h3>
            <i class="fa-solid fa-star icon-star"></i>
            <i class="fa-solid fa-cart-plus icon-buy" onclick="requisitarPagina('container', 'carrinho.php?id_produto=<?=$produto['id_produto']?>&estoque=<?=$produto['estoque']?>')" ></i>
</section>
       
    <?}?>
</section>        
</section> 