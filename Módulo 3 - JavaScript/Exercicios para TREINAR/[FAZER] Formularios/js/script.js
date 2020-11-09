function getElement(elemento){
    return document.querySelector(elemento);
}


let txtNome = getElement("#txt-nome");
let txtSobrenome = getElement("#txt-sobrenome");
let txtCpf = getElement("#txt-CPF");
let txtTelefone = getElement("#txt-telefone");
let cbbGenero = getElement("#cbb-genero");
let txtCelular = getElement("#txt-celular");
let diaNasc = getElement("#txt-dia-nasc");
let mesNasc = getElement("#txt-mes-nasc");
let anoNasc = getElement("#txt-ano-nasc");
let txtEmail = getElement("#txt-email");
let txtSenha = getElement("#txt-senha");
let txtConfSenha = getElement("#txt-conf-senha");
let chkNoticias = getElement("#chk-noticias");
let btnSubmit = getElement("#btn-submit");
let btnReset = getElement("#btn-reset");



function setPassLayout(elemento){
    elemento.style.backgroundColor = "white";
    elemento.style.borderColor = "green";
}

function setErrorLayout(elemento){
    elemento.style.borderColor = "red"
    elemento.style.backgroundColor = "rgba(255, 0, 0, 0.288)";
}

function validaRegex(regexString, elemento){
    return regexString.test(elemento.value);
}


function validaNome(){

    verificaRegexNome = validaRegex(/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, this);

    if(this.value.length < 1 || verificaRegexNome==false){
        setErrorLayout(this);
        return;
    }

    setPassLayout(this);
}

function validaCPF(){

    let verificaRegexCPF = validaRegex(/^[0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2}$/, this);

    if(verificaRegexCPF==false){
        setErrorLayout(this);
        return;
    }

    setPassLayout(this);
}

function validaTelefone(){

    let verificaRegexTelefone = validaRegex(/^(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})$/, this);

    if(verificaRegexTelefone==false){
        setErrorLayout(this);
        return;
    }

    setPassLayout(this);
}

function validaCbbGenero(){

    if(this.options[this.selectedIndex].value == ""){
        setErrorLayout(this);
        return;
    }

    setPassLayout(this);
}

txtNome.addEventListener("blur", validaNome);
txtSobrenome.addEventListener("blur", validaNome);
txtCpf.addEventListener("blur", validaCPF);
txtTelefone.addEventListener("blur", validaTelefone);
cbbGenero.addEventListener("change", validaCbbGenero);
