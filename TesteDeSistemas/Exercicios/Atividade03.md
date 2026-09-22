# Operação Zello — Auditoria de Homologação

## Contexto

O **Zello** é um sistema legado que está sendo retomado por uma equipe de desenvolvimento.

Antes de continuar o projeto, a empresa decidiu contratar uma equipe independente de **QA** para avaliar a situação atual do sistema.

Vocês receberam acesso ao sistema, mas **não receberam o código-fonte**.

A missão de vocês é investigar o Zello, utilizando diferentes situações de uso, e identificar **comportamentos que estejam corretos, incorretos, inesperados ou que mereçam investigação**.

> **Não basta dizer que algo está errado. É necessário produzir evidências que permitam reproduzir o comportamento.**

---

# Equipe 1 — Segurança e Usuários

Investiguem o comportamento do sistema relacionado a:

* Usuários;
* Autenticação;
* Sessões;
* Níveis de acesso;
* Permissões;
* Funcionalidades disponíveis para cada usuário.

### Pergunta central

> **Um usuário consegue realizar alguma ação que não deveria conseguir?**

Investiguem o sistema utilizando diferentes usuários e situações de acesso.

---

# Equipe 2 — Operações de Crédito

Investiguem o funcionamento do **processo de crédito**, desde o cadastro e solicitação até suas etapas posteriores.

Observem o comportamento do sistema durante o fluxo de operações.

### Pergunta central

> **O sistema impede operações que não deveriam acontecer?**

Investiguem situações normais e situações fora do fluxo esperado.

---

# O que vocês devem entregar

Para cada comportamento relevante encontrado, registrem:

* O que foi testado;
* Passo a passo para reproduzir;
* Resultado esperado;
* Resultado obtido;
* Evidência;
* Classificação da ocorrência;
* Severidade.

## Registro de ocorrência

| Campo                  | Informação |
| ---------------------- | ---------- |
| ID                     |            |
| Funcionalidade         |            |
| Descrição              |            |
| Pré-condições          |            |
| Passos para reprodução |            |
| Resultado esperado     |            |
| Resultado obtido       |            |
| Evidência              |            |
| Classificação          |            |
| Severidade             |            |

### Classificação

Uma ocorrência pode ser classificada como:

* **Defeito**
* **Melhoria**
* **Funcionalidade incompleta**
* **Comportamento a investigar**
* **Risco**

### Severidade

* **Baixa**
* **Média**
* **Alta**
* **Crítica**

---

# Apresentação

Ao final da investigação, cada equipe deverá apresentar as **3 descobertas mais relevantes** encontradas.

Para cada descoberta, expliquem:

1. O que foi testado?
2. Como o comportamento foi reproduzido?
3. O que deveria acontecer?
4. O que aconteceu?
5. Qual é a evidência?
6. Por que isso merece atenção?

---

# Regras

* Não alterar o código do sistema.
* Não alterar o banco de dados.
* Não apagar informações deliberadamente.
* Não utilizar informações reais de pessoas.
* Toda ocorrência deve ser reproduzível.
* Toda ocorrência deve possuir evidência.
* Diferenciem **defeito, melhoria, funcionalidade incompleta e comportamento que precisa ser investigado**.
* A investigação deve ser realizada somente dentro do ambiente disponibilizado para a atividade.

---

# Pergunta Final

> **Se vocês fossem responsáveis por continuar o desenvolvimento do Zello amanhã, o que investigariam antes de escrever uma única linha de código?**
