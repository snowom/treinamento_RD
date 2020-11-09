function getElem(elem) {
    return document.querySelector(elem);
}

/*document.forms - retorna todos os forms da pagina em um array*/
let form = document.forms[0];
console.log(form);

/*document.forms.elements - retorna todos os elementos do form*/
let elementos = form.elements;
console.log(elementos);

//retorna o elemento do formulário que está no índice indicado
let input = elementos[0]
console.log(input);

//Atributos
console.log(form.action);
console.log(form.method);
console.log(form.name);

//value
    //capturar valor do elemento
    // console.log(input.value);
    getElem(".nome").value;
    //atribuir valor para o atributo value
    getElem(".nome").value = "Teste";

//Eventos
form.onsubmit = function(event) {
    event.preventDefault();
    console.log("foi");
}

//select
let selectProf = getElem("#professores");
//retorna o índice numérico da opção selecionada
let indiceProf = selectProf.selectedIndex;
let optionSelected = selectProf.options[indiceProf];

selectProf.addEventListener("change", function() {
    indiceProf = selectProf.selectedIndex;
    optionSelected = selectProf.options[indiceProf];
    console.log(optionSelected.value);
})

//input radio
console.log(getElem(".estado-civil:checked"));

//Checkbox
getElem("#surf").addEventListener("click", function() {
    
    if (this.checked) {
        console.log(`${this.value} está checado`);
    } else {
        console.log(`${this.value} não está checado`);
    }
    
});
getElem("#musica").addEventListener("click", function(){
    if (this.checked) {
        console.log(`${this.value} está checado`);
    } else {
        console.log(`${this.value} não está checado`);
    }
});
getElem("#cinema").addEventListener("click", function(){
    if (this.checked) {
        console.log(`${this.value} está checado`);
    } else {
        console.log(`${this.value} não está checado`);
    }
});

let qtd = 1;

//input hidden
function aumentar() {
    qtd++;
    getElem(".qtd").innerText = qtd;
    getElem(".qtdProduto").value = qtd;
}

function diminuir() {
    qtd--;
    getElem(".qtd").innerText = qtd;
    getElem(".qtdProduto").value = qtd;
}

//textArea
getElem("#mensagem").addEventListener("blur", function() {
    console.log(this.value);
    getElem(".alert-mensagem").style.display = "block";
})

//eventos
getElem(".teste-evento").addEventListener("focus", function() {
    console.log("focus");  
    this.style.backgroundColor = "red";
    getElem(".evento-aviso").style.display = "none"; 
});

getElem(".teste-evento").addEventListener("blur", function() {
    console.log("blur");   
    this.style.backgroundColor = "white"; 
    getElem(".evento-aviso").style.display = "block";  
});

getElem(".teste-evento").addEventListener("input", function() {
    alert("input");    
});

//validacao
getElem(".teste-validacao").addEventListener("blur", function() {
    if (this.value.length < 3) {
        getElem(".aviso-min-cara").style.display = "block";
        return;
    }

    getElem(".aviso-min-cara").style.display = "none";

});

//regex - CPF [0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2}
//Regex - Rg [0-9]{2}\.[0-9]{3}\.[0-9]{3}\-[A-Za-z0-9]{1}


let regexCPF = /^[0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2}$/;
getElem(".input-cpf").addEventListener("blur", function() {

    //jeito 1
    if(!regexCPF.test(this.value)) {
        getElem(".alert-cpf").style.display = "block";
        return;
    };
    getElem(".alert-cpf").style.display = "none";

    //jeito 2
    // if(regexCPF.test(this.value)) {
    //     getElem(".alert-cpf").style.display = "none";
    //     return;
    // };
    // getElem(".alert-cpf").style.display = "block";

    //jeito 3
    // if(regexCPF.test(this.value)) {
    //     getElem(".alert-cpf").style.display = "none";
    // } else {
    //     getElem(".alert-cpf").style.display = "block";
    // };
});