# Guia Prático do Postman para as Equipes

Este guia apresenta o passo a passo para organizar as requisições, executar os testes e documentar as APIs utilizando o **Postman**.

---

## Passo 1 — Criar a Collection e Organizar as Pastas

### 1.1 Criar a Collection

1. Abra o **Postman**.
2. Clique em **New > Collection**.

   * Também é possível utilizar o ícone `+` na aba de Workspaces.
3. Nomeie a Collection com o nome da sua equipe ou projeto.

**Exemplo:**

```text
Quality Systems Consulting
```

### 1.2 Criar as pastas dos módulos

Dentro da Collection:

1. Clique nos três pontos `(...)` ao lado do nome da Collection.
2. Selecione **Add Folder**.
3. Crie uma pasta para cada módulo do sistema.

A estrutura deverá ficar semelhante a:

```text
Quality Systems Consulting
│
├── Módulo TechSchool
│
├── Módulo NinjaForge 3D
│
└── Módulo SENAI
```

> **Dica:** A organização das pastas deve facilitar a localização dos testes posteriormente.

---

# Passo 2 — Criar as Requisições

As requisições devem ser criadas com base nos **cenários de teste planejados pela equipe**, incluindo:

* Fluxos válidos;
* Fluxos inválidos;
* Testes de validação;
* Testes de valores limites;
* Testes negativos;
* Testes de erros esperados.

---

## 2.1 Criar uma nova Request

Para cada cenário de teste:

1. Clique com o botão direito na pasta correspondente ao módulo.
2. Selecione **Add Request**.
3. Dê um nome que identifique claramente o teste.

**Exemplos:**

```text
Cadastrar produto - Dados válidos
Cadastrar produto - Preço negativo
Cadastrar produto - Nome vazio
Cadastrar produto - Quantidade inválida
```

---

## 2.2 Definir o método HTTP

Selecione o método HTTP correspondente ao endpoint.

Para os testes deste projeto, utilize:

```http
POST
```

---

## 2.3 Informar a URL do Endpoint

Insira a URL do endpoint local que será testado.

**Exemplo:**

```text
http://localhost/api/produto.php
```

---

## 2.4 Configurar o Header

Acesse a aba **Headers** e adicione:

| Key            | Value              |
| -------------- | ------------------ |
| `Content-Type` | `application/json` |

O resultado deverá ser semelhante a:

```http
Content-Type: application/json
```

---

## 2.5 Configurar o Body

Na aba **Body**:

1. Selecione **raw**.
2. Selecione o formato **JSON**.
3. Insira o payload correspondente ao cenário que está sendo testado.

### Exemplo — Dados válidos

```json
{
    "nome": "Filamento PLA",
    "preco": 130.00,
    "quantidade": 10
}
```

### Exemplo — Preço negativo

```json
{
    "nome": "Filamento PLA",
    "preco": -50.00,
    "quantidade": 10
}
```

---

## 2.6 Executar o teste

Após configurar a requisição:

1. Clique em **Send**.
2. Observe a resposta da API.
3. Analise:

   * Código HTTP retornado;
   * Corpo da resposta;
   * Mensagem de erro;
   * Estrutura do JSON;
   * Comportamento da aplicação.

Por exemplo:

```text
200 OK
201 Created
400 Bad Request
404 Not Found
405 Method Not Allowed
422 Unprocessable Entity
500 Internal Server Error
```

> **Importante:** O resultado obtido deve ser comparado com o **resultado esperado definido no planejamento do teste**.

---

# Passo 3 — Documentar os Endpoints no Postman

O Postman possui recursos para documentar as requisições diretamente dentro da Collection.

A documentação deve permitir que outra pessoa consiga entender:

* Qual endpoint está sendo testado;
* Qual é sua finalidade;
* Quais dados devem ser enviados;
* Qual resultado é esperado;
* Quais erros podem ocorrer.

---

## 3.1 Descrição da Requisição

Em cada requisição criada:

1. Localize o ícone de **bloco de notas/lápis** próximo ao nome da requisição.
2. Abra o painel de **Documentation**.
3. Escreva uma breve explicação sobre o endpoint.

### Exemplo

```markdown
## Cadastro de Produto

Endpoint responsável por cadastrar um novo produto no sistema.

### Método

POST

### Endpoint

/api/produto.php

### Objetivo

Cadastrar um produto informando nome, preço e quantidade.
```

