//Função para encurtar código para pegar elementos HTML
function getElement(element){
    return document.querySelector(element);
}


/* Campos Formulário */
let txtCEP = getElement("#txtCEP");
let txtRua = getElement("#txtRua");
let txtBairro = getElement("#txtBairro");
let txtCidade = getElement("#txtCidade");
let txtNumRua = getElement("#txtNumRua");
let msgErro = getElement("#msgErro");
//let cbbUF = getElement("#cbbUF");

setDisabledStatusInputs(true);


//Chama funcão após perder o Foco
txtCEP.addEventListener("blur", function(){
    validaCep(7,3,3);
});


/* ============================================================================================= */
/* =============================== REQUEST CEP JSON VIA ACESSO ================================= */
/* ============================================================================================= */

function formataCEP(cep){

    if(cep.includes("-")){
        cep = cep.replace("-","");
    }
    
    console.log(cep);
    return cep;
}


function limpaCampos(){
    txtRua.value = "";
    txtBairro.value = "";
    txtCidade.value = "";
    cbbUF.options[0].selected = 'selected'
}


function requestCEP(segundosTimeout, incrementoTempoResposta, tentativasRequest){

    const msgTimeOut = "O sistema demorou muito para retornar os dados.\n\nPor favor, tente novamente mais tarde ou preencha os dados manualmente.";

    const msgCEPfalso = "O CEP informado não existe";

    //Limpa os valores dos campos de endereço
    setDisabledStatusInputs(false);
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


        //Caso o usuário tenha digitado um CPF inexistente
        if(resposta.data.erro == true){
            //Caso CEP Inexistente na base de dados
            msgErro.textContent = msgCEPfalso;
            msgErro.style.display = "block";
            setDisabledStatusInputs(true);
            setErrorLayout(txtCEP);
            return;
        }

        //Popula Campos com retorno do JSON
        msgErro.style.display = "none";
        txtRua.value = resposta.data.logradouro;
        txtBairro.value = resposta.data.bairro;
        txtCidade.value = resposta.data.localidade;
        cbbUF.value = resposta.data.uf;

        setPassLayout(txtCEP);
        setDisabledStatusInputs(true);
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
                setDisabledStatusInputs(false);
            	return;
			}      
        }
        else{
            //Caso a API esteja com algum erro
            alert("Desculpe, mas ocorreu um erro interno na API.\nPor favor, tente novamente mais tarde")
        }
    });
}


function setDisabledStatusInputs(status){
    txtRua.disabled = status;
    txtBairro.disabled = status;
    txtCidade.disabled = status;
    cbbUF.disabled = status;
}


/* ============================================================================================= */
/* ===================================== REGEX CEP ============================================= */
/* ============================================================================================== */

function validaRegex(regexString, elemento){
    return regexString.test(elemento.value);
}


function setPassLayout(elemento){
    elemento.style.backgroundColor = "white";
    elemento.style.borderColor = "green";
}


function setErrorLayout(elemento){
    elemento.style.borderColor = "red"
    //elemento.style.backgroundColor = "rgba(255, 0, 0, 0.288)";
}


function validaCep(){

    //REGEX CEP COM OU SEM TRACO
    let resultadoRegex = validaRegex(/^[0-9]{5}?\-?[0-9]{3}$/, txtCEP);

    if(resultadoRegex==true){
        console.log(`STAUTS CEP = REGEX ${resultadoRegex}`);
        msgErro.style.display = "none";
        requestCEP(7,3,3);
    }
    else{
        setErrorLayout(txtCEP);
        limpaCampos();
        msgErro.textContent = "Entrada de caracteres inválida"
        msgErro.style.display = "block";
        console.log(`STAUTS CEP = REGEX ${resultadoRegex}`);
    }

    return resultadoRegex;
}