<?php 
    $acao = '';
    require "area_controle.php";
    $_SESSION['cadastro'] = '';
    
    //FAZER A PARTE DE LOGIN E CADASTRO TUDO COM AJAX
    
?>
<?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'aceito'){?>
<form class='coluna perguntaLogin'>

    <h4>Olá <?=ucfirst($dadosUsuario['nome'])?> deseja confirmar o login?</h5>
    <h4></h4>
    <section class='rowPerguntaLogin'>
        <button onclick="login()">Sim</button>
        <button onclick="requisitarPagina('conteudo-form', 'conteudo-cadastro.php')">Não</button>
    </section>
</form>
<?}else{?>
    <form>
        <h1>Login</h1>
        <?if(isset($_SESSION['login']) && $_SESSION['login'] == 'negado'){?>
            <p class="dados-errados">Email ou senha inválidos!</p>
        <? }?>
        <section class="secao-inputs">
            <input type="text" placeholder="Digite o seu email" name="email" id='email'>
            <i class="fa-solid fa-envelope iconFormularioUsuario"></i>
        </section>
        <section class="secao-inputs">
            <input type="password" placeholder="Digite a sua senha" id="senhalogin" name="senha">
            <i class="fa-solid fa-eye iconFormularioUsuario" id="iconLogin" onclick="verSenha('senhalogin','iconLogin')"></i>
        </section>
        <p>É novo por aqui?<a class='formularioUsuario' onclick="requisitarPagina('conteudo-form', 'conteudo-cadastro.php')">Criar conta</a></p>
        
    </form>

    <button onclick="loginOuCadastroUsuario('conteudo-form', 'conteudo-login.php?acao=login', 'login', 'senhalogin')">Entrar</button>
<?}?>