window.onload = function() {
/*-----inicio exemplo setTimeout-----*/
// let tempo = 3000;
// let btnAbrirDown = document.querySelector(".btn-primary");
// let textoAguarde = document.querySelector(".aguarde");
// let btnFazerDown = document.querySelector(".btn-success");

// function exibirDownload() {
    
//     textoAguarde.style.display = "block";

//     setTimeout(function() {
//         btnAbrirDown.style.display = "none";
//         btnFazerDown.style.display = "block";
//         textoAguarde.style.display = "none";
//     }, tempo)
    
// }

// btnAbrirDown.addEventListener("click", exibirDownload);
/*-----fim exemplo setTimeout------*/



/*-----inicio exemplo setInterval-----*/
let tempo = 10000;
let btnAbrirDown = document.querySelector(".btn-primary");
let textoAguarde = document.querySelector(".aguarde");
let btnFazerDown = document.querySelector(".btn-success");
let segundosElem = document.querySelector(".segundos");
let seg = 9;



function exibirDownload() {
    
    textoAguarde.style.display = "block";
    /*atribuir setInterval a uma variavel para usar no clearInterval*/
    let intervalo = setInterval(function() {
        segundosElem.innerText = seg;
        seg--;
        /*-----clearTimeout------*/
        // if (seg == 5) {
        //     clearTimeout(timeOut);
        // }
    }, 1000);
    
    let timeOut = setTimeout(function() {
        btnAbrirDown.style.display = "none";
        btnFazerDown.style.display = "block";
        textoAguarde.style.display = "none";
        /*-----clearInterval------*/
        clearInterval(intervalo);
    }, tempo)
    
}

btnAbrirDown.addEventListener("click", exibirDownload);
/*-----fim exemplo setInterval-----*/
}