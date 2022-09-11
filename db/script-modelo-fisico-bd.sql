<<<<<<< HEAD
// Criando a Base de Dados db_csr
CREATE DATABASE db_csr;

// Utilizando o dbcsr
USE db_csr;

// Criando a tabela tb_usuarios
CREATE TABLE tb_usuarios
(
	// Escolha de um avatar entre três opções apresentadas
	AVATAR INT(1),
	NOME_DO_USUARIO VARCHAR(50),
	SEGUNDO_NOME_DO_USUARIO VARCHAR(50),
	SOBRENOME_DO_USUARIO VARCHAR(250), 
	DATA_DE_NASCIMENTO DATE, 
	CPF INT(11), 
	NOME_DE_ACESSO VARCHAR(100) NOT NULL,
    	EMAIL_PRINCIPAL VARCHAR(220) NOT NULL,
	SENHA_USUARIO VARCHAR(15) NOT NULL, 
	END_DO_USUARIO VARCHAR(300), 
	COMP_END_DO_USUARIO VARCHAR(150), 
	CEP INT(7), 
	CIDADE VARCHAR(100), 
	ESTADO CHAR(2), 
	PAIS VARCHAR(200),
	USUARIO_ID INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY
);

// Criando a tabela tb_colecao
CREATE TABLE tb_colecao
(
	NOME_DA_COLECAO VARCHAR(150) NOT NULL,
	// Categoria privada (0) ou pública (1)
	CATEGORIA_COL INT(1) NOT NULL,
	DESCRICAO_COL TEXT,
	COLECAO_ID INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	USUARIO_ID INT(5) NOT NULL
	ITEM_ID INT(5) NOT NULL
);

// Criando a tabela tb_item
CREATE TABLE tb_item
(
	NOME_DO_MODELO VARCHAR(200) NOT NULL,
	COD_DO_MODELO,
	// Mainline ou 
	CATEGORIA
	SERIE_DO_MODELO VARCHAR(100),
	SUBSERIE_DO_MODELO VARCHAR(100),
	TEMA  VARCHAR(100),
	FABRICANTE_DO_MODELO_ORIGINAL VARCHAR(150),
	ESCALA_DO_MODELO VARCHAR(5),
	NUMERO_DE_FABRICACAO INT(10),
	NUMERO_NA_SERIE INT(10),
	NUMERO_DE_COLECAO INT(10),
	ANO_DO_MODELO INT(4),
	EMBALAGEM,
	MATERIAL_DA_CARROCERIA,
	MATERIAL_DO_CHASSIS,
	COR_DA_CARROCERIA,
	COR_DO_CHASSIS,
	DECALQUES,
	COR_DOS_VIDROS,
	COR_DO_INTERIOR,
	RODAS,
	PNEU,
	ANO_DE_COPYRIGH,
	PAIS_DE_FABRICAÇÃO,
	ANOTECOES,
	ITEM_ID INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY
);

// Inserindo usuarios na tabela tb_usuarios
INSERT INTO tb_usuarios (AVATAR, NOME_DO_USUARIO, SEGUNDO_NOME_DO_USUARIO, SOBRENOME_DO_USUARIO, DATA_DE_NASCIMENTO, CPF, NOME_DE_ACESSO, EMAIL_PRINCIPAL, SENHA_USUARIO, END_DO_USUARIO, COMP_END_DO_USUARIO, CEP, CIDADE, ESTADO, PAIS, USUARIO_ID )
VALUES
(1, 'Jefferson',, 'Leandro Ramos de Oliveira', 1978-02-10,, jefflro, jefframos-tcc@gmail.com, 123, 'rua onde moro, n100',, 59012370, 'Natal', 'RN', 'Brasil', 1),
(1, 'Erika', 'Monik', 'A. de M. Ramos de Oliveira', 1984-05-02,, monikoliveira, monik@oliveira.com, 123, 'rua onde moro, n100',, 59012370, 'Natal', 'RN', 'Brasil', 2),
(1, 'Alice',, 'Mendonça Ramos de Oliveira', 2017-10-24,, alicemro,alice@oliveira.com, 123, 'rua onde moro, n100',, 59012370, 'Natal', 'RN', 'Brasil', 3),
(1, 'Edson',, 'Leandro de Oliveira', 1947-12-13,, edleandro, edson@oliveira.com, 123, 'rua diferente de onde moro, n234,, 59024510, 'Natal', 'RN', 'Brasil', 4);