-- CRIACAO DA TABELA CLIENTE
create table TB_Cliente(
	id_cliente int primary key auto_increment,
	nome_cliente varchar (50) not null,
	tipo_pessoa int not null,
	id_endereco int not null auto_increment
);


-- CRIACAO DA TABELA TIPO_PESSOA
create table TB_Tipo_Pessoa(
	id_tipo_pessoa int primary key auto_increment,
	descricao_tipo_pessoa varchar (50) not null
);


-- CRIACAO DA TABELA ENDERECO
create table TB_Endereco(
	id_endereco int primary key auto_increment,
	id_cliente int not null,
	rua_endereco varchar (50) not null,
	num_endereco int not null,
	bairro_endereco varchar (50) not null,
	cidade_endereco varchar (50) not null,
	uf_endereco char (2) not null,
	cep_endereco char (9) not null
);


-- CRIACAO DA TABELA TB_CONTRATO
create table TB_Contrato(
	id_contrato bigint primary key auto_increment,
	tipo_contrato int not null,
	id_cliente int not null,
	data_inicio_contrato varchar(10) not null,
	periodo_vigencia_contrato int not null,
	data_fim_contrato varchar(10) not null
);


-- CRIACAO DA TABELA TB_TIPO_CONTRATO
create table TB_Tipo_Contrato(
	id_tipo_contrato bigint primary key auto_increment,
	descricao_tipo_contrato varchar(50) not null
);


-- INSERÇÃO DE DADOS NA TABELA TB_TIPO_CLIENTE
insert TB_Tipo_Contrato values(
	default,
	'Compra e Venda'
);

insert TB_Tipo_Contrato values(
	default,
	'Prestação de Serviços'
);

insert TB_Tipo_Contrato values(
	default,
	'Trabalho'
);



-- INSERÇÃO DE DADOS NA TABELA CONTRATO
insert TB_Contrato values(
	default,
	1,
	1,
	'01/01/2020',
	90,
	'01/04/2020'
);

insert TB_Contrato values(
	default,
	2,
	2,
	'06/03/2020',
	60,
	'06/05/2020'
);

insert TB_Contrato values(
	default,
	3,
	3,
	'23/08/2020',
	60,
	'23/10/2020'
);

-- INSERÇÃO DE DADOS NA TABELA CLIENTE
insert TB_Cliente values (
	default,
	'Thomaz Ferreira',
	1,
	1
);


insert TB_Cliente values (
	default,
	'Arthur Tavares',
	1,
	2
);


insert TB_Cliente values (
	default,
	'Wilson Almeida',
	2,
	3
);



-- INSERÇÃO DE DADOS NA TABELA TB_TIPO_PESSOA
insert TB_Tipo_Pessoa values (
	default,
	'Pessoa Fisica'
);

insert TB_Tipo_Pessoa values (
	default,
	'Pessoa Juridica'
);



-- INSERÇÃO DE DADOS NA TABELA TB_ENDERECO

-- CRIANDO ENDEREÇO PARA CLIENTE DE ID = 1
insert TB_Endereco values (
	default,
	1,
	'Rua Armando Coelho Silva',
	32,
	'Parque Peruche',
	'São Paulo',
	'SP',
	'02539-000'
);

-- CRIANDO MAIS DE 1 ENDEREÇO PARA O CLIENTE DE ID = 1
insert TB_Endereco values (
	default,
	1,
	'Rua Santa Carolina',
	225,
	'Vila São Pedro',
	'Santo André',
	'SP',
	'09210-160'
);

-- CRIANDO ENDEREÇO PARA CLIENTE DE ID = 2
insert TB_Endereco values (
	default,
	2,
	'Rua Carapicuiba',
	195,
	'Carapicuiba',
	'Carapicuiba',
	'SP',
	'06326-010'
);


-- CRIANDO ENDEREÇO PARA CLIENTE DE ID = 3
insert TB_Endereco values (
	default,
	3,
	'Rua Nova Granada',
	35,
	'Casa Verde',
	'São Paulo',
	'SP',
	'02522-050'
);



-- CRIACAO DE FK DA TABELA TB_TIPO_CLIENTE COM TB_CLIENTE

alter table TB_Cliente -- TABELA DE DESTINO
add constraint fk_id_tipo_pessoa -- NOME DA CONSTRAINT
foreign key (tipo_pessoa) -- ATRIBUTO QUE FARA LIGAÇÃO COM FK DA OUTRA TABELA 
references TB_Tipo_Pessoa (id_tipo_pessoa); -- TABELA DE ORIGEM E ATRIBUTO QUE FARA LIGAÇÃO COM A TABELA DE DESTINO


-- CRIACAO DE FK DA TABELA TB_TIPO_CONTRATO COM TB_CONTRATO

alter table TB_Contrato-- TABELA DE DESTINO
add constraint fk_id_tipo_contrato -- NOME DA CONSTRAINT
foreign key (tipo_contrato) -- ATRIBUTO QUE FARA LIGAÇÃO COM FK DA OUTRA TABELA 
references TB_Tipo_Contrato (id_tipo_contrato); -- TABELA DE ORIGEM E ATRIBUTO QUE FARA LIGAÇÃO COM A TABELA DE DESTINO


-- CRIACAO DE FK DA TABELA TB_CLIENTE COM TB_ENDERECO

alter table TB_Endereco -- TABELA DE DESTINO
add constraint fk_id_cliente -- NOME DA CONSTRAINT
foreign key (id_cliente) -- ATRIBUTO QUE FARA LIGAÇÃO COM FK DA OUTRA TABELA 
references TB_Cliente (id_cliente); -- TABELA DE ORIGEM E ATRIBUTO QUE FARA LIGAÇÃO COM A TABELA DE DESTINO



-- SELECT CLIENTE COM INNER JOIN NA TABELA TB_CLIENTE COM TB_TIPO_CLIENTE E
-- INNER JOIN DA TABELA TB_ENDERECO COM TABELA TB_CLIENTE
-- INNER JOIN DA TABELA TB_CONTRATO COM TABELA TB_CLIENTE
-- INNER JOIN DA TABELA TB_CONTRATO COM TABELA TB_TIPO_CONTRATO

select tc.id_cliente as 'ID CLIENTE', tc.nome_cliente as 'NOME CLIENTE', 
ttp.descricao_tipo_pessoa as 'TIPO PESSOA', te.rua_endereco as 'RUA',
te.num_endereco as 'NUMERO', te.bairro_endereco as 'BAIRRO', te.cidade_endereco as 'CIDADE',
te.uf_endereco as 'UF', te.cep_endereco as 'CEP', ttc.descricao_tipo_contrato as 'TIPO CONTRATO',
tcont.data_inicio_contrato as 'DATA INICO CONTRATO', tcont.periodo_vigencia_contrato as 'PERIODO DE VIGÊNCIA (DIAS)',
tcont.data_fim_contrato as 'DATA FIM CONTRATO'
from TB_Cliente tc 
inner join TB_Tipo_Pessoa ttp 
on ttp.id_tipo_pessoa = tc.tipo_pessoa
inner join TB_Endereco te 
on te.id_cliente = tc.id_cliente
inner join TB_Contrato tcont
on tcont.id_cliente = tc.id_cliente
inner join TB_Tipo_Contrato ttc 
on ttc.id_tipo_contrato = tcont.tipo_contrato;
