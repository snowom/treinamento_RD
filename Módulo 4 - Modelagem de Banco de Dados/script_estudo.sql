select * from TB_produto
select * from TB_categoria_prod tcp 


-- CRIACAO DE CONSTRAINT FOREIGN KEY

alter table TB_categoria_prod 
add constraint fk_catProd_idProd
foreign key (id_categoria_prod)
references TB_produto (id_produto)

update TB_produto
set categoria_produto 


-- INNER JOIN USANDO A CHAVE ESTRANGEIRA fk_catProd_idProd

select tp.id_produto, tp.nome_produto, tp.preco_produto, tcp.descricao_categoria_prod from TB_produto tp 
inner join TB_categoria_prod tcp 
on tcp.id_categoria_prod  = tp.categoria_produto
order by 3


-- DELETAR COLUNA DE UMA TABELA

ALTER TABLE NOME_TABELA DROP COLUMN NOME_COLUNA;


-- UPDATE EM UMA COLUNA

update TB_produto
set categoria_produto = 4
where id_produto = 2


-- BEGIN TRANSACTION

start transaction;
-- BLOCO DE COMANDOS
rollback ou commit;


-- ALT + X = Executa bloco de instruçoes;
-- CTRL + ENTER = Executa apenas 1 instrução;