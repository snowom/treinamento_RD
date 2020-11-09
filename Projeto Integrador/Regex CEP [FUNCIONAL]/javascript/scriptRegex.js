function getElement(elemento){
    return document.querySelector(elemento);
}


function validaRegex(regexString, elemento){
    return regexString.test(elemento.value);
}


function setPassLayout(elemento){
    elemento.style.backgroundColor = "white";
    elemento.style.borderColor = "green";
}


function setErrorLayout(elemento){
    elemento.style.borderColor = "red"
    elemento.style.backgroundColor = "rgba(255, 0, 0, 0.288)";
}


function validaCep(){

    //REGEX CEP COM OU SEM TRACO
    let resultadoRegex = validaRegex(/^[0-9]{5}?\-?[0-9]{3}$/, this);

    if(resultadoRegex==true){
        console.log(`STAUTS CEP = REGEX ${resultadoRegex}`);
        setPassLayout(this);
        return resultadoRegex;
    }

    setErrorLayout(this);
    console.log(`STAUTS CEP = REGEX ${resultadoRegex}`);

    return resultadoRegex;
}

let txtCEP = getElement("#txtCep");

//USAR maxlength no HTML para restringir limite maximo de caracteres;
txtCEP.addEventListener("blur", validaCep);