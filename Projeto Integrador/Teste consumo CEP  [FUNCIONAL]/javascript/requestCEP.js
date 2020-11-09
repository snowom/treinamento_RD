//Função para encurtar código para pegar elementos HTML
function getElement(element){
    return document.querySelector(element);
}


function formataCEP(cep){

    if(cep.includes("-")){
        cep = cep.replace("-","");
    }
    
    console.log(cep);
    return cep;
}


function limpaCampos(){
    txtEndereco.value = "";
    txtBairro.value = "";
    txtCidade.value = "";
    txtUF.value = "";
}


function requestCEP(segundosTimeout, incrementoTempoResposta, tentativasRequest){

    const msgTimeOut = "O sistema demorou muito para retornar os dados.\n\nPor favor, tente novamente mais tarde ou preencha os dados manualmente.";

    //Limpa os valores dos campos de endereço
    limpaCampos();

    //Verifica se CEP digitado contem traço e retorna um CEP SEM traços
    let cep = formataCEP(txtCEP.value);

    //Define String de Requisição
    const strLinkRequest = `https://viacep.com.br/ws/${cep}/json/`;


    //Realiza Requisição
    axios({
        method: "get", /* Define o método de Requisição */
        url: strLinkRequest, /* Define a URL de Request */
        timeout: 1000* segundosTimeout /* DEFINE TEMPO LIMITE DE ESPERA DO RETORNO DA REQUISIÇÃO*/
    })

    /*Sucesso Requisição SEM ARROW FUNCTION*/
    .then(function(resposta){

        //Popula Campos com retorno do JSON
        txtEndereco.value = resposta.data.logradouro;
        txtBairro.value = resposta.data.bairro;
        txtCidade.value = resposta.data.localidade;
        txtUF.value = resposta.data.uf;
    })

    /* Falha na Requisição COM ARROW FUNCTION*/
    .catch(erro => {
        console.error(erro);

        //Caso tenha dado timeout
        if(erro.toString().includes("timeout of")){

			if(tentativasRequest>1){
				console.log(`Request na tentativa`);
				requestCEP(strLinkRequest, (segundosTimeout+(incrementoTempoResposta*1)), (tentativasRequest-1));
			}else{
				alert(msgTimeOut);
            	return;
			}      
        }
        else{
            //Caso CEP Inexistente na base de dados
            alert("O CEP informado não existe na base de dados!")
        }
    });
}


/* Campos Formulário */
let txtCEP = getElement("#txtCEP");
let txtEndereco = getElement("#txtEndereco");
let txtBairro = getElement("#txtBairro");
let txtCidade = getElement("#txtCidade");
let txtUF = getElement("#txtUF");


//Chama funcão após perder o Foco
txtCEP.addEventListener("blur", requestCEP);
