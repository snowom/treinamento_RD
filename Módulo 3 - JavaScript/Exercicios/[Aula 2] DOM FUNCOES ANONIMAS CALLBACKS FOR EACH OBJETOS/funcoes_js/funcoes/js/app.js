/*funções - sem parametros*/
// function multiplicacao() {
//     let n1 = 5000;
//     let n2 = 65;
//     let resultado = n1 * n2;

//     return resultado;
// }

/*funções - com parametros*/
// function multiplicacao(n1, n2) {
//     let resultado = n1 * n2;

//     return resultado;
// }

/*funções - calculo no return*/
// function multiplicacao(n1, n2) {
//     return n1 * n2;
// }

/*funções - anonima atribuida a uma variavel*/
// let multiplicacao = function(n1, n2) {
//     return n1 * n2;
// }

// console.log(multiplicacao(200, 10));
// console.log(multiplicacao(5, 3));
// console.log(multiplicacao(5000, 1000));

/*Funções aninhadas*/
// function circunferencia(raio) {
//     function diametro() {
//         return 2*raio;
//     }

//     return Math.PI * diametro();

// }

// circunferencia(6)

/*callback*/
// function a(callback) {
//     console.log("a vem primeiro");
//     callback();
//     console.log("depois do callback");
// }

// function b() {
//     console.log("b vem depois");
// }

/*callback com funcao anonima*/
function a(callback) {
    console.log("a vem primeiro");
    callback();
    console.log("depois do callback");
    callback();
}

a(function () { console.log("funcao anonima executada");});