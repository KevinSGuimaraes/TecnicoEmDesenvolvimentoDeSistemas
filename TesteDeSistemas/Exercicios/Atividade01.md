# Atividade Prática – Teste de API REST utilizando Postman

## Objetivo

Realizar testes funcionais em uma API REST desenvolvida em PHP, validando o comportamento dos métodos HTTP, parâmetros enviados na URL, dados enviados no corpo da requisição (Body) e códigos de resposta retornados pelo servidor.

---

## Cenário

Uma equipe de desenvolvimento criou uma API para gerenciamento de usuários.

Sua função é atuar como **Analista de Testes**, verificando se a API responde corretamente para situações válidas e inválidas.

Todos os testes deverão ser realizados utilizando o **Postman**.

---

# Parte 1 – Conhecendo a API

Antes de iniciar os testes, responda:

### 1. Quais métodos HTTP são suportados pela API?

---

### 2. Quais métodos retornam erro caso sejam utilizados incorretamente?

---

### 3. Quais métodos exigem:

- ID na URL
- Dados no Body
- Ambos

---

# Parte 2 – Testes do Método GET

## Caso de Teste 01

Consultar todos os usuários.

### Registrar:

- URL utilizada:
- Código HTTP retornado:
- Corpo da resposta:

---

## Caso de Teste 02

Consultar um usuário específico informando um ID.

### Registrar:

- URL utilizada:
- Código HTTP retornado:
- Corpo da resposta:

---

# Parte 3 – Testes do Método POST

## Caso de Teste 03

Cadastrar um novo usuário enviando:

- Nome
- Email
- Senha

Utilize JSON no Body.

### Registrar:

- JSON enviado:
- Código HTTP retornado:
- Resposta da API:

---

## Caso de Teste 04

Executar um POST sem enviar Body.

### Responder:

- Qual código HTTP foi retornado?
- Qual mensagem foi exibida?

---

# Parte 4 – Testes do Método PUT

## Caso de Teste 05

Atualizar completamente um usuário existente.

Enviar:

- ID na URL
- Dados completos no Body

### Registrar:

- URL utilizada:
- JSON enviado:
- Código HTTP retornado:
- Resposta da API:

---

## Caso de Teste 06

Executar um PUT sem informar o ID.

### Responder:

- O sistema permitiu a operação?
- Qual código HTTP foi retornado?
- Qual mensagem foi exibida?

---

## Caso de Teste 07

Executar um PUT sem enviar dados no Body.

### Responder:

- Qual código HTTP foi retornado?
- Qual mensagem foi exibida?

---

# Parte 5 – Testes do Método PATCH

## Caso de Teste 08

Alterar apenas um campo do usuário.

Exemplo:

- Senha

### Registrar:

- URL utilizada:
- JSON enviado:
- Código HTTP retornado:
- Resposta da API:

---

## Caso de Teste 09

Executar um PATCH sem informar o ID.

### Responder:

- O sistema permitiu a operação?
- Qual código HTTP foi retornado?
- Qual mensagem foi exibida?

---

# Parte 6 – Testes do Método DELETE

## Caso de Teste 10

Excluir um usuário informando o ID.

### Registrar:

- URL utilizada:
- Código HTTP retornado:
- Resposta da API:

---

## Caso de Teste 11

Executar um DELETE sem informar o ID.

### Responder:

- O sistema permitiu a exclusão?
- Qual código HTTP foi retornado?
- Qual mensagem foi exibida?

---

# Parte 7 – Testes de Erro

## Caso de Teste 12

Enviar uma requisição utilizando um método HTTP não implementado pela API.

Exemplos:

- HEAD
- OPTIONS

### Responder:

- Qual código HTTP foi retornado?
- Qual mensagem foi exibida?

---

## Caso de Teste 13

Enviar um JSON inválido.

Exemplo:

```json
{
    "nome": "João"
```

### Responder:

- A API aceitou a requisição?
- O que aconteceu?
- Qual foi o código HTTP retornado?

---

# Parte 8 – Análise dos Resultados

Após concluir todos os testes, responda:

## 1.

Qual a diferença entre os métodos:

- GET
- POST
- PUT
- PATCH
- DELETE

---

## 2.

Qual a diferença entre PUT e PATCH?

---

## 3.

Por que o método DELETE exige apenas o ID?

---

## 4.

Por que o método POST retorna código HTTP 201 ao invés de 200?

---

## 5.

Explique o significado dos códigos HTTP:

- 200
- 201
- 400
- 405

---

# Relatório de Testes

Preencha a tabela abaixo para cada teste realizado.

| Caso de Teste | Método HTTP | URL Utilizada | Código Retornado | Resultado Esperado | Resultado Obtido | Status |
|---------------|------------|---------------|------------------|-------------------|------------------|--------|
| CT01 | | | | | | |
| CT02 | | | | | | |
| CT03 | | | | | | |
| CT04 | | | | | | |
| CT05 | | | | | | |
| CT06 | | | | | | |
| CT07 | | | | | | |
| CT08 | | | | | | |
| CT09 | | | | | | |
| CT10 | | | | | | |
| CT11 | | | | | | |
| CT12 | | | | | | |
| CT13 | | | | | | |

---

# Entrega

O relatório deverá conter:

- Capturas de tela dos testes realizados no Postman.
- Método HTTP utilizado.
- URL utilizada.
- Código HTTP retornado.
- Resposta recebida da API.
- Respostas das questões teóricas.
- Conclusão final sobre o funcionamento da API.

---

## Desafio Extra

Pesquise e explique:

1. O que é uma API REST.
2. O que é JSON.
3. Qual a função do Header `Content-Type`.
4. Qual a diferença entre `application/json` e `application/x-www-form-urlencoded`.
5. Qual a função do Postman no processo de teste de sistemas.