---

## 3.2 Salvar exemplos de resposta

Depois de executar uma requisição e obter uma resposta:

1. Observe o painel de resposta.
2. Clique em **Save as example**.
3. Dê um nome claro para o exemplo.

### Exemplos de nomes

```text
Sucesso - 200 OK
Sucesso - 201 Created
Erro - Preço Negativo
Erro - Nome Obrigatório
Erro - Quantidade Inválida
Erro - JSON Inválido
```

O exemplo ficará associado à requisição e poderá ser utilizado como parte da documentação.

---

## 3.3 Documentar respostas de sucesso e erro

Sempre que possível, criem exemplos para diferentes situações.

### Exemplo — Sucesso

```json
{
    "status": "success",
    "message": "Produto cadastrado com sucesso."
}
```

### Exemplo — Erro

```json
{
    "status": "error",
    "message": "O preço deve ser maior que zero."
}
```

> **Importante:** Não documentem apenas os casos que funcionam. Os **casos de erro também fazem parte da documentação da API**.

---

# Passo 3.4 — Descrição da Collection

Também é necessário documentar a Collection como um todo.

1. Clique nos três pontos `(...)` ao lado da Collection.
2. Selecione **Edit**.
3. Acesse a aba **Description**.
4. Escreva uma visão geral do projeto.

### Exemplo

```markdown
# Quality Systems Consulting

## Objetivo

Collection utilizada para execução e documentação dos testes das APIs desenvolvidas pela equipe.

## Módulos

- TechSchool
- NinjaForge 3D
- SENAI

## URL Base

http://localhost

## Métodos utilizados

- POST

## Formato dos dados

As requisições utilizam JSON.

## Objetivo dos testes

Validar o comportamento dos endpoints em situações:

- Válidas;
- Inválidas;
- Limite;
- Erro de validação;
- Erro de requisição.
```

---

# Passo 4 — Compartilhar a Documentação com a Gestão

Ao final do trabalho, a equipe deverá entregar a documentação produzida no Postman.

Existem duas formas principais de realizar essa entrega.

---

## 4.1 Exportar a Collection

A primeira opção é exportar a Collection como um arquivo.

### Procedimento

1. Clique nos três pontos `(...)` da Collection.
2. Selecione **Export**.
3. Escolha o formato:

```text
Collection v2.1
```

4. Salve o arquivo JSON.

O arquivo poderá ser enviado para a gestão ou utilizado para importar a Collection em outro computador.

### Exemplo de nome do arquivo

```text
Quality-Systems-Consulting.postman_collection.json
```

---

## 4.2 Publicar a documentação

Outra possibilidade é utilizar os recursos de documentação do próprio Postman.

No menu da Collection, procure opções como:

```text
View in Web
```

ou

```text
Publish Collection
```

Dependendo da versão e configuração da conta do Postman, será possível gerar um link para acesso à documentação.

> **Atenção:** Verifique as configurações de privacidade antes de compartilhar o link. Não publique informações que não devem ser acessadas externamente.

---

# Checklist Final da Equipe

Antes de realizar a entrega, verifique se todos os itens abaixo foram realizados.

## Organização

* [ ] Collection criada
* [ ] Collection identificada com o nome da equipe/projeto
* [ ] Pastas criadas para cada módulo
* [ ] Requisições organizadas dentro das respectivas pastas

## Testes

* [ ] Cenários válidos testados
* [ ] Cenários negativos testados
* [ ] Dados de entrada definidos
* [ ] Método HTTP correto utilizado
* [ ] Header `Content-Type` configurado
* [ ] Body configurado como JSON
* [ ] Respostas analisadas
* [ ] Códigos HTTP registrados

## Documentação

* [ ] Cada endpoint possui uma descrição
* [ ] Cada teste possui um nome claro
* [ ] Exemplos de sucesso foram registrados
* [ ] Exemplos de erro foram registrados
* [ ] Collection possui uma descrição geral
* [ ] URL base está documentada
* [ ] Instruções de utilização estão documentadas

## Entrega

* [ ] Collection exportada em formato **Collection v2.1**
* [ ] Arquivo JSON identificado corretamente
* [ ] Documentação revisada
* [ ] Link de documentação compartilhado, caso essa opção seja utilizada
