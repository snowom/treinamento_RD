function convertStringToXML(text){
    let parserToXML = new DOMParser();
    let respostaConvertida = parserToXML.parseFromString(text,"text/xml");

    console.log(respostaConvertida);

    return respostaConvertida;
}


function getValueXML(xml, tagName){

    return xml.getElementsByTagName(tagName)[0].childNodes[0].nodeValue;
}


function calculaPrazo(tempoRespostaInicial, incrementoTempoResposta, tentativasRequest){

    const msgTimeOut = "O sistema demorou muito para retornar os dados.\nPor favor, tente novamente mais tarde.";

    let cod_servico = 40010;                /* codigo do servico desejado */
    let cep_origem = "01001000";         /* cep de origem apenas numeros */
    let cep_destino = "02539000";         /* cep de destino apenas numeros */

    const strCalculaPrazo = `http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx/CalcPrazo?&nCdServico=${cod_servico}&sCepOrigem=${cep_origem}&sCepDestino=${cep_destino}`

    console.log(strCalculaPrazo);

    /* Realiza Request */
    axios({
        method: "get",
        url: `https://cors-anywhere.herokuapp.com/${strCalculaPrazo}`,
        timeout: 1000 * tempoRespostaInicial
    })
    //Caso Sucesso da requisição
    .then(function(resposta){
        console.log(resposta.data);
        
        //Converte resposta dada em String para XML 
        let respostaConvertida = convertStringToXML(resposta.data);

        let dias;
        let dataLimite

        try{
            //Caso API tenha retornado algum erro de pesquisa
            let msgErro = getValueXML(respostaConvertida,"MsgErro");
            alert(msgErro);
            
        }catch(e){
            
            //Caso API tenha feito a requisição com sucesso
            dias = getValueXML(respostaConvertida,"PrazoEntrega");
            dataLimite = getValueXML(respostaConvertida,"DataMaxEntrega");
            alert(`Prazo para entrega: ${dias} dias\nData limite de entrega: ${dataLimite}`)
        }

        console.log(dias,dataLimite);
		
    })
    //Caso de erro
    .catch(function(erro){
        console.error(erro);

		//Caso dê timeout
        if(erro.toString().includes("timeout of")){

			if(tentativasRequest>1){
				console.log(`Request na tentativa`);
				calculaPrazo(((tempoRespostaInicial+incrementoTempoResposta)*1), incrementoTempoResposta, (tentativasRequest-1))
			}else{
				alert(msgTimeOut);
            	return;
			}      
        }
    })
}



/*  

###########################################
# Código dos Principais Serviços dos Correios
# 41106 PAC sem contrato
# 40010 SEDEX sem contrato
# 40045 SEDEX a Cobrar, sem contrato
# 40215 SEDEX 10, sem contrato
# ###########################################

*/
