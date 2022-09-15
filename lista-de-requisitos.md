# Lista dos Requisitos Funcionais em curso de desenvolvimento

[em construção]



## 1. INTRODUÇÃO

A elaboração desse documento de Requistos se apoia, parcialmente, sobre um questionário do Google Drive, com total de 25 perguntas. Esse questionário, compartilhado em grupos de colecionadores no WhatsApp e em outras Redes sociais, contou com a participação de 102 entrevistados. A partir da analise desses dados colhidos, fomos capazes de compreender melhor, anseios e necessidades de nosso público-alvo, para buscarmos o desenvolvimento de um produto mais adequado.



### 1.1. PROPÓSITO DO DOCUMENTO

Esse projeto visa promover um espaço de fomento ao colecionismo de miniaturas de veículos e afins. Nesse sentido, como ponto de partida, elegemos as miniaturas da marca Hot Wheel®, pertencente à empresa Mattel®, devido a sua larga distribuição e valor de compra convidativo, tornando um objeto selecionável de mais fácil acesso.



### 1.2. ESCOPO DO PRODUTO

Para tanto buscamos elaborar uma proposta de um sistema, tal qual uma rede social, que possibilitaria a interação entre usuários que possuíssem esse mesmo interesse em comum, ou curiosos pela temática em geral. Num primeiro momento o projeto contaria com uma plataforma que permitiria ao usuário, não apenas, criar e compartilhar um perfil pessoal contendo suas informações, como também organizar, catalogar e expor a sua coleção de miniaturas.
O projeto está sendo idealizado de forma que possamos acrescentar novos módulos, tais como um mini-blog e/ou um sistema de classificados, em resposta às necessidades do nosso público alvo.



### 1.3. LISTA DE ABREVIAÇÕES

- CGI: Common Gateway Interface;

- IDE: Integrated Development Environment ou Ambiente de Desenvolvimento Integrado;

- MVC: Model, View, Controller;

- MVP: Produto Viável Mínimo;

- RF: requisito funcional;

- RNF: requisito não funcional;

- SGBD: Sistema Gerenciador de Banco de Dados;

- SO: Sistema Operacional;

- WWW: World Wide Web.

  

### 1.4. VISÃO GERAL DO DOCUMENTO

Este documento apresenta uma descrição geral do sistema, seguido de uma descrição de suas funcionalidades, especificando as entradas e saída para todos os RFs. Apresenta, ainda, uma descrição superficial de RNFs contidos neste sistema, com algumas informações acerca de seu SGBD, das LPs e frameworks utilizados, de sua portabilidade etc.



## 2. DESCRIÇÃO GERAL

[em construção]

### 2.1. PERSPECTIVA DO PRODUTO

[em construção]

### 2.2. FUNÇÕES

Gerenciamento de Conta de Usuário: cadastrar, modificar e excluir usuário do sistema.
Gerenciamento de Coleções: [em construção].
Gerenciamento de Itens: inserir, modificar, excluir, consultar e resgatar os itens colecionáveis, do banco de dados.
[em construção]

### 2.3. RESTRIÇÕES GERAIS

[em construção]



## 3. REQUISITOS

[em construção]

### 3.1. REQUISITOS FUNCIONAIS



- [x] **RF001:** **Login de Usuário**

  ·     Descrição: *O usuário poderá acessar ao sistema e permanecer no mesmo.*

  ·     Entrada: *EMAIL_PRINCIPAL e SENHA_USUARIO*.

  ·     Processo: *Os dados do usuário serão verificados no banco de dados, permitindo ou não o seu acesso e permanência no sistema, caso a dados inseridos existam ou não no mesmo banco, respectivamente.*

  ·     Saída: *Mensagem de confirmação de bem sucedido e acesso ao sistema, no caso do login ter sido efetuado com sucesso, senão, mensagem de erro.*

 

- [x] **RF002: Logoff de Usuário**

  ·     Descrição: *O usuário poderá sair do sistema.*

  ·     Processo: *O sistema encerra a secção e direciona o usuário para a página de login.*

 

- [ ] **RF003: Cadastro de Usuário**

  ·     Descrição: *O usuário poderá criar um cadastro para acessar ao sistema.*

  ·     Entrada obrigatória: *NOME_DE_ACESSO, EMAIL_PRINCIPAL e SENHA_USUARIO.*

  ·     Entrada opcional: AVATAR, NOME_DO_USUARIO, SEGUNDO_NOME_DO_USUARIO, SOBRENOME_DO_USUARIO, DATA_DE_NASCIMENTO, CPF, END_DO_USUARIO, COMP_END_DO_USUARIO, CEP, CIDADE, ESTADO, PAIS.*

  ·     Processo: *O cadastro será incluído no banco de dados e será gerado um valor numérico para o campo ID.*

  ·     Saída: *Mensagem de confirmação de bem sucedido no caso do cadastro ter sido efetuado com sucesso, senão, mensagem de erro.*

  

