<header>  
    <a><img src="img/logo_2.jpg" width="500px" alt=""></a>
    <ul>
        <li>
            <a onclick="requisitarPagina('container', 'conteudo_principal.php')">Home</a>
        </li>                
        <li>
            <a href="#">Alimentos</a>
        </li>
        <li>
            <a href="#">Higiene</a>
        </li>
        <li>
            <a onclick="requisitarPagina('container', 'favoritos.php?acao=resgatarFavoritos')">Favoritos</a>
        </li>
        <?php if(isset($dadosUsuario['id_usuario']) && $dadosUsuario['id_usuario'] == 6){?>
            <li>
                <a onclick="requisitarPagina('container', 'admin.php')">Admin</a>
            </li>
        <?php }?>
    </ul>
    <section>
        <ul id="ul-rigth">
            <li>
                <a href=""><i class="fa-solid fa-question"></i></a>
            </li>
            <li>
                <a href=""><i class="fa-solid fa-phone"></i></a>
            </li>
            <li>
                <a onclick= "requisitarPagina('container', 'carrinho.php')"><i class="fa-solid fa-basket-shopping"></i></a>
            </li>
        </ul>
    </section>
    <section id="perguntas_help">
        <ul id="ul-login">
            <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'aceito' && isset($dadosUsuario)){?>
                <li class=' coluna' >
                    <section class='centralizar' onclick='menuHeader()'>
                        <p class='p-header'>Olá, <?= $dadosUsuario['nome']?></p><i class="fa-solid fa-bars iconMenu"></i>
                    </section>
                    <section class='menuInterativo' id='menuInterativo'>
                        <ul class='coluna perguntas-help'>
                            <li onclick='loginOuLogouf("logouf")'>Sair</li>
                            <li onclick="editarConta()">Editar</li>
                            <li>Ajuda</li>
                        </ul>
                    </section>
                </li>       
                <?php }else{?>
                    <li>
                        <a onclick="requisitarPagina('containerTotal', 'index.php?area=login')">Fazer login<i class="fa-solid fa-user icon-login"></i></a>
                    </li> 
            <?php }?> 
        </ul>
    </section>
    <section class="form-pesquisa">
            <form>
                <input type="text" placeholder="Pesquisar" name='pesquisa' id='pesquisaUsuario'>                        
            </form>
            <button class='pesquisaCliente' onclick="pesquisaCliente('container', 'pesquisaProdutosClientes.php')"><i class="fa-solid fa-magnifying-glass"></i></button>    
    </section>
</header>