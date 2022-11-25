<!-- 
     criar uma area que mostre todos os detalhes dos produtos cadatrados tipo
total produtos
total produtos por categoria
quantiade de estoque
para que o admim possa estar por dentro de todos os detalhes 
-->
<?php
$acao = 'recuperarCategorias';
require "area_controle.php"; 
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
    <section class="row">
    <form action="area_controle.php?acao=salvar-produto" method="POST" class="row form-admin" enctype="multipart/form-data">
            <section class="form-campo1 coluna">

                <label for="">Escolha a imagem do produto:</label>
                <input type="file" name="arquivo" id="">

            </section>
            <section class="form-campo2 coluna">  
        
                <label for="">Digite o nome do produto:</label>
                <input type="text" placeholder="nome do produto" name="nome">

                <label for="">Digite a descrição do produto:</label>
                <textarea name="descricao" cols="45" rows="5" placeholder="Digite a descrição do produto"></textarea>

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
                <input type="submit" value="Salvar" class="botao-salvar" >

            </section>
            
        </form>
       
        
    </section>
    
 
    
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
        <section class="categoria-nova">
            <form action="area_controle.php?acao=salvar-categoria" method="POST" class="row form-admin" enctype="multipart/
            form-data" >
                <input type="text" placeholder="Digite a nova categoria que deseja adicionar" name="categoria">
                <button>Salvar</button>
            </form>
        </section>
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
        <section class="categoria-nova">
            <form action="area_controle.php?acao=remover-categoria" method="POST" class="row form-admin" enctype="multipart/
            form-data" >
                <select name="categoria" id="remover">
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

    
            
</section>
<!-- Editar Produtos -->

<section class="carrinho-caixa sombra">
    <section class="borda-bottom">
    <h2>Editar Produto</h2>
    <?php if(isset($_SESSION['id_valido']) && $_SESSION['id_valido'] == 'nao'){?>
            
            <h2 class="produto-erro">Verifique se voce selecionou um produto</h2>
    <?}?>
    <?php if(isset($_SESSION['alteracao']) && $_SESSION['alteracao'] == 'sucesso'){?>
            
            <h2 class="produto-salvo">Alteração realizada com sucesso!</h2>
    <?}?>
    </section>
    <?php if(isset($produtoEditar)){?>
         <form action="area_controle.php?acao=removerProduto" method="POST" class="row form-admin" enctype="multipart/form-data">
            <section class="form-campo1 coluna">

                <label for="">Escolha a imagem do produto:</label>
                <input type="file" name="arquivo">

            </section>
            <section class="form-campo2 coluna">  
        
                <label for="">Digite o nome do produto:</label>
                <input type="text" placeholder="nome do produto" name="nome" value="<?=$produtoEditar[0]['nome']?>">

                <label for="">Digite a descrição do produto:</label>
                <textarea name="descricao" cols="45" rows="5"  placeholder="<?=$produtoEditar[0]['descricao']?>"></textarea>

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

                <input type="submit" value="Salvar" class="botao-salvar" name= 'button' >
                <input type="submit" value="Remover" class="botao-remover" name= 'button' >

            </section>
            
        </form>
    <?}else{?>
      
        <section class="row ">
            <section class="categoria-nova">
                <form action="area_controle.php?acao=editarProduto" method="POST" class="row form-admin" enctype="multipart/
                form-data" >
                    <select name="id_produto" id="remover" oninput="editarProduto()">
                        <optgroup>
                            <option value="vazio" disabled selected>Selecione o produto que deseja editar</option>
                            <?php foreach($produtosCadastrados as $indece => $produto){?>
                                <option value="<?=$produto['id_produto']?>" class="teste"><?=$produto['nome']?></option>
                            <?}?>
                        </optgroup>
                    </select>
                    <button>Editar</button>
                </form>
            </section>
        </section>
    <?}?>
    
            
</section>
