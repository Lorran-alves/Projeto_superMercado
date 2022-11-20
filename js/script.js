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
