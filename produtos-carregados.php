<?php 
$acao = 'recuperarProdutos';
require "area_controle.php";
?>
<?php foreach($produtos as $indece => $produto){?>
    <section class="container-produto sombra">
        <img src="arquivos/img_banco_dados/<?=$produto['imagem']?>"  alt="">
        <h4><?= $produto['nome']?></h4>
        <h3><?= number_format($produto['preco'], 2, ',', '.')?></h3>
        <i class="fa-solid fa-star icon-star"></i>
        <i class="fa-solid fa-cart-plus icon-buy" onclick="requisitarPagina('container', 'carrinho.php?id_produto=<?=$produto['id_produto']?>')" ></i>
    </section>
<?php }?>
