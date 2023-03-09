<?php
    require "area_controle.php";
?>
<!--  CASO SEJA FEITO ALGUMA MODIFICAÇÃO OS DADOS SERÃO ATUALIZADOS -->
<?php if(isset($_SESSION['alteracao']) && $_SESSION['area'] != 'adicionar'){?>      
    <!-- <script>atualizaDadosAdmin()</script> -->
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
    <!-- <script>atualizaDadosAdmin()</script> -->
    <?php if(isset($_SESSION['alteracao'])){?>
        <?php if($_SESSION['alteracao'] == 'invalida'){?>
            <h2 class="produto-erro">Verifique se voce selecionou um produto</h2> 
        <?php }?>
        <?php if($_SESSION['alteracao'] == 'sucesso'){?>
            <h2 class="produto-salvo">Alteração realizada com sucesso!</h2>
        <?php }?>
        <?php if($_SESSION['alteracao'] == 'falso'){?>            
            <h2 class="produto-erro">Verifique se você preencheu os dados corretamente e tente novamente</h2>
        <?php }?> 
    <?}?>  
<?php }?> 
<section class='row'>
    <form  class="form-config" >
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