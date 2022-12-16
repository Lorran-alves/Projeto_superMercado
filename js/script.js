// AQUI ESTÁ SENDO FEITO A VERIFICAÇÃO SE É LOGIN OU CADASTRO
function requisitarPagina(id, url){
   
    let conteudo_form = document.querySelector(`#${id}`)
    let ajax = new XMLHttpRequest();
    ajax.open('GET', url)
    ajax.onreadystatechange = () =>{
        if(ajax.readyState == 4 && ajax.status == 200){
            conteudo_form.innerHTML = ajax.responseText
            if(url == 'conteudo_principal.php'){
                carregaProdutos()//CARREGANDO OS PRODUTOS PARA MOSTRAR AO USUARIO
            }
            // console.log(ajax.responseText)
        }else if(ajax.readyState == 4 && ajax.status == 404){
            alert("ocorreu algum erro, por favor recarregue")
        }   
    }
    ajax.send()
   
}
function verificaFiltro(id){ // pesquisa admin 
    let parametro = document.querySelector('#'+id)

    if(id == 'categoria'){ //CASO SEJA UM FILTRO POR CATEGORIA
        requisitarPagina("pesquisa_admin", `pesquisa_admin.php?filtro=categoria&categoria=${parametro.value}`)
        parametro.value= 'vazio'; // fica no inicio depois de clicado
    }else if(id == 'busca'){ // CASO SEJA UM FILTRO POR BUSCA DE ALGUMA PALAVRA ESPECIFICA
        requisitarPagina("pesquisa_admin", `pesquisa_admin.php?filtro=busca&busca=${parametro.value}`)
        parametro.value = '';// fica no inicio depois de clicado
    }else if(id == 'todos'){ //TODOS OS PRODUTOS
        requisitarPagina('pesquisa_admin', 'pesquisa_admin.php?filtro=todos')
    }
    fechaDadosProduto()
}

function adicionarCarrinho(id_usuario, id_produto){
    alert ('id Usuario: '+ id_usuario +', '+ 'id produto: ' + id_produto);
}
function calculaPedido(estoque, idProduto, indece){
    let qtd = document.querySelector("#qtd"+indece).value; //com o indece eu pego o elemento correto de cada id e assim modifico o input correto
    console.log('quantidade: '+qtd , 'estoque: '+ estoque)
    if(qtd > estoque ){
        qtd = estoque
    }
    requisitarPagina("container", "carrinho.php?acao=verificarQuantidadePedido&id_produto="+idProduto+"&quantidade="+ qtd)
    //window.location = "area_controle.php?acao=verificarQuantidadePedido&id_produto="+idProduto+"&quantidade="+ qtd
}
function resgatarProdutoEditar(id){
    // OBS: ESSE ID É O ID DO INPUT E O INPUT SELECIONADO VAI RETORNAR O VALOR DO ID DO PRODUTO SELECIONADO
    let valorEscolhido = document.querySelector(`#${id}`)
    requisitarPagina("containerEdicao", "editar_produto_admin.php?acao=recuperarProdutoEditar&area=editar&id_produto="+ valorEscolhido.value)
} 
function fechaResultadoPesquisaAdmin(){ //fecha pagina de pesquisa do usuario / filtro
    requisitarPagina('pesquisa_admin', 'pesquisa_admin.php')
    fechaDadosProduto()
} 
function fechaDadosProduto(){ // FUNÇÃO PARA FECHAR A AREA ONDE OS DADOS DOS PRODUTOS É APRESENTADO
    requisitarPagina('dados_produto', 'dados_produtos.php')
}

