<?php
require 'area_controle.php';
?>


<h1 class="titulos-produtos">Resultado da pesquisa</h1>
<section class="row"  >

    <?php if(sizeof($resultado_pesquisa) == 0){?>
        <h4>Nenhum resultado decorrente da sua pesquisa</h4>                                    
    <?} ?>
    
    <section id='produtos-confira' class="rowPesquisa row-produtos">
    <?php foreach($resultado_pesquisa as $indece => $produto){?>
        <section class="container-produto sombra resultadoPesquisa">
            <img src="arquivos/img_banco_dados/<?=$produto['imagem']?>"  alt="">
            <h4><?= $produto['nome']?></h4>
            <p class='descricaoProduto'><?= $produto['descricao']?></p>
            <h3><?= number_format($produto['preco'], 2, ',', '.')?></h3>
            <i class="fa-solid fa-star icon-star"></i>
            <i class="fa-solid fa-cart-plus icon-buy"></i>
        </section>
    <?}?>
    </section>
</section>