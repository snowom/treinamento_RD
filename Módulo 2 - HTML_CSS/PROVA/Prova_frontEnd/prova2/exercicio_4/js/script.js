function getElement(elemento){
    return document.querySelector(elemento);
}

let txtNomeMedico = getElement("#txt-nome-medico");
let txtNomePaciente = getElement("#txt-nome");
let txtCpf = getElement("#txt-cpf");
let cbbGenero = getElement("#cbb-genero");
let CRM = getElement("#txt-crm");
let qtdCaixas = getElement("#txt-qtd-caixas");
let dataNasc = getElement("#txt-data-nasc");
let dataReceita = getElement("#txt-data-receita");
let btnSubmit = getElement("#btn-submit").disabled = true;


function habilitaSubmit(){

    if(validaNome && validaCPF && validaCbbGenero && validaCRM && validaCaixas && validaData){
        btnSubmit.disabled=false;
        return;
    }
    btnSubmit.disabled = true;
}



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
    }

    setPassLayout(this);
    return true;
}


function validaCPF(){

    let verificaRegexCPF = validaRegex(/^[0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2}$/, this);

    if(verificaRegexCPF==false){
        setErrorLayout(this);
        return;
    }

    setPassLayout(this);
    return true;
}


function validaCbbGenero(){

    if(this.options[this.selectedIndex].value == ""){
        setErrorLayout(this);
        return false;
    }

    setPassLayout(this);
    return true;
}


function validaCRM(){

    /* CRM OBRIGATORIO DE 7 NUMEROS */
    let verificaRegexCRM = validaRegex(/^[0-9]{7}$/, this);

    if(verificaRegexCRM==false){
        setErrorLayout(this);
        return false;
    }
    setPassLayout(this);
    return true;
}

function validaCaixas(){

    /* LIMITE DE 99 CAIXAS */
    let verificaRegexCaixas = validaRegex(/^[0-9]{2}$/, this);

    if(verificaRegexCaixas==false){
        setErrorLayout(this);
        return false;
    }
    setPassLayout(this);
    return true;
}

function validaData(){

    let verificaRegexData = validaRegex(/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/, this);

    if(verificaRegexData==false){
        setErrorLayout(this);
        return false;
    }
    setPassLayout(this);
    return true;
}


cbbGenero.addEventListener("click", function(){
    this.style.backgroundColor = "white";
});

txtNomeMedico.addEventListener("blur", validaNome);
txtNomePaciente.addEventListener("blur", validaNome);
txtCpf.addEventListener("blur", validaCPF);
cbbGenero.addEventListener("change", validaCbbGenero);
CRM.addEventListener("blur", validaCRM);
qtdCaixas.addEventListener("blur", validaCaixas);
dataNasc.addEventListener("blur", validaData);
dataReceita.addEventListener("blur", validaData);