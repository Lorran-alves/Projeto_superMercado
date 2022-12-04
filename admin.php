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
if(isset( $resultado)){
    echo '<pre>';
    //print_r( $resultado);
    echo '</pre>';
}

?>
<section class="carrinho-caixa sombra">
    <section class="borda-bottom">
    <h2>Cadastrar novo produto</h2>
    </section>
    <?php if(isset($_SESSION['produto-salvo']) && $_SESSION['produto-salvo'] == 'sim'){?>
        <h2 class="produto-salvo">Produto salvo com sucesso</h2>
    <?}?>
    <?php if(isset($_SESSION['produto-salvo']) && $_SESSION['produto-salvo'] == 'nao'){?>
        <h2 class="produto-erro">Verifique se os dados foram preenchidos corretamente e tente novamente</h2>
    <?}?>
   
    <form action="area_controle.php?acao=salvar-produto" method="POST"   enctype="multipart/form-data" class="form-admin">
            <section class="row">
                <section class="form-campo1 coluna">

                    <label for="">Escolha a imagem do produto:</label>
                    <input type="file" name="arquivo" id="">
                    <label for="">Digite a descrição do produto:</label>
                    <textarea name="descricao" cols="45" rows="5" placeholder="Digite a descrição do produto"></textarea>

                    </section>
                    <section class="form-campo2 coluna">  

                    <label for="">Digite o nome do produto:</label>
                    <input type="text" placeholder="nome do produto" name="nome">



                    <label for="">Digite a categoria do produto:</label>

                    <select name="categoria" id="" >
                        <optgroup>
                            <option value="vazio" disabled selected>Selecione a categoria</option>
                            <?php foreach($categorias as $indece => $categoria){?>
                            <option value="<?=$categoria['nome_categoria']?>"><?=$categoria['nome_categoria']?></option>
                            <?}?>
                        </optgroup>
                    </select>

                    </section>
                    <section class="form-campo3">
                    <label for="">Digite a quantidade em estoque do produto:</label>
                    <input type="number" placeholder="Quantidade do estoque" name="estoque" min="1" > 

                    <label for="">Digite a valor do produto:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Digite o valor do produto" name="preco"/>


                </section>
            </section>
            <section class="row-button-unico">
                <input type="submit" value="Salvar" class="botao-salvar-cadastro" >
            </section>
            
        </form>
       
        
    
    
 
    
</section>

<!-- cadastrar nova categoria -->
<section class="carrinho-caixa sombra">
    <section class="borda-bottom">
    <h2>Cadastrar nova Categoria</h2>
    </section>
    <?php if(isset($_SESSION['categoria-salva']) && $_SESSION['categoria-salva'] == 'sim'){?>
        <h2 class="produto-salvo">Categoria salva com sucesso</h2>
    <?}?>
    <?php if(isset($_SESSION['categoria-salva']) && $_SESSION['categoria-salva'] == 'nao'){?>
        <h2 class="produto-erro">Verifique se os dados foram preenchidos corretamente e tente novamente</h2>
    <?}?>
    <section class="row ">
       
            <form action="area_controle.php?acao=salvar-categoria" method="POST" class="row form-config" enctype="multipart/
            form-data" >
                <input type="text" placeholder="Digite a nova categoria que deseja adicionar" name="categoria" class='categoria'>
                <button>Salvar</button>
            </form>
        
    </section>
            
</section>
<!-- remover categoria -->

<section class="carrinho-caixa sombra">
    <section class="borda-bottom">
    <h2>Remover Categoria</h2>
    <p>Obs: se  voce remover alguma categoria todos os produtos que possuirem essa categoria seram removidos juntamente</p>
    </section>
    <?php if(isset($_SESSION['categoria-removida']) && $_SESSION['categoria-removida'] == 'sim'){?>
        <h2 class="produto-salvo">Categoria removida com sucesso</h2>
    <?}?>
    <?php if(isset($_SESSION['categoria-removida']) && $_SESSION['categoria-removida'] == 'nao'){?>
        <h2 class="produto-erro">Verifique se os dados foram preenchidos corretamente e tente novamente</h2>
    <?}?>
    <section class="row ">
        
            <form action="area_controle.php?acao=remover-categoria" method="POST" class="row form-config" enctype="multipart/
            form-data" >
                <select name="categoria" id="remover" class='categoria'>
                    <optgroup>
                        <option value="vazio" disabled selected>Selecione a categoria</option>
                        <?php foreach($categorias as $indece => $categoria){?>
                        <option value="<?=$categoria['nome_categoria']?>"><?=$categoria['nome_categoria']?></option>
                        <?}?>
                    </optgroup>
                </select>
                <button>Remover</button>
            </form>
        
    </section>

    
            
</section>
<!-- Editar Produtos -->

<section class="carrinho-caixa sombra form-edit">
    <section class="borda-bottom">
    <h2>Editar Produto</h2>
    <?php if(isset($_SESSION['id_valido']) && $_SESSION['id_valido'] == 'nao'){?>
            
            <h2 class="produto-erro">Verifique se voce selecionou um produto</h2>
    <?}?>
    <?php if(isset($_SESSION['alteracao']) && $_SESSION['alteracao'] == 'sucesso'){?>
            
            <h2 class="produto-salvo">Alteração realizada com sucesso!</h2>
    <?}?>
    </section>
    <!-- proximo passo também será dar um foco maior na seção de edição do produto -->
    <?php if(isset($produtoEditar)){?>
        
        <form action="area_controle.php?acao=removerProduto" method="POST" class="form-admin" enctype="multipart/form-data">
        <section class="row">
            <section class="form-campo1 coluna">

                    <label for="">Escolha a imagem do produto:</label>
                    <input type="file" name="arquivo">
                    <label for="">Digite a descrição do produto:</label>
                    <textarea name="descricao" cols="45" rows="10"  placeholder="<?=$produtoEditar[0]['descricao']?>"></textarea>

                </section>
                <section class="form-campo2 coluna">  
            
                    <label for="">Digite o nome do produto:</label>
                    <input type="text" placeholder="nome do produto" name="nome" value="<?=$produtoEditar[0]['nome']?>">


                    <label for="">Digite a categoria do produto:</label>              
                    <select name="categoria" id="" >
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
                    <input type="number" placeholder="Quantidade do estoque" name="estoque" min="1" value="<?=$produtoEditar[0]['estoque']?>"> 

                    <label for="">Digite a valor do produto:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Digite o valor do produto" name="preco" value="<?=$produtoEditar[0]['preco']?>">


                </section>
        </section>
            <section class="row">
                <input type="submit" value="Salvar" class="botao-salvar" name= 'button' >
                <input type="submit" value="Remover" class="botao-remover" name= 'button' >
                <input type="submit" value="Cancelar" class="botao-cancelar" name= 'button' >
            </section>
            
        </form>
    <?}else{?>
      
        <section class="row" id="containerEdicao">
                <form  class="row form-config" >
                    <select name="id_produto"  class='categoria' id="editar">
                        <optgroup>
                            <option value="vazio" disabled selected>Selecione o produto que deseja editar</option>
                            <?php foreach($produtosCadastrados as $indece => $produto){?>
                                <option value="<?=$produto['id_produto']?>" class="teste"><?=$produto['nome']?></option>
                            <?}?>
                        </optgroup>
                    </select>
                </form>
                <button class='button-editar' onclick='editarProduto("editar")'>Editar</button>           
        </section>
    <?}?>
    
    
            
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