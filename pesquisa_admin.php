<?php
   $acao = 'pesquisa-admin';
   
   require "area_controle.php";
?>
<!-- ICON PARA FECHAR A AREA DO RESULTADO DA PESQUISA -->

<?php if(isset($_SESSION['resultado']) && isset($resultado) && sizeof($resultado) == 0 ){?>
    <i class="fa-solid fa-xmark iconFechaPesquisa" onclick="fechaResultadoPesquisaAdmin()"></i> 
        <section class="coluna">
        <h4>Nenhum resultado decorrente da sua pesquisa</h4>
            <?if(isset($busca)){?>
                <h4 class='titulo_pesquisa'>Palavra chave ultilizada: <?=$busca?></h4>
            <?}else if($filtro == "categoria"){?>
                <h4 class='titulo_pesquisa'>Categoria escolhida: <?=$categoria?></h4>
            <?}?>     
        </section>                                  
<?}else if(isset($resultado) && sizeof($resultado) != 0 ) {?>
    <i class="fa-solid fa-xmark iconFechaPesquisa" onclick="fechaResultadoPesquisaAdmin()"></i> 
    <section class="coluna">
        <?if(isset($busca)){?>
            <h4 class='titulo_pesquisa'>Palavra chave ultilizada: <?=$busca?></h1>
        <?}else if($filtro == "categoria"){?>
            <h4 class='titulo_pesquisa'>Categoria escolhida: <?=$categoria?></h4>
        <?}?>     
        <section id='produtos-confira' class="row row-produtos">
        <?php foreach($resultado as $indece => $produto){?>
        
            <section class="container-produto sombra margin" onclick="requisitarPagina('dados_produto', 'dados_produtos.php?id_produto=<?=$produto['id_produto']?>')">
                <img src="arquivos/img_banco_dados/<?=$produto['imagem']?>"  alt="">
                <h4><?= $produto['nome']?></h4>
                
                <h3><?= number_format($produto['preco'], 2, ',', '.')?></h3>
                <i class="fa-solid fa-pen-to-square icon-edit" onclick="requisitarPagina('containerEdicao', 'editar_produto_admin.php?acao=recuperarProdutoEditar&area=editar&id_produto=<?=$produto['id_produto']?>')"></i>
            </section>
        <?}?>
    </section>

    </section>
<?}?>