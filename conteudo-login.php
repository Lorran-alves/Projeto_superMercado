<?php 
    $acao = '';
    require "area_controle.php";
    $_SESSION['cadastro'] = '';
    //FAZER A PARTE DE LOGIN E CADASTRO TUDO COM AJAX
?>
<?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'aceito' && isset($_GET['area'])){?>
    <!-- ESSA VERIFICAÇÃO SE EXISTE NO ARRAY O INDECE AREA É PARA VER CASO NÃO TENHA É PORQUE NÃO FOI MANDADO E SINAL QUE O USUARIO NÃO QUIS CONTINUAR COM O LOGIN E QUIS VOLTAR E CASO TENHA ELE CAI NESSA SEÇÃO PARA VERIFICAR SE QUER OU NÃO CONTINUAR -->
<section class='perguntaLogin' >
    <section class='coluna'>
        <h4>Olá, <?=ucfirst($dadosUsuario['nome'])?> deseja confirmar o login?</h5>
        <section class='rowPerguntaLogin'>
            <button class='buttonFormularioUsuario' onclick="loginOuLogouf('recuperarDados')">Sim</button>
            <button class='buttonFormularioUsuario' onclick="requisitarPagina('conteudo-form', 'conteudo-login.php')">Não</button>
        </section>
    </section>
</section>
    
<?}else{?>
    <form class='formulario-login'>
        <h1 class='autenticaoUsuario'>Login</h1>
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
        <p>É novo por aqui?<a class='formularioUsuario' onclick="requisitarPagina('conteudo-form', 'conteudo-cadastro.php?area=cadastro')">Criar conta</a></p>
        
    </form>

    <button class='buttonFormularioUsuario' onclick="loginOuCadastroUsuario('conteudo-form', 'conteudo-login.php?acao=login&area=autenticacao', 'login', 'senhalogin')">Entrar</button>
<?}?>