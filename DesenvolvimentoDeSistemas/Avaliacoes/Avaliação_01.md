# Trabalho Prático — Agenda Eletrônica Web em PHP + PostgreSQL

## Objetivo

Desenvolver um sistema web de **Agenda Eletrônica** utilizando **PHP Orientado a Objetos**, arquitetura **MVC** e banco de dados **PostgreSQL**.

O sistema deverá permitir autenticação de usuários, gerenciamento de contatos e controle de compromissos/tarefas.

---

# Módulo de Autenticação

O sistema deverá possuir um sistema completo de autenticação de usuários contendo:

- Cadastro de usuários
- Login
- Logout
- Controle de sessão

## Requisitos de Segurança

O sistema deve:

- Impedir acesso a páginas internas sem login
- Impedir que, após logout, o usuário consiga acessar páginas protegidas utilizando o botão **"Voltar"** do navegador
- Proteger rotas e páginas internas utilizando verificação de sessão

---

# Módulo de Perfil do Usuário

Cada usuário deverá possuir uma página de perfil contendo:

- Nome
- Email (ou login)
- Foto de perfil (upload de imagem)
- Descrição pessoal

## Funcionalidades

O usuário deverá poder:

- Alterar senha
- Atualizar dados pessoais
- Atualizar foto de perfil

---

# Módulo de Contatos (CRUD Completo)

O sistema deverá permitir o gerenciamento completo de contatos.

## Funcionalidades

- ➕ Cadastrar contato
- 🔍 Buscar/Listar contatos
- ✏️ Atualizar contato
- ❌ Deletar contato

## Dados de cada contato

Cada contato deverá possuir:

- Nome
- Telefone
- Email
- Foto (upload de imagem)
- Observações

---

# Módulo de Compromissos / Tarefas (CRUD Completo)

O sistema deverá permitir o gerenciamento de compromissos e tarefas.

## Funcionalidades

- ➕ Criar compromisso
- 🔍 Listar compromissos
- ✏️ Editar compromisso
- ❌ Excluir compromisso

## Dados de cada compromisso

Cada compromisso deverá possuir:

- Título
- Descrição
- Data
- Hora
- Status  
  Exemplos:
  - Pendente
  - Em andamento
  - Concluído

---

# Banco de Dados — PostgreSQL

O sistema deverá utilizar o banco de dados **PostgreSQL**.

## Tabelas mínimas obrigatórias

- `usuarios`
- `contatos`
- `compromissos`

## Requisitos

O banco deverá conter:

- Chaves primárias
- Chaves estrangeiras
- Relacionamentos entre:
  - Usuário → Contatos
  - Usuário → Compromissos
- Boas práticas de modelagem relacional

---

# Arquitetura do Projeto — MVC

O projeto deverá seguir o padrão de arquitetura **MVC (Model-View-Controller)**.

## Organização obrigatória

### Model
Responsável por:

- Comunicação com banco de dados
- Regras de persistência
- Queries SQL
- Classes do Sistema

### View
Responsável por:

- Interface visual do sistema
- HTML
- CSS
- JavaScript

### Controller
Responsável por:

- Regras de negócio
- Processamento de dados
- Controle das rotas e ações

---

# 🎨 Interface

O sistema deverá possuir:

- Interface amigável
- Organização visual adequada
- Estilização utilizando CSS

## Opcional

Pode-se utilizar JavaScript para:

- Validações
- Melhorias de usabilidade
- Interações dinâmicas

---

# Requisitos Técnicos Obrigatórios

O projeto obrigatoriamente deverá possuir:

- Programação Orientada a Objetos (POO) em PHP
- Organização em MVC
- CRUD completo funcional
  - Contatos
  - Compromissos
- Upload de imagens
  - Foto de perfil
  - Fotos dos contatos
- Segurança básica implementada
- Código organizado e comentado

---

# Entrega

O projeto deverá ser entregue contendo:

- Código-fonte completo
- Banco de dados SQL/PostgreSQL
- Estrutura MVC organizada
- Instruções de execução do sistema

---

# 🧠 Critérios de Avaliação

Serão avaliados os seguintes critérios:

| Critério | Peso |
|---|---|
| Funcionamento do sistema | ⭐⭐⭐⭐⭐ |
| Organização do código | ⭐⭐⭐⭐ |
| Aplicação correta do MVC | ⭐⭐⭐⭐ |
| Uso de POO | ⭐⭐⭐⭐ |
| Interface e usabilidade | ⭐⭐⭐ |
| Banco de dados e relacionamentos | ⭐⭐⭐ |
| Segurança básica | ⭐⭐⭐ |
| Qualidade visual | ⭐⭐ |

---

# 🚀 Tecnologias Obrigatórias

- PHP
- PostgreSQL
- HTML5
- CSS3
- JavaScript (opcional)
- Arquitetura MVC
- Programação Orientada a Objetos

---