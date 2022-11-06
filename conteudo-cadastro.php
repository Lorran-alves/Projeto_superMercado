<?php
    session_start();
    $_SESSION['login'] = '';
?>
<form action="area_controle.php?acao=cadastro" method="post">
    <h1>Cadastro</h1>
    <?php if(isset($_SESSION) && $_SESSION['cadastro'] == 'true'){?>
        <p class="dados-corretos">Usuario cadastrado com sucesso!</p>
    <?}else if(isset($_SESSION) && $_SESSION['cadastro'] == 'false'){?>
        <p class="dados-errados">usuario já existente ou dados inválidos!</p>
    <? }?>
    <section class="secao-inputs">
        <input type="text" placeholder="Digite o seu nome" name="nome">
        <i class="fa-solid fa-user"></i>
    </section>
    <section class="secao-inputs">
        <input type="text" placeholder="Digite o seu email" name="email">
        <i class="fa-solid fa-envelope"></i>
    </section>
    <section class="secao-inputs">
        <input type="password" placeholder="Digite a sua senha" id="senhaCadastro" name="senha">
        <i class="fa-solid fa-eye" id="iconCadastro" onclick="verSenha('senhaCadastro', 'iconCadastro')"></i>
    </section>
    <p>Já possui uma conta?<a href="#" onclick="requisitarPagina('conteudo-form','conteudo-login.php')">Entrar</a></p>
    <button>Cadastrar</button>
</form>