function requisitarPaginaEdicao(metodo, id_produto, id_container, acao){ 

    let  inputArquivo = document.getElementById("inputArquivo"); //ARQUIVO IMAGEM DO PRODUTO
    let descricao = document.querySelector("#descricao").value // DESCRIÇÃO DO PRODUTO
    let nome = document.querySelector("#nome").value // NOME DO PRODUTO
    let categoria = document.querySelector("#categoria").value // CATEGORIA DO PRODUTO
    let valor = document.querySelector("#valor").value // VALOR DO PRODUTO
    let quantidade = document.querySelector("#quantidade").value //QUANTIDADE DO PRODUTO
    let arquivo = inputArquivo.files[0]; //AQUI JA É O ARQUIVO TIPO ( FILES )

    if(metodo != 'Cancelar'){// faço issso para que se tiver alguma pesquisa aberta ela possa ser fechada para recarregar os produtos pra não ficar desatualizado
        fechaResultadoPesquisaAdmin() //pagina de pesquisa é zerada 
        
    }
    
    url = `editar_produto_admin.php?acao=${acao}&id_produto=${id_produto}`
    
    let fd = new FormData();
    fd.append("arquivo", arquivo)
    fd.append("descricao", descricao)
    fd.append("nome", nome)
    fd.append("categoria", categoria)
    fd.append("preco", valor)
    fd.append("estoque", quantidade)
    fd.append("metodo", metodo)
    fd.append("id_produto", id_produto)

    let conteudo = document.querySelector(`#${id_container}`)
    let ajax = new XMLHttpRequest();
    ajax.open('POST', url)
    ajax.onreadystatechange = () =>{
        if(ajax.readyState == 4 && ajax.status == 200){
            conteudo.innerHTML = ajax.responseText
            
            // console.log(ajax.responseText)
        }else if(ajax.readyState == 4 && ajax.status == 404){
            alert("ocorreu algum erro, por favor recarregue")
        }   
    }
    ajax.send(fd)
    atualizaDadosAdmin();
}

function salvarProduto(metodo, id_container, acao, id_label){
    let label = document.querySelector(`#${id_label}`) // label para feedback ao usuario
    let  inputArquivo = document.getElementById("inputArquivoSalvar"); //ARQUIVO IMAGEM DO PRODUTO
    let descricao = document.querySelector("#descricaoSalvar") // DESCRIÇÃO DO PRODUTO
    let nome = document.querySelector("#nomeSalvar") // NOME DO PRODUTO
    let categoria = document.querySelector("#categoriaSalvar") // CATEGORIA DO PRODUTO
    let valor = document.querySelector("#valorSalvar") // VALOR DO PRODUTO
    let quantidade = document.querySelector("#quantidadeSalvar") //QUANTIDADE DO PRODUTO
    let arquivo = inputArquivo.files[0]; //AQUI JA É O ARQUIVO TIPO ( FILES )
    
    url = `editar_produto_admin.php?acao=${acao}`
    
    let fd = new FormData();
    fd.append("arquivo", arquivo)
    fd.append("descricao", descricao.value)
    fd.append("nome", nome.value)
    fd.append("categoria", categoria.value)
    fd.append("preco", valor.value)
    fd.append("estoque", quantidade.value)
    fd.append("metodo", metodo)
    
        
    // LIMPANDO O FORMULARIO CASO O PRODUTO SEJA ADICIONADO COM SUCESSO
    if(descricao.value != '' && nome.value != '' && categoria.value != '' && valor.value != '' && quantidade.value != '' && inputArquivo.value != ''){
        
        inputArquivo.value = '';
        descricao.value = '';
        nome.value = '';
        categoria.value = 'vazio';
        valor.value = '';
        quantidade.value = '';
        label.innerHTML = 'Escolher arquivo'
        label.classList.remove('escolhido')
        fechaResultadoPesquisaAdmin()
      
        fechaResultadoPesquisaAdmin()
    }
    
   
    let conteudo = document.querySelector(`#${id_container}`)
    let ajax = new XMLHttpRequest();
    ajax.open('POST', url)
    ajax.onreadystatechange = () =>{
        if(ajax.readyState == 4 && ajax.status == 200){
            conteudo.innerHTML = ajax.responseText
            
            // console.log(ajax.responseText)
        }else if(ajax.readyState == 4 && ajax.status == 404){
            alert("ocorreu algum erro, por favor recarregue")
        }   
    }
    ajax.send(fd)
    atualizaDadosAdmin()
    
}
function atualizaDadosAdmin(){// ATUALZIAR OS DADOS ADMIN PARA QUE POSSA SER NOTAVEL A MUDANÇA FEITAS 
   
     let x = 0;
     setInterval(()=>{ // FIZ ISSO PARA RECARREGAR OS DADOS APENAS UMA VEZ POR CHAMADA
        x++
        if(x <= 1){
            console.log('chegou na area de recarregar os dados')
            requisitarPagina(`containerDadosDosProdutos`, `detalhesDadosAdmin.php?acao=recuperaDadosAdmin`)
            requisitarPagina(`containerEdicao`, `escolhaProdutoEditar.php?acao=recuperaDadosAdmin`)
        }
     },100)
}
 
