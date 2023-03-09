<?php 
    $acao = '';
    if($_GET['area'] != 'cadastro'){
        $acao = 'recuperarDados';
    }
    require "area_controle.php";
    $_SESSION['login'] = ''; 
?>
<?php if($_GET['area'] == 'cadastro'){?>
    <form action="area_controle.php?acao=cadastro" method="post" class='formulario-login'>
        <h1 class='autenticaoUsuario'>Cadastro</h1>
        <?php if(isset($_SESSION['alteracao']) && $_SESSION['alteracao'] == 'cadastrado'){?>
            <p class="dados-corretos">Usuario cadastrado com sucesso!</p>
        <?php }else if(isset($_SESSION['alteracao']) && $_SESSION['alteracao'] == 'erro'){?>
            <p class="dados-errados">usuario já existente ou dados inválidos!</p>
        <?php }?>
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
    <button class='buttonFormularioUsuario' onclick='loginOuCadastroUsuario("conteudo-form", "conteudo-cadastro.php?acao=cadastro&area=cadastro", "cadastro", "senhaCadastro")'>Cadastrar</button>
<?php }else{?>
    <form action="area_controle.php?acao=cadastro" method="post" class='formulario-login'>
        <h1 class='autenticaoUsuario'>EDITAR</h1>
        <?php if(isset($_SESSION['alteracao']) && $_SESSION['alteracao'] == 'cadastrado'){?>
            <p class="dados-corretos">Dados alterados com sucesso!</p>
        <?php }else if(isset($_SESSION['alteracao']) && $_SESSION['alteracao'] == 'erro'){?>
            <p class="dados-errados">Verifique os dados e tente novamente!</p>
        <?php }?>
        <section class="secao-inputs">
            <input type="text" placeholder="Digite o seu nome" name="nome" id='nome' value='<?=$dadosUsuario['nome']?>'>
            <i class="fa-solid fa-user iconFormularioUsuario"></i>
        </section>
        <section class="secao-inputs">
            <input type="text" placeholder="Digite o seu email" name="email" id='email' value='<?=$dadosUsuario['email']?>'>
            <i class="fa-solid fa-envelope iconFormularioUsuario"></i>
        </section>
        <section class="secao-inputs">
            <input type="password" placeholder="Digite a sua senha" id="senhaCadastro" name="senha" value='<?=$dadosUsuario['senha']?>'>
            <i class="fa-solid fa-eye iconFormularioUsuario" id="iconCadastro" onclick="verSenha('senhaCadastro', 'iconCadastro')"></i>
        </section>
        <p>Já possui uma conta?<a class='formularioUsuario' onclick="requisitarPagina('conteudo-form','conteudo-login.php')">Entrar</a></p>
    </form>
    <button class='buttonFormularioUsuario' onclick='loginOuCadastroUsuario("conteudo-form", "conteudo-cadastro.php?acao=editar&area=editar", "editar", "senhaCadastro", "<?=$dadosUsuario["id_usuario"]?>")'>Editar</button>    
<?php }?>