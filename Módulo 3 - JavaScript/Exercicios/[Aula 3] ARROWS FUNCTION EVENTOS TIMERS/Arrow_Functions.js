/*arrow functions*/

    /*sem parametros e com apenas uma linha*/
    let clickBtnArrow = () => alert("clicou com funcao separada");
    
	/*com 1 parametro e com apenas uma linha*/
    let clickBtnArrow = param => alert("clicou com funcao separada");
    
	/*com 2 ou mais parametros e com apenas uma linha*/
    let clickBtnArrow = (param1, param2) => alert("clicou com funcao separada");
    
	// não é necessário o return quando tempo apenas uma linha
    let soma = (n1, n2) => n1 + n2;
    
	/*com mais de uma linha*/
    let clickBtnArrow = (param1, param2) => {
        alert("clicou com funcao separada");
        alert("clicou com funcao separada");
	}