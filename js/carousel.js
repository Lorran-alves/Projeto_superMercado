let count = 1;

document.querySelector('#radio1').checked = true;
setInterval(function(){
    nextSlide();
    console.log('teste')
},1000)
function nextSlide(){
    count++
    if(count > 4 ){
        count = 1
    }
    document.querySelector('#radio'+ count).checked = true;
}
function resgataIndece(indece){
    count = indece
}
