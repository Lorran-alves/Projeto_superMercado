function verSenha(id_input, id_icon){
    let input = document.querySelector(`#${id_input}`)
    let icon  = document.querySelector(`#${id_icon}`)
    if(icon.className == "fa-solid fa-eye"){
        input.type = 'text'
        icon.setAttribute('class', "fa-solid fa-eye-slash")
    }else{
        input.type = 'password'
        icon.setAttribute('class', "fa-solid fa-eye")
    }
}