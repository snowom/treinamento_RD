window.onload = function() {

    /*click*/
    // function clickBtn() {
    //     alert("clicou com funcao separada");
    // }

    // let btnClick = document.querySelector(".btn-primary");
    // // btnClick.onclick = function() {
    // //     alert("Olá, você clicou");
    // // }
    // btnClick.addEventListener("click", clickBtn);

    /*mouseover*/
    let btnMouseover = document.querySelector(".btn-secondary");
    function acaoQuandoPassaMouse() {
        alert("Mouseover - passou o mouse");
    }
    // btnMouseover.onmouseover = acaoQuandoPassaMouse;

    btnMouseover.addEventListener("mouseover", acaoQuandoPassaMouse);

    /*remover evento mouseover*/
    let btnRemoveOver = document.querySelector(".btn-warning");
    function removerEvent (){
        btnMouseover.removeEventListener("mouseover", acaoQuandoPassaMouse);
    }

    btnRemoveOver.onclick = removerEvent;

    /*mouseoout*/
    let btnMouseout = document.querySelector(".btn-success");
    function acaoQuandoTiraMouse() {
        alert("Mouseout - tirou o mouse");
    }
    //btnMouseout.onmouseout = acaoQuandoTiraMouse;

    btnMouseout.addEventListener("mouseout", acaoQuandoTiraMouse);

    /*change*/
    let selectChange = document.getElementById("select_change");
    // selectChange.onchange = function() {
    //     alert("select mudou");
    // }

    selectChange.addEventListener("change", function() {
        alert("select mudou");
    });

    /*keydown*/
    let inputKey = document.getElementById("input_keydown");
    inputKey.onkeydown = function() {
        alert("voce apertou alguma tecla, eu sei!!!");
    }

    /*this*/
    let btnThis = document.querySelector(".btn-danger");
    
    function minhaFuncao() {
        // this é o elemento que executou o evento
        this.innerText = "Texto mudou";
    }

    function minhaFuncaoElem(elem) {
        // this é o elemento que executou o evento
        elem.innerText = "Texto mudou";
    }

    btnThis.addEventListener("click", minhaFuncao);

    btnMouseout.addEventListener("click", minhaFuncao);
    
    /*preventDefault - cancela eventos padrão de tags html*/
    let linkElem = document.getElementById("link");
    linkElem.addEventListener("click", function(event) {
        event.preventDefault(); 
    // o link não vai mais para o Google
    });

    /*clientX/clientX - retorna a posicao do mouse quando o evento aconteceu*/
    let btnXY = document.querySelector(".btn-info");
    btnXY.addEventListener('click', function(event) {
        console.log(event.clientX);
        console.log(event.clientX);
    });

    /*keyCode*/
    let keyCode = document.getElementById("input_keyCode");
    keyCode.addEventListener('keypress', function(event) {
        let tecla = event.keyCode;
        console.log(tecla);
        if (tecla == 32) { 
            alert("Você apertou space!!");
        }
    });
}

function minhaFuncaoElem(elem) {
    // this é o elemento que executou o evento
    elem.innerText = "Texto mudou";
}

