<?php 
    $acao = '';
    require "area_controle.php";
    $_SESSION['login'] = '';
    

    
?>
<form action="area_controle.php?acao=cadastro" method="post" class='formulario-login'>
    <h1 class='autenticaoUsuario'>Cadastro</h1>
    <?php if(isset($_SESSION['cadastro']) && $_SESSION['cadastro'] == 'cadastrado'){?>
        <p class="dados-corretos">Usuario cadastrado com sucesso!</p>
    <?}else if(isset($_SESSION['cadastro']) && $_SESSION['cadastro'] == 'erro'){?>
        <p class="dados-errados">usuario já existente ou dados inválidos!</p>
    <? }?>
    <section class="secao-inputs">
        <input type="text" placeholder="Digite o seu nome" name="nome" id='nome'>
        <i class="fa-solid fa-user iconFormularioUsuario"></i>
    </section>
    <section class="secao-inputs">
        <input type="text" placeholder="Digite o seu email" name="email" id='email'>
        <i class="fa-solid fa-envelope iconFormularioUsuario"></i>
    </section>
    <section class="secao-inputs">
        <input type="password" placeholder="Digite a sua senha" id="senhaCadastro" name="senha" >
        <i class="fa-solid fa-eye iconFormularioUsuario" id="iconCadastro" onclick="verSenha('senhaCadastro', 'iconCadastro')"></i>
    </section>
    <p>Já possui uma conta?<a class='formularioUsuario' onclick="requisitarPagina('conteudo-form','conteudo-login.php')">Entrar</a></p>
    
</form>
<button class='buttonFormularioUsuario' onclick='loginOuCadastroUsuario("conteudo-form", "conteudo-cadastro.php?acao=cadastro", "cadastro", "senhaCadastro")'>Cadastrar</button>