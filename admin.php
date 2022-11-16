
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

<section class="carrinho-caixa sombra">
    <section class="borda-bottom">
    <h2>Remover Categoria</h2>
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

