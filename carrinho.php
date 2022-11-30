
<?php 
$acao = 'recuperarCarrinho';

require "area_controle.php";

$precoTotal = 0;
$total_itens = 0;



?>


<section class="carrinho-caixa sombra">
    <section class="borda-bottom">
        <h2>Meu carrinho</h2>
    </section>
   
        <!-- inicio de cada pedido -->


        <?if(sizeof($carrinhoAtual) == 0){?><!--  array vazio  -->
            
        <?}else{?><!--  array não está vazia  -->
            <? foreach($carrinhoAtual as $indece => $produto){?>
               <?php 
                    $precoTotal += $produto['preco'] * $produto['quantidade'];
                    $total_itens += $produto['quantidade']
               ?>
                <section class="row">
                    <section class="img-carrinho borda-bottom">
                        <img src="arquivos/img_banco_dados/<?=$produto['imagem']?>" alt="">
                    </section>
                    <section class="descricao-carrinho row borda-bottom">
                        <section class="descricao-produto"> <!-- 60%-->
                            <h2><?=$produto['nome']?></h2>
                            <p><?=$produto['descricao']?></p>

                            <p class="estoque">estoque: <?=$produto['estoque']?> Unidades</p>
                            
                        </section>
                        <section class="quantidade-produto" oninput="calculaPedido(<?= $produto['estoque']?>, <?= $produto['id_produto']?>, <?=$indece?>)">
                            <h4>Quantidade</h4>
                            <input id="qtd<?=$indece?>" type="number" min='0' max = <?= $produto['estoque']?> value="<?=$produto['quantidade']?>">
                        </section>
                        <section class="valor-produto"> 
                            <section class=" linha-conteudo-duplo">
                                <h4 class="">Preço:</h4>
                                <h4 class=""><?=number_format($produto['preco'], 2,',', '.')?></h4>
                                
                                
                            </section>
                            <a href="area_controle.php?acao=removerProdutoCarrinho&id_produto=<?= $produto['id_produto']?>"><button class="button-remover">Remover</button></a>
                        </section>
                    </section>
                </section>
        <?}}?>
 
        <!-- ate aquiii o fim do resumo do pedido -->
        <?php if(sizeof($carrinhoAtual) > 0){?>
            <section class="info-precos-carrinho">
                <h2>Resumo do pedido</h2>

               <section class="row linha-conteudo-duplo">
                    <h4 class="">Total</h4>
                    <?php foreach($carrinhoAtual as $indece => $produto){?>
                        <?php  ?>
                    <?}?>
                    <h4 class="">R$ <?=number_format($precoTotal, 2,',', '.')?></h4>
               </section>
                        
                <section class="row linha-conteudo-duplo">
                    <h4>Total de itens</h4>
                    <h4 class=""><?=$total_itens ?></h4>
                </section>
                <section class="row linha-conteudo-duplo borda-bottom">
                    <h4 class="">Frete</h4>
                    <h4 class="">Grátis</h4>
                </section>
                <section class="row linha-conteudo-duplo total-pedido">
                    <h4 class="">Total</h4>
                    <h4 class=""><?=number_format($precoTotal, 2,',', '.')?></h4>
                </section>
                <section class="row button-finalizar">
                    <button>Finalizar pedido</button>
                </section>
            </section>
        <?}else{?>
            <h4>Carrinho vazio</h4>
        <?}?>
</section>
   
