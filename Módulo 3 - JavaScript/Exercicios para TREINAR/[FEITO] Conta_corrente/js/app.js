/*objetos*/
let contaBancaria = {
    ag: 5566,
    numero: "0009988-3",
    nome: "Jonas",
    sobrenome: "Oliveira",
    nomeCompleto: function() {
        return `${this.nome} ${this.sobrenome}`
    },

    saldo: 5000,
    chequeEspecial: true,
    limiteEspecial: 1000,
    disponivel: function () {
        return this.saldo + this.limiteEspecial
    },
    
    sacar: function(valor) {

        if ((this.disponivel() - valor) + 1 <= this.limiteEspecial && (!this.chequeEspecial)) {
            return "cheque especial não liberado";
        } else if ((this.disponivel() - valor) + 1 <= 0) {
            return "cheque especial não liberado";
        }
        
        this.saldo -= valor;
    },

    getSaldo: function() {
        return this.saldo;
    }
}