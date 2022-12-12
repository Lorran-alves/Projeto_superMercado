
<?php
    
    
    $acao = 'retornaDadosProduto';
    require "area_controle.php";
?>
<?php if(isset($dadosProduto)){?>

    <section class='row border-top'>
        <h4 class= ''>Detalhes do produto de id: <span class=''><?=$dadosProduto['id_produto']?></span></h4>
    </section>
    <section class="row">
        <section class="coluna itens-left">
            <h4 class= 'padding'>Estoque: <span class='conteudo-produto-span'><?=$dadosProduto['estoque']?></span></h4>
            <h4 class= 'padding'>Preço: <span class='conteudo-produto-span'><?=$dadosProduto['preco']?></span></h4>
            <h4 class= 'padding'>Nome: <span class='conteudo-produto-span'><?=$dadosProduto['nome']?></span></h4>
        </section>
        <section class='coluna'>
            <h4 class= 'padding'>Descrição: <span class='conteudo-produto-span'><?=$dadosProduto['descricao']?></span></h4>
            <h4 class= 'padding'>Categoria: <span class='conteudo-produto-span'><?=$dadosProduto['categoria']?></span></h4>
            <h4 class= 'padding'>Ultima atualização: <span class='conteudo-produto-span'><?=$data_brasileira?></span></h4>
        </section>
    </section>
<?}?>