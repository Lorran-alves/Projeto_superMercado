function verSenha(){
    let senhalogin = document.querySelector('#senhalogin')
    let senhaCadastro = document.querySelector('#senhaCadastro')
    let iconLogin = document.querySelector('#iconLogin')
    let iconCadastro = document.querySelector('#iconCadastro')
    if(iconLogin.className == "fa-solid fa-eye" || iconCadastro.className == "fa-solid fa-eye"){
        senhalogin.type = 'text'
        senhaCadastro.type = 'text'
        iconLogin.setAttribute('class', "fa-solid fa-eye-slash")
        iconCadastro.setAttribute('class', "fa-solid fa-eye-slash")
    }else {
        senhalogin.type = 'password'
        senhaCadastro.type = 'password'
        iconLogin.setAttribute('class', "fa-solid fa-eye")
        iconCadastro.setAttribute('class', "fa-solid fa-eye")
    }
}