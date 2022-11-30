let count = 1;


alert('ja estamos aqui')
document.querySelector('#radio1').checked = true;
setInterval(function(){
    nextSlide();
    
},10000)
function nextSlide(){
    count++
    // alert("caiu aqui")
    if(count > 4 ){
        count = 1
    }
    document.querySelector('#radio'+ count).checked = true;
}
function resgataIndece(indece){
    count = indece
}

//////////////