- [ ] **RF004: Modificação de Cadastrado de Usuário**

  ·     Descrição: *O usuário entra com o campo onde ele deseja modificar e o modifica.*

  ·     Entrada: *Campo desejado e o novo dado, com exceção dos campos: CPF e ID.*

  ·     Processo: *Atualização do banco de dados.*

  ·     Saída: *Mensagem de confirmação de bem sucedido no caso da modificação do cadastro ter sido efetuado com sucesso, senão, mensagem de erro.*

  

- [ ] **RF005: Exclusão do Cadastro de Usuário**

  ·     Descrição: *O usuário poderá excluir seu cadastro dos usuários.*

  ·     Entrada: *NOME_DE_ACESSO.*

  ·     Processo: *O sistema verifica se o usuário é cadastrado, se for o usuário é excluído.*

  ·     Saída: *Mensagem de confirmação de bem sucedido no caso da exclusão do cadastro ter sido efetuada com sucesso, senão, mensagem de erro.*

 

- [ ] **RF006: Inserção de uma Coleção**

  ·     Descrição: *Os usuários cadastrados podem inserir uma nova Coleção, com suas descrições.*

  ·     Entrada: *NOME_DA_COLECAO, CATEGORIA_COL e DESCRICAO_COL.*

  ·     Processo: *O sistema insere todos esses dados no banco de dados.*

  ·     Saída: *Mensagem de confirmação de bem sucedido no caso da inserção ter sido efetuada com sucesso, senão, mensagem de erro.*

 

- [ ] **RF007: Modificação de uma Coleção**

  ·     Descrição: *O usuário pode fazer alguma alteração na descrição da Coleção.*

  ·     Entrada: *Campo desejado e o novo dado.*

  ·     Processo: *Atualização da descrição da Coleção no banco de dados.*

  ·     Saída: *Mensagem de confirmação de bem sucedido no caso da modificação ter sido efetuado com sucesso, senão, mensagem de erro.*

 

- [ ] **RF008: Exclusão de uma Coleção**

  ·     Descrição: *O usuário pode efetuar a exclusão de uma Coleção.*

  ·     Entrada: *NOME_DA_COLECAO*

  ·     Processo: *O sistema busca o NOME_DA_COLECAO no banco de dados, caso ele encontre ele exclui a Coleção.*

  ·     Saída: *Mensagem de confirmação de bem sucedido no caso da exclusão da Coleção ter sido efetuada com sucesso, senão, mensagem de erro.*

 

- [ ] **RF009: Inserção de um Item na Coleção**

  ·     Descrição: *Os usuários cadastrados podem inserir uma nova Coleção, com suas descrições.*

  ·     Entrada: *NOME_DO_MODELO, COD_DO_MODELO, CATEGORIA, SERIE_DO_MODELO, SUBSERIE_DO_MODELO, TEMA, FABRICANTE_DO_MODELO_ORIGINAL, ESCALA_DO_MODELO, NUMERO_DE_FABRICACAO, NUMERO_NA_SERIE, NUMERO_DE_COLECAO, ANO_DO_MODELO, EMBALAGEM, MATERIAL_DA_CARROCERIA, MATERIAL_DO_CHASSIS, COR_DA_CARROCERIA, COR_DO_CHASSIS, DECALQUES, COR_DOS_VIDROS, COR_DO_INTERIOR, RODAS, PNEU, ANO_DE_COPYRIGH, PAIS_DE_FABRICAÇÃO, ANOTECOES.*

  ·     Processo: *O sistema insere todos esses dados no banco de dados.*

  ·     Saída: *Mensagem de confirmação de bem sucedido no caso da inserção ter sido efetuada com sucesso, senão, mensagem de erro.*

 

- [ ] **RF010: Modificação de um Item da Coleção**

  ·     Descrição: *O usuário pode fazer alguma alteração na descrição do documento.*

  ·     Entrada: *Campo desejado e o novo dado.*

  ·     Processo: *Atualização da descrição do documento no banco de dados.*

  ·     Saída: *Mensagem de confirmação de bem sucedido no caso da modificação ter sido efetuado com sucesso, senão, mensagem de erro.*

 

- [ ] **RF011: Exclusão de um Item da Coleção**

  ·     Descrição: *O moderador pode efetuar a exclusão de documentos.*

  ·     Entrada: *NOME_DO_ITEM.*

  ·     Processo: *O sistema busca o NOME_DO_ITEM no banco de dados, caso ele encontre ele exclui o documento.*

  ·     Saída: *Mensagem de confirmação de bem sucedido no caso da exclusão do Item da Coleção ter sido efetuada com sucesso, senão, mensagem de erro.*

 

- [ ] **RF012: Consulta de uma Coleção ou Itens de uma Coleção**

  ·     Descrição: *O usuário pode buscar um determinado Item de uma Coleção, ou uma Coleção de sua escolha através de qualquer campo que tenha relação com os mesmo.*

  ·     Entrada: *Campo ao qual o usuário deseja fazer a busca.*

  ·     Processo: *O sistema busca nos campos dos Itens e das Coleções, referentes ao parâmetro de busca e retorna ao usuário.*

  ·     Saída: *Lista de Itens ou Coleções relacionados à consulta.*

