# Lista dos Requisitos Funcionais em curso de desenvolvimento





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

  ·     Entrada opcional: *AVATAR, NOME_DO_USUARIO, SOBRENOME_DO_USUARIO, DATA_DE_NASCIMENTO, CPF, CARTEIRA_DE_IDENTIDADE, END_DO_USUARIO, COMP_END_DO_USUARIO, CEP, CIDADE, ESTADO, PAIS.*

  ·     Processo: *O cadastro será incluído no banco de dados e será gerado um valor numérico para o campo ID.*

  ·     Saída: *Mensagem de confirmação de bem sucedido no caso do cadastro ter sido efetuado com sucesso, senão, mensagem de erro.*

  

- [ ] **RF004: Modificação de Cadastrado de Usuário**

  ·     Descrição: *O usuário entra com o campo onde ele deseja modificar e o modifica.*

  ·     Entrada: *Campo desejado e o novo dado, com exceção dos campos: CPF, CARTEIRA_DE_IDENTIDADE e ID.*

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

  ·     Descrição: Os usuários cadastrados podem inserir uma nova Coleção, com suas descrições.

  ·     Entrada: NOME_DO_ITEM, FABRICANTE_DO_ITEM, ESCALA_DO_ITEM, SERIE_DO_ITEM, SUBSERIE_DO_ITEM, COD_DO_MOD_DO_ITEM, TEMA_DO_ITEM, VARIACAO_DO_ITEM, PNEU_DO_ITEM, FABRICANTE_DO_MOD_DO_ITEM.

  ·     Processo: O sistema insere todos esses dados no banco de dados.

  ·     Saída: Mensagem de confirmação de bem sucedido no caso da inserção ter sido efetuada com sucesso, senão, mensagem de erro.

 

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