function editarCategoria(id, metodo){
   
    let valorAtual  = '';
    if(metodo == 'salvar'){
        categoria = document.querySelector("#categoria-nova")
        valorAtual = categoria.value //AQUI EU ATRIBUIR O VALOR DO INPUT PARA OUTRA VARIAVEL PARA DEPOIS EU LIMPAR O INPUT PARA UMA PROXIMA VALIDAÇÃO
        categoria.value = '';
        // NO CASO TEM QUE SER SO AQUI QUE NA PARTE DA REMOÇÃO ELE TEM SUA PROPRIA LOGICA PARA RECUPERAR AS CATEGORIAS ATUALIZADAS
        requisitarPagina(`${id}`, `categorias.php?acao=editar-categoria&categoria=${valorAtual}&metodo=${metodo}`) 
        atualizarCategorias('form-remover-categoria') // GRAÇAS AO BOTAO ATUALIZAR DESCOBRI QUE CHAMANDO UMA FUNÇÃO RESOLVE O MEU PROBLEMA
        

    }else if(metodo == 'remover'){
        categoria = document.querySelector("#categoria_remover")
        valorAtual = categoria.value
        requisitarPagina(`${id}`, `categorias.php?acao=editar-categoria&categoria=${valorAtual}&metodo=${metodo}`) 
    }
    atualizaDadosAdmin()
    fechaResultadoPesquisaAdmin()
    
}
function atualizarCategorias(id){
    requisitarPagina(`${id}`, `categorias.php?acao=atualizarCategorias`) 
}
function verificaImagem(id_input, id_label){
    let inputFile = document.querySelector(`#${id_input}`)
    console.log('input: '+inputFile.value)
    label = document.querySelector(`#${id_label}`)
    if(inputFile.value != ''){
        label.innerHTML= "Arquivo Escolhido"
        label.classList.add("escolhido")
    }
}
function pesquisaCliente(id_container, url){
    let valor = document.getElementById('pesquisaUsuario').value
    console.log(valor)
    console.log(id_container)
    console.log(url)
    requisitarPagina(id_container, `${url}?acao=buscaProdutosClientes&pesquisa=${valor}`)

}
function carregaProdutos(){
    console.log('chegou aqui');
    requisitarPagina("containerLimpeza", "filtroCategorias.php?acao=recuperarProdutosPorCategoria&categoria=Higiene")
    requisitarPagina("containerNovidades", "filtroCategorias.php?acao=recuperarProdutosPorCategoria&categoria=Novidades")
    requisitarPagina("containerAlimentos", "filtroCategorias.php?acao=recuperarProdutosPorCategoria&categoria=Alimentos");
    // COM APENAS UMA UNICA PAGINA EU CONSIGO FAZER FUNCIONAR A REQUISIÇÃO AJAX PARA FILTROS POR CATEGORIA
}
function salvarProduto(id_produto){
    console.log('salvou o produto de id: ' + id_produto);
    requisitarPagina("container", `favoritos.php?acao=favoritarProduto&id_produto=${id_produto}`)
}

