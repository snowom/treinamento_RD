function convertStringToXML(text){
    let parserToXML = new DOMParser();
    let respostaConvertida = parserToXML.parseFromString(text,"text/xml");

    console.log(respostaConvertida);

    return respostaConvertida;
}


function getValueXML(xml, tagName){

    return xml.getElementsByTagName(tagName)[0].childNodes[0].nodeValue;
}


function calculaPrazoFrete(tempoRespostaInicial, incrementoTempoResposta, tentativasRequest){

    const msgTimeOut = "O sistema demorou muito para retornar os dados.\nPor favor, tente novamente mais tarde.";

    let cod_servico = 40010;                /* codigo do servico desejado */
    let cep_origem = "01001000";         /* cep de origem = 0 apenas numeros */
    let cep_destino = "02539000";         /* cep de destino = 0 apenas numeros */


    let peso = "1";                /* valor dado em Kg incluindo a embalagem*/
    let altura = "30";              /* altura do produto em CM incluindo a embalagem */
    let largura = "100";             /* altura do produto em CM incluindo a embalagem */
    let comprimento = "15";         /* comprimento do produto incluindo embalagem em cm */
    let valor_declarado ="0";     /* indicar 0 caso nao queira o valor declarado */
    let diametroEncomenda ="0";
    let formatoEntrega = "1";   /* Formato da encomenda (incluindo embalagem): 1, 2 ou 3 1 – Formato caixa/pacote 2 – Formato rolo/prisma 3 - Envelope */

/*  

###########################################
# Código dos Principais Serviços dos Correios
# 41106 PAC sem contrato
# 40010 SEDEX sem contrato
# 40045 SEDEX a Cobrar, sem contrato
# 40215 SEDEX 10, sem contrato
# ###########################################

*/

    const strCalculaPrecoPrazo = `http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCepOrigem=${cep_origem}&sCepDestino=${cep_destino}&nVlPeso=${peso}&nCdFormato=${formatoEntrega}&nVlComprimento=${comprimento}&nVlAltura=${altura}&nVlLargura=${largura}&sCdMaoPropria=n&nVlValorDeclarado=${valor_declarado}&sCdAvisoRecebimento=n&nCdServico=${cod_servico}&nVlDiametro=${diametroEncomenda}&StrRetorno=xml&nIndicaCalculo=3`

    console.log(strCalculaPrecoPrazo);

    /* Realiza Request */
    axios({
        method: "get",
        url: `https://cors-anywhere.herokuapp.com/${strCalculaPrecoPrazo}`,
        timeout: 1000*tempoRespostaInicial
    })
    //Caso Sucesso da requisição
    .then(function(resposta){
        console.log(resposta.data);
        
        //Converte resposta dada em String para XML 
        let respostaConvertida = convertStringToXML(resposta.data);
        
        let valor = getValueXML(respostaConvertida,"Valor");
        let prazoEntrega = getValueXML(respostaConvertida,"PrazoEntrega");

        try{
            //Caso API tenha retornado algum erro de pesquisa
            let msgErro = getValueXML(respostaConvertida,"MsgErro");
            alert(msgErro);
        }catch(e){

            //Caso API tenha feito a requisição com sucesso
            alert(`Valor do frete: ${valor}\nPrazo de entrega: ${prazoEntrega} dias úteis`);
        }
    })
    //Caso de erro
    .catch(function(erro){
        console.error(erro);

        //Caso dê timeout
        if(tentativasRequest>1){
            console.log(`Request na tentativa`);
            calculaPrazoFrete(((tempoRespostaInicial+incrementoTempoResposta)*1), incrementoTempoResposta, (tentativasRequest-1))
        }else{
            alert(msgTimeOut);
            return;
        } 
    })
}