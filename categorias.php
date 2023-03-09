<?php 
    require "area_controle.php"; 
?>
<?php if(isset($_SESSION['categoria-alterada'])){?>
    <?php if($_SESSION['categoria-alterada'] == 'sim'){?>
        <section class='row'>
            <h2 class="produto-salvo">Alteração realizada com sucesso!</h2>
        </section>
    <?php }?>
    <?php if($_SESSION['categoria-alterada'] == 'nao'){?>
        <section class='row'>
             <h2 class="produto-erro">Verifique se os dados foram preenchidos corretamente e tente novamente!</h2> 
        </section>
    <?php }?>
<?php }?>
<?php if(isset($_SESSION['escolherCategoria'])){?>
    <section class='row'>
    <form action="area_controle.php?acao=remover-categoria" method="POST" class="row form-config" enctype="multipartform-data">
        <select name="categoria" id="categoria_remover" class='categoria'>
            <optgroup>
                <option value="vazio" disabled selected>Selecione a categoria</option>
                <?php foreach($categorias as $indece => $categoria){?>
                <option value="<?=$categoria['nome_categoria']?>"><?=$categoria['nome_categoria']?></option>
                <?php }?>
            </optgroup>
        </select>             
    </form>
        <button class='button-editar' onclick="editarCategoria('form-remover-categoria', 'remover')">Remover</button>
    </section>
<?php }?>
