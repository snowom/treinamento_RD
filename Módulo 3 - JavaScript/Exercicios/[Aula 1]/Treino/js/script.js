//1. Criar e definir 5 variáveis com os seguintes valores:

    let numPositivo = 5;
    let numNegativo = -3;
    let numDecimal = 23.9;
    let nomeString = "Teste";
    let booleana = true;

//2. Agora imprima as variáveis acima usando a função console.log()

    console.log(numPositivo);
    console.log(numNegativo);
    console.log(numDecimal);
    console.log(nomeString);
    console.log(booleana);


//3. Criar e definir 2 variáveis (nome e sobrenome) e imprimir a 
//concatenação das variáveis adicionando um espaço no meio.

    var nome = "Thomaz";
    var sobrenome = "Ferreira";

    document.write(nome + " " + sobrenome);

/* 4. Experimente executar o seguinte código:

    var nome = "Clara";
    console.log(Nome);

O que acontece? 
O navegador não reconhece a variável Nome, pois o JS é case sensitive */


// 5. Experimente executar o seguinte código:

    var nome = "Clara";
    console.log(nome, sobrenome);

/* O que acontece? Por quê? 
A variavel sobrenome é sobrescrita com o novo valor da valor da variavel declarada */


/* 7. criar 2 variáveis valorNulo e naodefinido, definindo os
valores respectivamente como “null” e “undefined”, e
imprimir as duas variáveis utilizando a função
console.log(). */

    let valorNulo = null;
    let naodefinido = undefined;

    console.log("valorNulo --> " + valorNulo);
    console.log("naodefinido --> " + naodefinido);


/* 8. Criar um array com 5 frutas diferentes e imprimir
utilizando a função console.log(). */

    let frutas = ["mamão", "banana", "abacate", "limão", "morango"];
    console.log(frutas);


/* 9. Criar uma variável de uma string com o texto: “RD Está aqui agora!” */

    let RD = "RD Está aqui agora!";


/* 10. Criar uma variável boolean com o nome de casado e
o valor de false. Mostrar na tela o valor true dessa
variável, utilizando o operador de negação. */

    var casado = false;
    document.write("<br><br>!Casado --> " + !casado);


/* 11. Criar uma variável boolean com o nome de casado e
o valor de true. Mostrar na tela o valor false dessa
variável, utilizando o operador de negação. */

    var casado = true;
    document.write("<br>!Casado --> " + !casado);

    
/* 12. Transforme o if abaixo em um switch:

    var nota = 10;
    if (nota == 10 || nota == 9) {
    console.log("melhores alunos!");
    } else if (nota == 8 || nota == 7) {
    console.log("Muito bom");
    } else if (nota == 6 || nota == 5) {
    console.log("Ufa! você passou!");
    } else if (nota == 4 ) {
    console.log("Recuperação");
    } else if (nota == 3 || nota == 2|| nota == 1 || nota == 0) {
    console.log("Reprovado!");
    } else {
    console.log("Nota inválida!");
    } */

    var nota = 10;
    
    switch(nota){

        case 10:
        case 9:
            console.log("melhores alunos!");
            break;
        
        case 8:
        case 7:
            console.log("Muito bom");
            break;

        case 6:
        case 5:
            console.log("Ufa! você passou!");
            break;

        case 4:
            console.log("Recuperação");
            break;
        
        case 3:
        case 2:
        case 1:
        case 0:
            console.log("Reprovado!");
            break;

        default:
            console.log("Nota inválida!");
    }