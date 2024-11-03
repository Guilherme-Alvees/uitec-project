# Desafio Técnico: CRUD de Transações Financeiras

## Objetivo

Desenvolver uma aplicação web para gerenciar transações financeiras, permitindo o cadastro, listagem, edição e exclusão de receitas e despesas. O formulário de cadastro deve permitir o registro de ambos os tipos de transação, com um campo que indica o tipo de transação e outro que diferencia despesas (valor negativo) de receitas (valor positivo).

## Requisitos

### 1. Funcionalidades da Aplicação

- **Cadastro de Transações**

  - Um único formulário será utilizado para registrar tanto receitas quanto despesas.
  - O formulário deve incluir um campo para indicar se a transação é uma despesa ou receita.
  - Se a transação for uma despesa, o valor deve ser salvo como negativo no banco de dados.
  - A transação pode ser categorizada em tipos como "Aluguel", "Pagamento", "Prolabore", etc.

- **Listagem de Transações**

  - Listar todas as transações com a possibilidade de filtrar por tipo (receita ou despesa).

- **Edição de Transações**

  - Permitir a edição de transações cadastradas.

- **Exclusão de Transações**
  - Permitir a exclusão de transações cadastradas.

### 2. Tecnologias Utilizadas

- **Backend**: PHP, utilizando qualquer framework (ex.: Laravel, CodeIgniter)
- **Frontend**: Angular (versão 16 ou superior)
- **Banco de Dados**: MySQL ou PostgreSQL

### 3. Estrutura de Pastas

Os arquivos devem estar organizados da seguinte forma:

- `banco/` : Scripts de criação das tabelas do banco de dados (transação e tipo de transação).
- `backend/` : Código do backend em PHP.
- `frontend/` : Código do frontend em Angular.

### 4. Entrega

- Inclua os scripts de criação do banco de dados na pasta `banco/`.
- Suba todo o código no GitHub, organizado na estrutura de pastas descrita acima.

## Critérios de Avaliação

- Implementação correta das funcionalidades solicitadas.
- Qualidade e organização do código.
- Uso adequado de boas práticas de desenvolvimento.
- Estrutura correta das pastas e inclusão dos scripts SQL necessários.
- Documentação clara do código e instruções para rodar o projeto.

## Instruções de Configuração

### 1. Banco de Dados

1. Crie o banco de dados utilizando os scripts fornecidos na pasta `banco/`.
2. Configure o acesso ao banco de dados no arquivo de configuração do backend (ex.: `.env` para Laravel).

### 2. Backend

1. Navegue até a pasta `backend/`.
2. Instale as dependências do projeto:
   ```bash
   composer install
   ```
