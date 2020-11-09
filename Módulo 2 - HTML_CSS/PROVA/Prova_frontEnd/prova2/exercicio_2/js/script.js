function mostrarPremio(posicao){

    //----- SOLUCAO 1 -----
    let arrayPremios = ["1000,00", "800,00", "500,00"];

        if(arrayPremios[posicao-1]==undefined){
            return "sem Prêmio";
        }
        return arrayPremios[posicao-1];

    //----- SOLUCAO 2 -----
    /* switch (posicao){
        case 1:
            return "1000,00";

        case 2:
            return "800,00";
        case 3:
            return "500,00"
        default:
            return "sem Prêmio";
    } */
}