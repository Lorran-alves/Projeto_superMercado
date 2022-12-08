<!-- 
     criar uma area que mostre todos os detalhes dos produtos cadatrados tipo
total produtos
total produtos por categoria
quantiade de estoque
para que o admim possa estar por dentro de todos os detalhes 


///apagar tudo que tiver a class categoria-nova//


// quando voltar irei tentar usar menos a açao recuperarCategorias // 


-->
<?php
$acao = 'recuperarCategorias';
require "area_controle.php";
?>

<!-- MELHORARA AQUI A QUESTÃO DE ADICIONAR UM PRODUTO -->
<section class="carrinho-caixa sombra">
    <section class="">
    <h2>Cadastrar novo produto</h2>
    </section>
   <section id='feedback-resultado'>
        <h4>teste</h4>
   </section>
   
    <section class="row borda-top">
        <form class="form-admin" enctype="multipart/form-data" method="POST">
            <section class="row">
                <section class="form-campo1 coluna">
                    <label for="">Escolha a imagem do produto:</label>
                    <input type="file" name="arquivo" id="inputArquivo">
                    <label for="">Digite a descrição do produto:</label>
                    <textarea id="descricao" name="descricao" cols="45" rows="10" placeholder="Digite a descrição do produto"></textarea>
                </section>
                    <section class="form-campo2 coluna">  
                        <label for="">Digite o nome do produto:</label>
                        <input id='nome' type="text" placeholder="nome do produto" name="nome">

                        <label for="">Digite a categoria do produto:</label>              
                        <select name="categoria" id="categoria" >
                            <optgroup>
                                <option value="vazio" disabled selected>Selecione a categoria</option>
                                <?php foreach($categorias as $indece => $categoria){?>
                                    <?if($categoria['nome_categoria'] == $produtoEditar[0]['categoria']){?>
                                        <option value="<?=$categoria['nome_categoria']?>" selected><?=$categoria['nome_categoria']?></option>
                                    <?}else{?>
                                        <option value="<?=$categoria['nome_categoria']?>"><?=$categoria['nome_categoria']?></option>
                                    <?}?>
                                <?}?>
                            </optgroup>
                        </select>
                    </section>
                    <section class="form-campo3">

                        <label for="">Digite a quantidade em estoque do produto:</label>
                        <input id='quantidade' type="number" placeholder="Quantidade do estoque" name="estoque" min="1"> 

                        <label for="">Digite a valor do produto:</label>
                        <input id='valor' type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Digite o valor do produto" name="preco">
                    </section>
            </section>
        </form> 
    </section>
    <section class="row">
            <input type="submit" value="Salvar" class="botao-salvar" name= 'button'>
            <input type="submit" value="Remover" class="botao-remover" name= 'button'>
             <input type="submit" value="Cancelar" class="botao-cancelar" name= 'button'onclick="requisitarPaginaEdicao('Cancelar', '10', 'feedback-resultado', 'salvarProduto')">
    </section>    
</section>

 

<!-- cadastrar nova categoria -->
<section class="carrinho-caixa sombra">
    <section class="borda-bottom">
    <h2>Cadastrar nova Categoria</h2>
        <section id='categoria-salva'>
          <!-- AQUI É ONDE IRÁ FICAR O CONTEUDO DE FEEDBACK PARA O USUARIO  -->
        </section>
    </section>

    
    <section class="row ">
            <form action="area_controle.php?acao=salvar-categoria" method="POST" class="row form-config" enctype="multipart/
            form-data" >
                <input type="text" placeholder="Digite a nova categoria que deseja adicionar" name="categoria" class='categoria' id='categoria-nova'>
            </form>
            <button class='button-editar' onclick="editarCategoria('categoria-salva', 'salvar')">Salvar</button>
    </section>
            
</section>
<!-- remover categoria -->

