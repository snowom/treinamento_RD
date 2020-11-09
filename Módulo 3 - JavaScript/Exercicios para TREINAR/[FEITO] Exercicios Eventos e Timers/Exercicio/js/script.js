/* window.onload = function(){ */

    let btnCumprimento = document.querySelector(".btn-comprimento");
    let btnAlterarFundo = document.querySelector(".alterar-fundo-bg");
    let bg = document.querySelector("body");
    let img = document.getElementById("img-prog");
    let imgTartaruga = document.getElementById("img-tartaruga");
    let form = document.forms[0];
    
    //Exercicio 2
    function ola(){
        alert("Olá");
    }
    btnCumprimento.onclick = ola;


    //Exercicio 3

    function alteraCorBg(){
        bg.style.backgroundColor = "green";
    }
    btnAlterarFundo.onclick = alteraCorBg;


    function acaoTartaruga(){
        alert("VC PASSOU O MOUSE EM CIMA DE MIM");
    }

    /* ----- SOLUCAO 1 ----- */
        /* imgTartaruga.addEventListener("mouseover", acaoTartaruga); */

    /* ----- SOLUCAO 2 ----- */
        /* imgTartaruga.addEventListener("mouseover", function(){
            alert("VC PASSOU O MOUSE EM CIMA DE MIM - FUNCAO ANONIMA");
        }); */

    /* ----- SOLUCAO 3 ----- */
        /* imgTartaruga.onmouseover = acaoTartaruga; */

    /* ----- SOLUCAO 4 ----- */
        /* imgTartaruga.onmouseover = function(){
            alert("VC PASSOU O MOUSE EM CIMA DE MIM - FUNCAO ANONIMA");
        }; */



    //Exercicio 5

    imgTartaruga.addEventListener("click", function(){
        console.log("estou clicando na imagem");
    });


    //Exercicio 6

    function alteraFundo(){
        bg.style.backgroundColor = "red";
    }
    
    bg.addEventListener("click", alteraFundo);
    


    /* let testeTrocaFundo = function(){
        this.style.backgroundColor = "red";
    }

    bg.addEventListener("click", testeTrocaFundo); */
    

    //Exercicio 7
    bg.removeEventListener("click", alteraFundo)

    
    //Exercicio 8
    /* form.onsubmit = function(event){
        event.preventDefault();
        alert("Não é possível enviar utilizando onsubmit");
    }; */

    form.addEventListener("submit", function(event){
        event.preventDefault();
        alert("Não é possível enviar utilizando addEventListener");
    });


    //Exercicio 9
    imgTartaruga.addEventListener("click", function(event){
        console.log(event.clientX);
        console.log(event.clientY);
    });


    //---- TIMERS ----


    //Exercicio 1
    /* setTimeout(function(){
        alert("Tempo esgotado!");
    }, 10000);


    //Exercicio 2
    setInterval(function(){
        alert("Hora do Intervalo");
    }, 5000); */

/* } */