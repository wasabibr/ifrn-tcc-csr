<<<<<<< HEAD
/* Criando a Base de Dados db_csr */;
CREATE DATABASE 'db_csr';

/* Utilizando o dbcsr */;
USE db_csr;

/* Criando a tabela tb_usuarios */;
/* Escolha de um avatar entre três opções apresentadas (1, 2 ou 3) */;
CREATE TABLE 'tb_usuarios'
(
	'USUARIO_ID' INT NOT NULL AUTO_INCREMENT,
	'AVATAR' INT NOT NULL DEFAULT '1',
	'NOME_DO_USUARIO' VARCHAR(50),
	'SEGUNDO_NOME_DO_USUARIO' VARCHAR(50),
	'SOBRENOME_DO_USUARIO' VARCHAR(250), 
	'DATA_DE_NASCIMENTO' DATE, 
	'CPF' INT, 
	'NOME_DE_ACESSO' VARCHAR(100) NOT NULL,
    	'EMAIL_PRINCIPAL' VARCHAR(220) NOT NULL,
	'SENHA_USUARIO' VARCHAR(15) NOT NULL, 
	'END_DO_USUARIO' VARCHAR(300), 
	'COMP_END_DO_USUARIO' VARCHAR(150), 
	'CEP' VARCHAR(100), 
	'CIDADE' VARCHAR(100), 
	'ESTADO' CHAR(2), 
	'PAIS' VARCHAR(200),
	 PRIMARY KEY ('USUARIO_ID')
);

/* Inserindo usuarios na tabela tb_usuarios */;
INSERT INTO 'tb_usuarios' (AVATAR, NOME_DO_USUARIO, SEGUNDO_NOME_DO_USUARIO, SOBRENOME_DO_USUARIO, DATA_DE_NASCIMENTO, CPF, NOME_DE_ACESSO, EMAIL_PRINCIPAL, SENHA_USUARIO, END_DO_USUARIO, COMP_END_DO_USUARIO, CEP, CIDADE, ESTADO, PAIS, USUARIO_ID )
VALUES
(1, 'Jefferson',, 'Leandro Ramos de Oliveira', 1978-02-10,, 'jefflro', 'jefframos-tcc@gmail.com', 123, 'rua onde moro, n100',, '59012370', 'Natal', 'RN', 'Brasil', 1),
(1, 'Erika', 'Monik', 'A. de M. R. de Oliveira', 1984-05-02,, 'monikoliveira', 'monik@oliveira.com', 123, 'rua onde moro, n100',, '59012370', 'Natal', 'RN', 'Brasil', 2),
(1, 'Alice',, 'Mendonça Ramos de Oliveira', 2017-10-24,, 'alicemro', 'alice@oliveira.com', 123, 'rua onde moro, n100',, '59012370', 'Natal', 'RN', 'Brasil', 3),
(1, 'Edson',, 'Leandro de Oliveira', 1947-12-13,, 'edleandro', 'edson@oliveira.com', 123, 'rua diferente de onde moro, n234',, '59024510', 'Natal', 'RN', 'Brasil', 4);

/* Criando a tabela tb_colecao */;
/* Categoria privada (0) ou pública (1) */;
CREATE TABLE 'tb_colecao'
(
	'COLECAO_ID' INT NOT NULL AUTO_INCREMENT;
	'USUARIO_ID' INT,
	'NOME_DA_COLECAO' VARCHAR(150) NOT NULL,
	'CATEGORIA_COL' INT NOT NULL DEFAULT 1,
	'DESCRICAO_COL' TEXT,
	PRIMARY KEY ('COLECAO_ID'),
	FOREIGN KEY ('USUARIO_ID') REFERENCES tb_usuarios('USUARIO_ID')
);

/* Criando a tabela tb_item */;
/* Categoria: MAINLINE, TH, STH ou PREMIUM */
/* Embalagem: loose (0) ou blister (1)*/
/* Material de carroceria: plástico (0) ou metal (1) */
/* Material de chassis: plástico (0) ou metal (1) */
/* Decalques: não (0) ou sim (1) */
/* Rodas:  */
/* Pneu: plástico (0) ou borracha (1) */
CREATE TABLE 'tb_item'
(
	'ITEM_ID' INT NOT NULL AUTO_INCREMENT,
	'NOME_DO_MODELO' VARCHAR(200) NOT NULL,
	'COD_DO_MODELO' VARCHAR(200),
	'CATEGORIA' VARCHAR(250) DEFAULT 'MAINLINE',
	'SERIE_DO_MODELO' VARCHAR(100),
	'SUBSERIE_DO_MODELO' VARCHAR(100),
	'TEMA' VARCHAR(100),
	'FABRICANTE_DO_MODELO_ORIGINAL' VARCHAR(150),
	'ESCALA_DO_MODELO' VARCHAR(5),
	'NUMERO_DE_FABRICACAO' INT,
	'NUMERO_NA_SERIE' INT,
	'NUMERO_DE_COLECAO' INT,
	'ANO_DO_MODELO' INT,
	'EMBALAGEM' INT,
	'MATERIAL_DA_CARROCERIA' INT,
	'MATERIAL_DO_CHASSIS' INT,
	'COR_DA_CARROCERIA' VARCHAR(150),
	'COR_DO_CHASSIS' VARCHAR(150),
	'DECALQUES' INT,
	'COR_DOS_VIDROS' VARCHAR(150),
	'COR_DO_INTERIOR' VARCHAR(150),
	'RODAS' INT,
	'PNEU' INT,
	'ANO_DE_COPYRIGH' INT,
	'PAIS_DE_FABRICAÇÃO' VARCHAR(150),
	'ANOTECOES' TEXT,
	PRIMARY KEY ('ITEM_ID')
);

/*
CREATE TABLE 'tb_colecao_item'
(
	COLECAO_ITEM_ID	NOT NULL AUTO_INCREMENT,
	COLECAO_ID INT,
	ITEM_ID INT,
	PRIMARY KEY (COLECAO_ITEM_ID),
	FOREIGN KEY ('COLECAO_ID') REFERENCES tb_colecao('COLECAO_ID'),
	FOREIGN KEY ('ITEM_ID') REFERENCES tb_item('ITEM_ID')
);
*/;

CREATE TABLE 'tb_colecao_item'
(
	COLECAO_ID INT,
	ITEM_ID INT,
	
	QUANTIDADE INT,
	
	FOREIGN KEY ('COLECAO_ID') REFERENCES tb_colecao('COLECAO_ID'),
	FOREIGN KEY ('ITEM_ID') REFERENCES tb_item('ITEM_ID'), 
	
	PRIMARY KEY (COLECAO_ITEM_ID, ITEM_ID) -- chave primária composta 
);
