function validarCadastro() {
    var nome = formulario.nome;
    var endereco = formulario.endereco;
    var email = formulario.email;
    var senha = formulario.senha;
    var senha2 = formulario.senha2;

    if (nome.value == "") {
        alert("Insira seu nome completo e tente novamente!")
    }
    if (email.value == "") {
        alert("Insira seu e-mail e tente novamente!")
    }
    if (endereco.value == "") {
        alert("Insira seu endereco e tente novamente!")
    }
    if (senha.value == "") {
        alert("Insira sua senha e tente novamente!")
    }
    if (senha2.value == "") {
        alert("Confirme sua senha e tente novamente!")
    }
    if (senha.value != senha2.value) {
        alert("As senhas inseridas não correspondem. Tente novamente")
    }
    else if (!(nome.value == "") && !(email.value == "") && !(endereco.value == "") && !(senha.value == "") && !(senha2.value == "") && !(senha.value != senha2.value)){
        alert("Cadastro realizado com sucesso!");
        window.location.href = "./produtos.html"
    }
}

function validarLogin () {
    var email = formlogin.email;
    var senha = formlogin.senha;

    if (email.value.length<10) {
        alert("Insira seu e-mail e tente novamente!")
    }

    if (senha.value == "") {
        alert("Insira sua senha e tente novamente!")
    }

    else if (!(email.value.length<10) && !(senha.value == "")) {
        window.location.href = "./produtos.html"
    }
}

function validarEmail() {
    var email = recuperar.email;

    if (email.value.legth<10){
        alert("Insira um e-mail válido")
    }
    else {
        alert("E-mail enviado. Verifique sua caixa de mensagens!")
    }
}

