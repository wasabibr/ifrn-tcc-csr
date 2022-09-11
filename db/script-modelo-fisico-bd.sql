<<<<<<< HEAD
// Criando a Base de Dados db_csr
CREATE DATABASE db_csr;

// Utilizando o dbcsr
USE db_csr;

// Criando a tabela tb_usuarios
CREATE TABLE tb_usuarios
(
	AVATAR INT(1),
	NOME_DO_USUARIO VARCHAR(50),
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
	
	ITEM_ID INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY
);

// Inserindo usuarios na tabela tb_usuarios
INSERT INTO tb_usuarios ( ProductCategoryID, SupplierID, ProductName, NetRetailPrice, AvailableQuantity, WholesalePrice, UnitKGWeight, Notes )
VALUES
(5, 2, 'Calculatre', 24.99, 100, 17.99, 1, 'calculation application'),
(5, 5, 'Penwrite', 79.99, 27, 49.99, 2, 'word processing product'),
(1, 6, 'Vortex Generator', 2499.99, 1000, 1999.99, 0.01, 'space engine component'),
(1, 6, 'The Gourmet Crockpot', 24.99, 72, 19.99, 1.63, 'cookbook'),
(1, 6, 'Account Books', 14.99, 26, 9.99, 1.22, 'government accounting book'),
(3, 6, 'habanero peppers', 4.49, 189, 2.99, 0.009, 'hot peppers'),
(2, 1, '10-mm socket wrench', 3.49, 39, 1.89, 0.018, 'important tool'),
(3, 4, 'tomato sauce', 1.19, 1509, 0.89, 0.232, 'bottled in glass'),
(1, 6, 'pure vanilla', 10.39, 1509, 7.89, 0.032, 'high-quality vanilla'),
(3, 2, 'keyboard wrench', 399999.95, 6128, 149999.99, 521.38, 'handle with care'),
=======
// Criando a Base de Dados db_csr
CREATE DATABASE db_csr;

// Utilizando o dbcsr
USE db_csr;

// Criando a tabela tb_usuarios
CREATE TABLE tb_usuarios
(
	AVATAR INT(1),
	NOME_DO_USUARIO VARCHAR(50),
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
	
	ITEM_ID INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY
);

// Inserindo usuarios na tabela tb_usuarios
INSERT INTO tb_usuarios ( ProductCategoryID, SupplierID, ProductName, NetRetailPrice, AvailableQuantity, WholesalePrice, UnitKGWeight, Notes )
VALUES
(5, 2, 'Calculatre', 24.99, 100, 17.99, 1, 'calculation application'),
(5, 5, 'Penwrite', 79.99, 27, 49.99, 2, 'word processing product'),
(1, 6, 'Vortex Generator', 2499.99, 1000, 1999.99, 0.01, 'space engine component'),
(1, 6, 'The Gourmet Crockpot', 24.99, 72, 19.99, 1.63, 'cookbook'),
(1, 6, 'Account Books', 14.99, 26, 9.99, 1.22, 'government accounting book'),
(3, 6, 'habanero peppers', 4.49, 189, 2.99, 0.009, 'hot peppers'),
(2, 1, '10-mm socket wrench', 3.49, 39, 1.89, 0.018, 'important tool'),
(3, 4, 'tomato sauce', 1.19, 1509, 0.89, 0.232, 'bottled in glass'),
(1, 6, 'pure vanilla', 10.39, 1509, 7.89, 0.032, 'high-quality vanilla'),
(3, 2, 'keyboard wrench', 399999.95, 6128, 149999.99, 521.38, 'handle with care'),
>>>>>>> 6bb296c998f7624d3e4c0671d2fd6a36f1f4f56e
(2, 1, 'power cell', 47.89, 2346, 29.99, 0.298, 'ten amp-hours per cell');