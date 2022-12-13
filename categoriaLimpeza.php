<?php 
    require "area_controle.php";
?>
<i class="fa-solid fa-caret-left left"  onclick="requisitarPagina('containerLimpeza', 'categoriaLimpeza.php?acao=recuperarProdutosPorCategoria&categoria=Higiene&lado=left')"></i>
<i class="fa-solid fa-caret-right right" onclick="requisitarPagina('containerLimpeza', 'categoriaLimpeza.php?acao=recuperarProdutosPorCategoria&categoria=Higiene&lado=right', 'gif_produtos.php')"></i>
<section id='produtos-limpeza' class="row row-produtos">
    <?php foreach($produtos as $indece => $produto){?>
        <section class="container-produto sombra">
            <img src="arquivos/img_banco_dados/<?=$produto['imagem']?>"  alt="">
            <h4><?= $produto['nome']?></h4>
            <h3><?= number_format($produto['preco'], 2, ',', '.')?></h3>
            <i class="fa-solid fa-star icon-star"></i>
            <i class="fa-solid fa-cart-plus icon-buy" onclick="requisitarPagina('container', 'carrinho.php?id_produto=<?=$produto['id_produto']?>')" ></i>
        </section>
    <?}?>
</section>