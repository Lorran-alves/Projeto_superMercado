<?php
   $acao = 'pesquisa-admin';
    
   require "area_controle.php";
?>



<script>requisitarPagina('pesquisa_admin','pesquisa_admin.php?acao=pesquisa-admin')</script>
<?php if(isset($_SESSION['resultado'])){?>
    <h4>Nenhum resultado decorrente da sua pesquisa</h4>                                    
<?} ?>

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