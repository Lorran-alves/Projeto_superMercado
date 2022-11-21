
<?php 
$acao = 'recuperarCarrinho';

require "area_controle.php";



?>


<section class="carrinho-caixa sombra">
    <section class="borda-bottom">
        <h2>Meu carrinho</h2>
    </section>
   
        <!-- inicio de cada pedido -->


        <?if(sizeof($carrinhoAtual) == 0){?><!--  array vazio  -->
            
        <?}else{?><!--  array não está vazia  -->
            <? foreach($carrinhoAtual as $indece => $produto){?>
               
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
                    <section class="quantidade-produto">
                        <h4>Quantidade</h4>
                        <select name="" id="">
                            <optgroup>
                                <option value="1">Qtd</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </optgroup>
                        </select>
                    </section>
                    <section class="valor-produto"> 
                        <section class=" linha-conteudo-duplo">
                            <h4 class="">Preço:</h4>
                            <h4 class=""><?=$produto['preco']?></h4>
                        </section>
                        <button class="button-remover">Remover</button>
                    </section>
                </section>
            </section>
            
        <?}}?>

        
        <!-- ate aquiii o fim do resumo do pedido -->
        <section class="info-precos-carrinho">
            <h2>Resumo do pedido</h2>
            <section class="row linha-conteudo-duplo">
                <h4 class="">2 Produtos</h4>
                <h4 class="">R$ 45,99</h4>
            </section>
            <section class="row linha-conteudo-duplo borda-bottom">
                <h4 class="">Frete</h4>
                <h4 class="">Grátis</h4>
            </section>
            <section class="row linha-conteudo-duplo total-pedido">
                <h4 class="">Total</h4>
                <h4 class="">45,99</h4>
            </section>
            <section class="row button-finalizar">
                <button>Finalizar pedido</button>
                
            </section>
        </section>
        
    </section>

   
