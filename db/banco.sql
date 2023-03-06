CREATE TABLE tipos(
id	int	Not Null auto_increment,
sigla	varchar(3)	Not Null,
rotulo	varchar(15)	Not Null,
constraint id_primary primary key (id)
);

CREATE TABLE produtos(
id int not null auto_increment,
id_tipo	int	Not Null,
nome	Varchar(150)	Not Null,
descricao	varchar(100)	Not Null,
resumo	varchar(1000)	Null,
quantidade	Int	Not Null,
custo_total	Varchar(6)	Not Null,
imagem	varchar(50)	Not Null,
destaque_produto	enum('Sim','Não')	Not Null,
constraint id_primary primary key (id),
constraint id_foreign foreign key (id_tipo) references tipos (id));

CREATE VIEW vw_produtos AS
    SELECT p.id,
        p.id_tipo,
        t.sigla,
        t.rotulo,
        p.nome,
        p.descricao,
        p.resumo,
        p.quantidade,
        p.custo_total,
        p.imagem,
        p.destaque_produto
    FROM produtos p
    JOIN tipos t where p.id_tipo = t.id;
COMMIT;


drop table tipos;
drop tables produtos;

show tables;
select * from produtos;

insert into tipos values ('1','Con','ArCondicionado');
insert into tipos values ('2','Inv','Inverter');
insert into tipos values ('3','Mul','Multi Split');
insert into tipos values ('4','Sol','Solar');

insert into produtos Values ('1', '1','Ar-condicionado Split TCL 9.000 BTUs Frio - Elite A1 TAC-09CSA1','Ar Condicionado Split','Nos meses mais quentes do ano, um País tropical como o nosso sofre com as altas temperaturas. Para amenizar o clima dentro de nossas casas ou trabalho, um Ar-condicionado pode fazer toda a diferença não é mesmo? Por isso vale muito a pena conhecer o Ar-condicionado Elite A1 TAC-09CSA1 da TCL. Trata-se de um ar-condicionado do tipo split que conta com uma incrível refrigeração de 9.000 BTUs que com certeza vai deixar o clima muito agradável no cômodo instalado. Com ciclo frio, esse ar certamente fará parte do conforto de todos ao redor pela qualidade do produto.','15','2.159','Arsplit1.webp','Sim');
insert into produtos Values ('2', '1','Ar Condicionado Piso-teto Springer Silvermaxi 36000 BTU F220','Ar Condicionado Split Piso Teto Springer Silvermaxi 36000 Btus Frio 220V Monofásico','O Split Springer Silvermaxi combina tecnologia, excelente desempenho e sustentabilidade, pois utiliza um fluido refrigerante que não agride a Camada de Ozônio. As novas condensadoras do Springer Silvermaxi, de 36.000 a 58.000 BTU/h, utilizam o gás refrigerante HFC R-410A (PURON) que, além de proporcionar uma performance superior, ajuda a preservar o meio ambiente, pois não agride a Camada de Ozônio.','12','3.119','Arsplit2.jpg','Sim');
insert into produtos Values ('3', '1','Ar Condicionado Electrolux Split 9.000 Btus Frio Linha Ecoturbo (VI09F/VE09F) 220V','Ar Condicionado Split','O Ar Condicionado Split EcoTurbo Electrolux oferece um ar mais puro, com classificação energética A, que garante a economia de energia que você precisa. Utiliza o Gás R410a, um gás que não agride a camada de ozônio, conta com a Função Siga-me; que faz com que a temperatura desejada, seja mantida onde está localizado o controle remoto, Função Auto-limpeza, para evitar a proliferação de odores e mofo.','12','1.759','Arsplit3.jpg','Sim');
insert into produtos Values ('4', '1','Ar Condicionado Split Inverter LG Hi Wall DUAL Compact 12000 BTUs Frio S4NQ12JA3A5 - 220V','Ar Condicionado Split','','10','4.759','Arsplit4.jpg','Sim');
insert into produtos Values ('5', '1','Ar-condicionado Split TCL 9.000 BTUs Frio - Elite A1 TAC-09CSA1','Ar Condicionado Split','','15','3.959','Arsplit1','Sim');

