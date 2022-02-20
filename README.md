# Projeto: Coleção Sobre Rodas

Trabalho de Conclusão de Curso, apresentado à disciplina Seminário de Orientação para a Prática Profissional / Projeto Integrador II, como requisito para conclusão do curso Técnico de Nível Médio em Informática para Internet, na Forma Subsequente, oferecido pelo Instituto Federal do Rio Grande do Norte.

Orientador: Everton Fagner Costa de Almeida



#### ESCOPO DO PRODUTO

Esse projeto visa promover um espaço de fomento ao colecionismo de miniaturas de veículos e afins. Nesse sentido, como ponto de partida, elegemos as miniaturas da marca Hot Wheel®, pertencente à empresa Mattel®, devido a sua larga distribuição e valor de compra convidativo, tornando um objeto selecionável de mais fácil acesso.

Para tanto buscamos elaborar uma proposta de um sistema, tal qual uma rede social, que possibilitaria a interação entre usuários que possuíssem esse mesmo interesse em comum, ou curiosos pela temática em geral. Num primeiro momento o projeto contaria com uma plataforma que permitiria ao usuário, não apenas, criar e compartilhar um perfil pessoal contendo suas informações, como também organizar, catalogar e expor a sua coleção de miniaturas.

O projeto está sendo idealizado de forma que possamos acrescentar novos módulos, tais como um mini-blog e/ou um sistema de classificados, em resposta às necessidades do nosso público alvo.



**OBSERVAÇÃO:** Este documento apresenta uma descrição geral do sistema, seguido de uma descrição de suas funcionalidades, especificando as entradas e saída para todos os RFs, todavia, esta iniciativa se dispõe a produzir a menor versão dese produto, permitindo à equipe de desenvolvimento, coletar o máximo de aprendizado sobre os clientes, com o mínimo esforço. Isso porque, este produto em questão, é um dos requisitos para a conclusão do curso Técnico de Informática para Internet, do Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte, e com isso, entre outras razões, temos um limite de tempo para produzi-lo. Posteriormente, pretendemos dar continuidade com a lista de RFs, cerca de sessenta itens, e sua devida implementação.





### Lista dos Requisitos Funcionais em curso de desenvolvimento



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





### Lista das demais ações



- [x] Criação o Documento de Riquisitos
- [x] Criação de Repositório no GitHub
- [ ] Criação da Base de Dados: dbcsr
    - [x] Criação da Tabela usuario
    - [ ] Criacao da Tabela colecao
    - [ ] criacao da Tabela item
