// AQUI ESTÁ SENDO FEITO A VERIFICAÇÃO SE É LOGIN OU CADASTRO
function requisitarPagina(id, url){
    let conteudo_form = document.querySelector(`#${id}`)
    let ajax = new XMLHttpRequest();
    ajax.open('GET', url)
    ajax.onreadystatechange = () =>{
        if(ajax.readyState == 4 && ajax.status == 200){
            conteudo_form.innerHTML = ajax.responseText
            
            // console.log(ajax.responseText)
        }else if(ajax.readyState == 4 && ajax.status == 404){
            alert("ocorreu algum erro, por favor recarregue")
        }   
    }
    ajax.send()
}
function verificaFiltro(id){ // pesquisa admin 
    let parametro = document.querySelector('#'+id)

    if(id == 'categoria'){
        requisitarPagina("pesquisa_admin", `pesquisa_admin.php?filtro=categoria&categoria=${parametro.value}`)
        parametro.value= 'vazio'; // fica no inicio depois de clicado
    }else{
        requisitarPagina("pesquisa_admin", `pesquisa_admin.php?filtro=busca&busca=${parametro.value}`)
        parametro.value = '';// fica no inicio depois de clicado
    }
   
    // 
    // 
}
function requisitarProdutos(id, url, url2){
    let conteudo_form = document.querySelector(`#${id}`)
    let img = document.createElement('img')
    img.src= "//img/loading.gif"
    let ajax = new XMLHttpRequest();
    ajax.open('GET', url)
    ajax.onreadystatechange = () =>{
        if(ajax.readyState != 4){

            // requisitarGif(id,url2)
        }
        else if(ajax.readyState == 4 && ajax.status == 200){
            conteudo_form.innerHTML = ajax.responseText
           
        }
        else if(ajax.readyState == 4 && ajax.status == 404){
            alert("ocorreu algum erro, por favor recarregue")
        }   
    }
    ajax.send()
}
function requisitarGif(id, url){
    let conteudo_form = document.querySelector(`#${id}`)
    let ajax = new XMLHttpRequest();
    ajax.open('GET', url)
    ajax.onreadystatechange = () =>{
        if(ajax.readyState == 4 && ajax.status == 200){
            conteudo_form.innerHTML = ajax.responseText
            return false
        }
        else if(ajax.readyState == 4 && ajax.status == 404){
            alert("ocorreu algum erro, por favor recarregue")
        }   
    }
    ajax.send()
}

function produtosRight(pagina, total_paginas){
    // alert('clicou aqui right')
    pagina += 1
    if(pagina > total_paginas){
        pagina = 1;
    }
    console.log('linha right clicada: '+pagina)
    return pagina
}
function produtosLeft(pagina, total_paginas){
    // alert('clicou aqui left')
    pagina -= 1
    if(pagina < 1){
        pagina = total_paginas;
    }
    return pagina
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
    window.location = "area_controle.php?acao=verificarQuantidadePedido&id_produto="+idProduto+"&quantidade="+ qtd
}
function resgatarProdutoEditar(id = ''){
    let valorEscolhido = document.querySelector(`#${id}`)
    if(id != ''){
        requisitarPagina("containerEdicao", "editar_produto_admin.php?acao=recuperarProdutoEditar&area=editar&id_produto="+ valorEscolhido.value)
    }
}
function requisitarPaginaEdicao(metodo, id_produto, id_container, acao, labelEdicao){ // PRECISO VER ESSA QUESTÃO DOS DADOS VIM PRA CA PARA QUE EU POSSA TRATAR CORRETAMENTE FIZ NA PRESSA E FICOU CONFUSO
    let label = document.querySelector(`#${labelEdicao}`)
    let  inputArquivo = document.getElementById("inputArquivo"); //ARQUIVO IMAGEM DO PRODUTO
    let descricao = document.querySelector("#descricao").value // DESCRIÇÃO DO PRODUTO
    let nome = document.querySelector("#nome").value // NOME DO PRODUTO
    let categoria = document.querySelector("#categoria").value // CATEGORIA DO PRODUTO
    let valor = document.querySelector("#valor").value // VALOR DO PRODUTO
    let quantidade = document.querySelector("#quantidade").value //QUANTIDADE DO PRODUTO
    let arquivo = inputArquivo.files[0]; //AQUI JA É O ARQUIVO TIPO ( FILES )
    
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

