# Atividade Prática – Introdução à Automação de Testes com PHP

## Objetivo

Desenvolver uma pequena aplicação utilizando PHP Orientado a Objetos e criar um conjunto de testes automatizados capazes de validar o funcionamento das regras implementadas.

---

# Cenário

Uma empresa está desenvolvendo um sistema para realizar operações matemáticas básicas.

Antes da liberação do sistema para os usuários finais, a equipe de qualidade solicitou a criação de testes automatizados para garantir que os cálculos estejam corretos.

Sua equipe foi designada para desenvolver a solução e validar seu funcionamento.

---

# Requisitos da Aplicação

Desenvolva uma classe chamada:

```text
Calculadora
```

A classe deverá possuir os seguintes métodos:

- somar()
- subtrair()
- multiplicar()
- dividir()

Todos os métodos deverão receber dois valores numéricos como parâmetro.

---

# Requisitos dos Testes

Crie uma forma automatizada de validar o funcionamento dos métodos implementados.

Os testes deverão ser executados sem intervenção do usuário.

Não será permitido verificar os resultados manualmente utilizando calculadora ou inspeção visual.

O próprio sistema deverá informar se cada teste foi aprovado ou reprovado.

---

# Casos de Teste Obrigatórios

## Soma

Validar pelo menos os seguintes cenários:

| Valor A | Valor B | Resultado Esperado |
|----------|----------|-------------------|
| 2 | 3 | 5 |
| 10 | 20 | 30 |
| -5 | 5 | 0 |

---

## Subtração

Validar pelo menos os seguintes cenários:

| Valor A | Valor B | Resultado Esperado |
|----------|----------|-------------------|
| 10 | 5 | 5 |
| 20 | 30 | -10 |
| 0 | 0 | 0 |

---

## Multiplicação

Validar pelo menos os seguintes cenários:

| Valor A | Valor B | Resultado Esperado |
|----------|----------|-------------------|
| 4 | 5 | 20 |
| 0 | 10 | 0 |
| -2 | 3 | -6 |

---

## Divisão

Validar pelo menos os seguintes cenários:

| Valor A | Valor B | Resultado Esperado |
|----------|----------|-------------------|
| 20 | 4 | 5 |
| 15 | 3 | 5 |
| 10 | 2 | 5 |

---

# Tratamento de Erros

A aplicação deverá tratar adequadamente a tentativa de divisão por zero.

Crie pelo menos um teste para validar esse comportamento.

---

# Evidências

Durante a execução dos testes, o sistema deverá exibir informações suficientes para identificar:

- Qual teste foi executado.
- Resultado esperado.
- Resultado obtido.
- Situação final do teste.

Exemplo:

```text
Teste: Soma 2 + 3
Esperado: 5
Obtido: 5
Status: APROVADO
```

---

# Desafio Extra

Implemente uma segunda classe chamada:

```text
Validador
```

Esta classe deverá possuir:

- validarEmail()
- validarSenha()

---

## Regras para validarEmail()

O método deverá retornar verdadeiro para e-mails válidos e falso para e-mails inválidos.

Crie pelo menos 5 casos de teste.

---

## Regras para validarSenha()

A senha deverá possuir:

- mínimo de 8 caracteres
- pelo menos uma letra
- pelo menos um número

Crie pelo menos 5 casos de teste.

---

# Relatório

Ao final da atividade responda:

1. O que é um teste automatizado?
2. Qual a diferença entre teste manual e teste automatizado?
3. Quais vantagens a automação trouxe para esta atividade?
4. Foi possível identificar erros mais rapidamente utilizando testes automatizados?

---

# Critérios de Avaliação

| Critério | Pontos |
|-----------|---------|
| Implementação da classe | 2,0 |
| Funcionamento dos métodos | 2,0 |
| Implementação dos testes | 3,0 |
| Tratamento de erros | 1,0 |
| Relatório | 2,0 |

Total: 10,0 pontos