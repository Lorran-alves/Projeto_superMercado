<?php 

// $acao = 'editarProduto';

require "area_controle.php"; 
// echo $_GET['id_produto']
//parei aqui pra fzer a requisção e recarrecar o produto que ira ser editado
// echo $_GET['id_produto'];


?>


<!-- area odne o produto irá ser editado -->
<?php if($_GET['area'] == "editar"){?>
        
    <form action="area_controle.php?acao=editarProduto&id_produto=<?=$_GET['id_produto']?>" method="POST" class="form-admin" enctype="multipart/form-data">
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
            <input type="submit" value="Salvar" class="botao-salvar" name= 'button'>
            <input type="submit" value="Remover" class="botao-remover" name= 'button'>
        <input type="submit" value="Cancelar" class="botao-cancelar" name= 'button'>
        </section>
           
    </form> 
        
<?}?>

<!-- area de escolher o produto a ser editado -->
<?php if($_GET['area'] == "escolher"){?>
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