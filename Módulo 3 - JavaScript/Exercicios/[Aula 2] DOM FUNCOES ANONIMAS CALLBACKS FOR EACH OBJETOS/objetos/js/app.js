/*objetos*/
let carro = {
    marca: "Chevrolet", 
    modelo: "Corsa",
    quilometragem: 65000,
    cor: "Branco",
    donos: ["Luciana", "João", "Zezinho"],

    escopo: function() {
        console.log(this);
    },

    ligar: function() {
        console.log("O " + this.modelo + " está ligado!");
    },

    acelerar: function() {
        console.log("vruuuuummmmmmmmm");
    }
};