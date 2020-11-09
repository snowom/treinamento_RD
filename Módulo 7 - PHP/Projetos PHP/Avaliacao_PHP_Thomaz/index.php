<?php

require_once 'classes/Pessoa.php';
require_once 'interfaces/Emissivel.php';
require_once 'classes/Documento.php';
require_once 'classes/Contrato.php';
require_once 'classes/Certidao.php';
require_once 'classes/PessoaFisica.php';
require_once 'classes/PessoaJuridica.php';
require_once 'classes/Cartorio.php';
require_once 'classes/Tabeliao.php';


$tb = new Tabeliao('Tabeliao 1', '92929292');

$cartorio = new Cartorio('Cartorio 1', 'Rua Teste');
$testemunha1 = new PessoaFisica('Testemunha 1', '000000000');
$testemunha2 = new PessoaFisica('Testemunha 2', '111111111');

$parteEnvolvida1 = new PessoaFisica('Thomaz', '02539000', 21);
$parteEnvolvida2 = new PessoaJuridica('Arcos Dourados', '123456', 'McDonalds', 'Grande', 'Rua Teste');

$certidao1 = new Certidao($testemunha1, $testemunha2, 'Casamento', '01/01/2020', '02/01/2020', $tb, $cartorio);

print_r($certidao1);

?>