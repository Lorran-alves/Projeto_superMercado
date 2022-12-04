<?php
   $acao = 'pesquisa-admin';
   
   require "area_controle.php";
?>

<?php if(isset($_SESSION['resultado']) && sizeof($resultado) == 0 ){?>
        
     
    
        <section class="coluna">
        <h4>Nenhum resultado decorrente da sua pesquisa</h4>
            <?if(isset($busca)){?>
                <h4 class='titulo_pesquisa'>Palavra chave ultilizada: <?=$busca?></h4>
            <?}else if($filtro == "categoria"){?>
                <h4 class='titulo_pesquisa'>Categoria escolhida: <?=$categoria?></h4>
            <?}?>     
        </section>                                  
<?}else if(isset($resultado) && sizeof($resultado) != 0 ) {?>
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
                <a href="area_controle.php?acao=editarProduto&id_produto=<?=$produto['id_produto']?>"><i class="fa-solid fa-pen-to-square icon-edit"></i></a> 

            </section>
        <?}?>
    </section>

    </section>
<?}?>