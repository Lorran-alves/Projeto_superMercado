let count = 1;
setInterval(function(){
    nextSlide()
},10000)
function resgataIndece(indece){
    count = indece   
}
function nextSlide(){
    document.getElementById("radio"+count).checked //SELECIONO O ID DENTRO DA FUNÇÃO PARA QUE NÃO VENHA DAR ERRO
    count++
    if(count > 4 ){
        count = 1
    }
    document.querySelector('#radio'+ count).checked = true;
}