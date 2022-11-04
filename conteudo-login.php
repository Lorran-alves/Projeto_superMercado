<form action="area_controle.php?acao=login" method="post">
    <h1>Login</h1>
    <section class="secao-inputs">
        <input type="text" placeholder="Digite o seu email" name="email">
        <i class="fa-solid fa-envelope"></i>
    </section>
    <section class="secao-inputs">
        <input type="password" placeholder="Digite a sua senha" id="senhalogin" name="senha">
        <i class="fa-solid fa-eye" id="iconLogin" onclick="verSenha('senhalogin','iconLogin')"></i>
    </section>
    <p>É novo por aqui?<a href="#" onclick="requisitarPagina('conteudo-cadastro.php')">Criar conta</a></p>
    <button>Entrar</button>
</form>