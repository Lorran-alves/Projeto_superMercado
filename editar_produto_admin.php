<?php 
require "area_controle.php"; 
?>
<?php if(isset($_SESSION['alteracao']) && $_SESSION['area'] != 'adicionar'){?><!-- FEEDBACK PARA O USUARIO -->   
    <script>atualizaDadosAdmin()</script>
        <?php if($_SESSION['alteracao'] == 'invalida'){?>
            <h2 class="produto-erro">Verifique se voce selecionou um produto</h2>
        <?php }?>
        <?php if($_SESSION['alteracao'] == 'sucesso'){?>
            <h2 class="produto-salvo">Alteração realizada com sucesso!</h2>
        <?php }?>
        <?php if($_SESSION['alteracao'] == 'falso'){?>            
            <h2 class="produto-erro">Verifique se você preencheu os dados corretamente e tente novamente</h2>
        <?php }?>   
<?php }?> 
<?php if(isset($_SESSION['area']) && $_SESSION['area'] == 'adicionar'){?>       
    <script>atualizaDadosAdmin()</script>
    <?php if($_SESSION['alteracao'] == 'invalida'){?>
        <h2 class="produto-erro">Verifique se voce selecionou um produto</h2>
    <?php }?>
    <?php if($_SESSION['alteracao'] == 'sucesso'){?>
        <h2 class="produto-salvo">Alteração realizada com sucesso!</h2>
    <?php }?>
    <?php if($_SESSION['alteracao'] == 'falso'){?>            
        <h2 class="produto-erro">Verifique se você preencheu os dados corretamente e tente novamente</h2>
    <?php }?>   
<?php }?> 
<?php if(isset($_SESSION['area']) && $_SESSION['area'] == "editar"){?><!-- area odne o produto irá ser editado -->
    <section class="row">
        <form class="form-admin" enctype="multipart/form-data" method="POST">
            <section class="row-form">
                <section class="form-campo1 coluna">
                    <h4>Escolha a imagem do produto:</h4>
                    <label for="inputArquivo" class='files' id='labelEdicao' >enviar arquivo</label>
                    <input type="file" name="arquivo" id="inputArquivo" oninput="verificaImagem('inputArquivo', 'labelEdicao')">
                    <h4>Digite a descrição do produto:</h4>
                    <textarea id="descricao" name="descricao" cols="45" rows="10"  placeholder="<?=$produtoEditar[0]['descricao']?>"></textarea>
                </section>
                    <section class="form-campo2 coluna">  
                        <h4>Digite o nome do produto:</h4>
                        <input id='nome' type="text" placeholder="nome do produto" name="nome" value="<?=$produtoEditar[0]['nome']?>">

                        <h4>Digite a categoria do produto:</h4>              
                        <select name="categoria" id="categoria" >
                            <optgroup>
                                <option value="vazio" disabled selected>Selecione a categoria</option>
                                <?php foreach($categorias as $indece => $categoria){?>
                                    <?php if($categoria['nome_categoria'] == $produtoEditar[0]['categoria']){?>
                                        <option value="<?=$categoria['nome_categoria']?>" selected><?=$categoria['nome_categoria']?></option>
                                    <?php }else{?>
                                        <option value="<?=$categoria['nome_categoria']?>"><?=$categoria['nome_categoria']?></option>
                                    <?php }?>
                                <?php }?>
                            </optgroup>
                        </select>
                    </section>
                    <section class="form-campo3">
                        <h4>Digite a quantidade em estoque:</h4>
                        <input id='quantidade' type="number" placeholder="Quantidade do estoque" name="estoque" min="1" value="<?=$produtoEditar[0]['estoque']?>"> 

                        <h4>Digite a valor do produto:</h4>
                        <input id='valor' type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Digite o valor do produto" name="preco" value="<?=$produtoEditar[0]['preco']?>">
                    </section>
            </section>
        </form> 
    </section>
    <section class="row">
            <input type="submit" value="Salvar" class="botao-salvar" name= 'button' onclick="requisitarPaginaEdicao('Salvar', <?=$_GET['id_produto']?>, 'containerEdicao', 'editarProduto')">
            <input type="submit" value="Remover" class="botao-remover" name= 'button' onclick="requisitarPaginaEdicao('Remover', <?=$_GET['id_produto']?>, 'containerEdicao', 'editarProduto')">
             <input type="submit" value="Cancelar" class="botao-cancelar" name= 'button'  onclick="requisitarPaginaEdicao('Cancelar', <?=$_GET['id_produto']?>, 'containerEdicao', 'editarProduto')">
    </section>
    <?php }?>
<?php if(isset($_SESSION['area']) && $_SESSION['area'] == "escolher" ){?><!-- area de escolher o produto a ser editado -->
    
    <section class='row'>
        <form  class="form-config">
            <select name="id_produto"  class='categoria' id="editar">
                <optgroup>
                    <option value="vazio" disabled selected>Selecione o produto que deseja editar</option>
                    <?php foreach($produtosCadastrados as $indece => $produto){?>
                        <option value="<?=$produto['id_produto']?>" class="teste"><?=$produto['nome']?></option>
                    <?php }?>
                </optgroup>
            </select>
        </form>
    <button class='button-editar' onclick='resgatarProdutoEditar("editar")'>Editar</button>           
    </section>
<?php }?>

