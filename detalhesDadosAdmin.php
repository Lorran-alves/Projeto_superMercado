<?php
    
    require 'area_controle.php';
    
?>

<section class="borda-bottom">
    <h2>Detalhes Produtos cadastrados</h2>
</section>
<section class="row">
    <section style="width:35%;"><!-- estilo 1   -->
        <h4>total Produtos cadastrados:<?=$totalProdutos['total_produtos']?></h4>
        <h4>total Categorias cadastradas: <?=$totalCategorias['total_categorias_cadastradas'];?></h4>
        <h4>total Usuarios cadastradas: <?=$totalUsuarios['total_usuarios'];?></h4>
        <button class="buttonTodosProdutos" onclick="requisitarPagina('pesquisa_admin', 'pesquisa_admin.php?filtro=todos')">Ver Todos os Produtos</button>
    </section>
    <section style="width:35%;"><!-- estilo 2 -->
        <h4>filtro por categoria</h4>
        <form  class="form-admin align-form">
        <select name="categoria" id="categoria">
            <optgroup>
                <option value="vazio" disabled selected>Selecione a categoria</option>
                <?php foreach($categorias as $indece => $categoria){?>
                <option value="<?=$categoria['nome_categoria']?>" onclick="teste('teste')" id="<?=$categoria['nome_categoria']?>" ><?=$categoria['nome_categoria']?></option>
                <?}?>
            </optgroup>
        </select>            
        </form>
        <section class ='row'>
            <button class="button-filtro" onclick="verificaFiltro('categoria')" >Verificar</button>
        </section>
        
        
    </section>
    <section class='form-campo3'><!-- estilo 3 -->
    <h4>filtro por nome/descrição (pesquisa)</h4>
        <form class="form-admin align-form">
            <input type="text" placeholder="Digite o que deseja pesquisar!" name="busca" id="busca">
        </form>
        <section class='row'>
            <button class="button-filtro" onclick="verificaFiltro('busca')">Verificar</button>
        </section>
        
    </section>
    
</section>
    <section id='dados_produto'>
        <!-- area dos dados dos produtos -->
    </section>