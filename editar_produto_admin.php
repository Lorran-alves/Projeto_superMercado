<?php 
if($_GET['id_produto']){
    $acao = $_GET['id_produto'];
}
// $acao = 'editarProduto';

require "area_controle.php"; 
// echo $_GET['id_produto']
//parei aqui pra fzer a requisção e recarrecar o produto que ira ser editado
// echo $_GET['id_produto'];

?>


<!-- area odne o produto irá ser editado -->
<?php if(isset($_SESSION['area']) && $_SESSION['area'] == "editar"){?>
        <section class="coluna">
        <form class="form-admin" enctype="multipart/form-data" method="POST">
        <section class="row">
            <section class="form-campo1 coluna">
                <label for="">Escolha a imagem do produto:</label>
                <input type="file" name="arquivo" id="inputArquivo">
                <label for="">Digite a descrição do produto:</label>
                <textarea id="descricao" name="descricao" cols="45" rows="10"  placeholder="<?=$produtoEditar[0]['descricao']?>"></textarea>
            </section>
                <section class="form-campo2 coluna">  
                    <label for="">Digite o nome do produto:</label>
                    <input id='nome' type="text" placeholder="nome do produto" name="nome" value="<?=$produtoEditar[0]['nome']?>">

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
                    <input id='quantidade' type="number" placeholder="Quantidade do estoque" name="estoque" min="1" value="<?=$produtoEditar[0]['estoque']?>"> 

                    <label for="">Digite a valor do produto:</label>
                    <input id='valor' type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Digite o valor do produto" name="preco" value="<?=$produtoEditar[0]['preco']?>">
                </section>
        </section>
    </form> 
    <section class="row">
            <input type="submit" value="Salvar" class="botao-salvar" name= 'button' onclick="requisitarPaginaEdicao('Salvar', <?=$_GET['id_produto']?>, 'containerEdicao')">
            <input type="submit" value="Remover" class="botao-remover" name= 'button' onclick="requisitarPaginaEdicao('Remover', <?=$_GET['id_produto']?>, 'containerEdicao')">
             <input type="submit" value="Cancelar" class="botao-cancelar" name= 'button'  onclick="requisitarPaginaEdicao('Cancelar', <?=$_GET['id_produto']?>, 'containerEdicao')">
        </section>
        </section>
       
            
    <?}?>

<!-- area de escolher o produto a ser editado -->
<?php if(isset($_SESSION['area']) && $_SESSION['area'] == "escolher" ){?>
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
        <button class='button-editar' onclick='resgatarProdutoEditar("editar")'>Editar</button>           
</section>
<?}?>