<section class="carrinho-caixa sombra">
       
            <button class="atualizar" onclick="atualizarCategorias('form-remover-categoria')">Atualizar</button>
       
    <section class="borda-bottom">
        <h2>Remover Categoria</h2>
        <p>Obs: se  voce remover alguma categoria todos os produtos que possuirem essa categoria seram removidos juntamente</p>
        
        
        <section id='categoria-remover'>
            <!-- AQUI É ONDE IRÁ FICAR O CONTEUDO DE FEEDBACK PARA O USUARIO  -->
        </section>
    </section>
    

    <section class="coluna" id='form-remover-categoria'>
        
        <section class='row'>
            <!-- AQUI É ONDE IRÁ FICAR O CONTEUDO DE FEEDBACK PARA O USUARIO  -->
            <form action="area_controle.php?acao=remover-categoria" method="POST" class="row form-config" enctype="multipart/
                form-data" >
                <select name="categoria" id="categoria_remover" class='categoria'>
                    <optgroup>
                        <option value="vazio" disabled selected>Selecione a categoria</option>
                        <?php foreach($categorias as $indece => $categoria){?>
                        <option value="<?=$categoria['nome_categoria']?>"><?=$categoria['nome_categoria']?></option>
                        <?}?>
                    </optgroup>
                </select>             
            </form>
                <button class='button-editar' onclick="editarCategoria('form-remover-categoria', 'remover')">Remover</button>
        </section>
       
    </section>

    
            
</section>
<!-- Editar Produtos -->

<section class="carrinho-caixa sombra" >
    <section class="">
        <h2>Editar Produto</h2>
    </section>
    <!-- proximo passo também será dar um foco maior na seção de edição do produto -->                 
    <section class="coluna" id="containerEdicao">   <!-- AREA DA ESCOLHA DO PRODUTO A SER EDITADO -->
       <section class='row'>
           <form  class="form-config" >
               <select name="id_produto"  class='categoria' id="editar">
                   <optgroup>
                       <option value="vazio" disabled selected>Selecione o produto que deseja editar</option>
                       <?php foreach($produtosCadastrados as $indece => $produto){?>
                           <option value="<?=$produto['id_produto']?>" class="teste"><?=$produto['nome']?></option>
                       <?}?>
                   </optgroup>
               </select>
           </form>
           <button class='button-editar' onclick='resgatarProdutoEditar("editar")'>Editar</button>    
       </section>
    </section>                            
</section>



<section class="caixa sombra">
    <section class="borda-bottom">
        <h2>Detalhes Produtos cadastrados</h2>
    </section>
    <section class="row">
        <section style="width:35%;"><!-- estilo 1   -->
            <h4>total Produtos cadastrados:<?=$totalProdutos['total_produtos']?></h4>
            <h4>total Categorias cadastradas: <?=$totalCategorias['total_categorias_cadastradas'];?></h4>
            <h4>total Usuarios cadastradas: <?=$totalUsuarios['total_usuarios'];?></h4>
            <button class="categoria" onclick="requisitarPagina('pesquisa_admin', 'pesquisa_admin.php?filtro=todos')">Ver Todos os Produtos</button>
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
            <button class="button-estilo" onclick="verificaFiltro('categoria')" >Verificar</button>
           
        </section>
        <section style="width:35%;"><!-- estilo 3 -->
        <h4>filtro por nome/descrição (pesquisa)</h4>
            <form class="form-admin align-form">
                <input type="text" placeholder="Digite o que deseja pesquisar!" name="busca" id="busca">
            </form>
            <button class="button-estilo" onclick="verificaFiltro('busca')">Verificar</button>
        </section>
        
    </section>
    <section id='dados_produto'>
        <!-- area dos dados dos produtos -->
    </section>
</section>
        <section class="row" id="pesquisa_admin" >            
            <!-- CONTEUDO PESQUISA ADMIN -->
        </section>

        <!-- criar aqui uma area em que ficará em alerta todos os pedidos que estiverem com o estoque a baixo de 20 -->