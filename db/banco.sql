DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE tipos(
id	int	Not Null auto_increment,
sigla	varchar(3)	Not Null,
rotulo	varchar(15)	Not Null,
constraint id_primary primary key (id)
);

CREATE TABLE produtos(
id int not null auto_increment,
id_tipo	int	Not Null,
nome	Varchar(50)	Not Null,
tipo	int	Not Null,
descricao	varchar(100)	Not Null,
resumo	varchar(1000)	Not Null,
preco_unitario	Float(5)	Not Null,
quantidade	Int	Not Null,
custo_total	Varchar(6)	Not Null,
imagem	varchar(50)	Not Null,
destaque_produto	enum('Sim','Não')	Not Null,
constraint id_primary primary key (id),
constraint id_foreign foreign key (id_tipo) references tipos (id));