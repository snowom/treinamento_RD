create table Cliente(
	cd_cliente bigint primary key auto_increment,
	nm_cliente varchar (50) not null,
	cd_tipo_cliente int not null,
	cd_tipo_pessoa int not null,
	cd_fiador int,
	nr_cpf varchar (15),
	nr_cnpj varchar (20),
	nr_telefone varchar (10),
	ds_email varchar (30),
	dt_nascimento char (10)
);


create table tipo_cliente(
	cd_tipo_cliente int primary key auto_increment,
	ds_tipo_cliente varchar (50)
);

insert tipo_cliente values(
	default,
	'Locatário'
);

insert tipo_cliente values(
	default,
	'Inquilino'
);

alter table Cliente 
add constraint fk_cd_tipo_cliente
foreign key (cd_tipo_cliente)
references tipo_cliente (cd_tipo_cliente);



create table tipo_pessoa(
	cd_tipo_pessoa int primary key auto_increment,
	ds_tipo_pessoa varchar (50)
);


insert tipo_pessoa values(
	default,
	'Pessoa Física'
);

insert tipo_pessoa values(
	default,
	'Pessoa Jurídica'
);

alter table Cliente 
add constraint fk_cd_tipo_pessoa
foreign key (cd_tipo_pessoa) 
references tipo_pessoa(cd_tipo_pessoa);


insert Cliente values (
	default,
	'Thomaz Teste 1',
	1,
	1,
	1,
	'935.839.385.48',
	null,
	'4002-8922',
	'teste@teste.com',
	'01/01/2000'
);


-- select cliente, tipo_cliente e tipo_pessoa
select c.cd_cliente, c.nm_cliente, tc.ds_tipo_cliente, tp.ds_tipo_pessoa, 
c.cd_fiador, c.nr_cpf, c.nr_cnpj, c.nr_telefone, c.ds_email, c.dt_nascimento from Cliente c 
inner join tipo_pessoa tp 
on tp.cd_tipo_pessoa = c.cd_tipo_pessoa
inner join tipo_cliente tc 
on tc.cd_tipo_cliente = c.cd_tipo_cliente ;


create table endereco(
	cd_endereco int primary key auto_increment,
	ds_endereco varchar(50) not null,
	ds_bairro varchar(50) not null,
	ds_cidade varchar(50) not null,
	sg_uf char(2) not null,
	nr_cep varchar(9) not null,
	cd_imovel int not null,
	cd_cliente bigint,
	cd_fiador bigint
);


alter table endereco
add constraint fk_cd_cliente
foreign key (cd_cliente)
references Cliente(cd_cliente);


insert endereco values(
	default, -- ID endereco
	'Rua Teste Teste', -- Rua
	'Bairro Teste', -- Bairro
	'Cidade Teste', -- Cidade
	'TS', -- UF
	'93485928', -- CEP
	1, -- Codigo imovel
	1, -- Codigo cliente
	null -- Codigo Fiador
);
 

-- Select endereco cliente locatário
select c.nm_cliente, e.cd_endereco, e.ds_endereco, e.ds_bairro, e.ds_cidade, e.sg_uf,
e.nr_cep, e.cd_imovel, e.cd_fiador from endereco e 
inner join Cliente c 
on c.cd_cliente = e.cd_cliente;



create table fiador(
	cd_fiador bigint primary key auto_increment,
	nm_fiador varchar (50) not null,
	nr_cpf varchar (15),
	nr_cnpj varchar (20),
	nr_telefone varchar (10),
	ds_email varchar (30),
	cd_tipo_pessoa int not null
);

alter table fiador 
add constraint fk_cd_tipo_pessoa_fiador
foreign key (cd_tipo_pessoa)
references tipo_pessoa (cd_tipo_pessoa);


insert fiador values (
	default, -- Codigo Fiador
	'Fiador Teste 1', -- Nome Fiador
	'653.025.735.08', -- CPF Fiador
	null, -- CNPJ Fiador
	'4002-2167', -- Telefone Fiador
	'testeFiador@teste.com', -- Email Fiador
	1 -- Tipo Pessoa Fiador
);

insert endereco values(
	default, -- ID endereco
	'Rua Teste Fiador', -- Rua
	'Bairro Teste Fiador', -- Bairro
	'Cidade Teste Fiador', -- Cidade
	'TF', -- UF
	'29475029', -- Cep
	1, -- Codigo Imovel
	null, -- Cd_cliente
	1 -- Cod_fiador
);

-- Select endereco cliente fiador + dados fiador
select f2.nm_fiador, f2.nr_cpf, f2.nr_cnpj, f2.nr_telefone,
f2.ds_email, tp.ds_tipo_pessoa, e2.cd_endereco, e2.ds_bairro, e2.ds_cidade,
e2.sg_uf, e2.nr_cep, e2.cd_imovel, e2.cd_cliente, e2.cd_fiador from fiador f2 
inner join endereco e2 
on e2.cd_fiador = f2.cd_fiador
inner join tipo_pessoa tp
on tp.cd_tipo_pessoa = f2.cd_tipo_pessoa;
