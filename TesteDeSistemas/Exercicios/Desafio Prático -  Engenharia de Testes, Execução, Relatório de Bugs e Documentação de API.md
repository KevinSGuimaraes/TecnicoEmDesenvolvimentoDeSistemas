# Desafio Prático: Engenharia de Testes, Execução, Relatório de Bugs e Documentação de API

## Objetivo
A partir dos requisitos funcionais descritos neste documento, cada equipe deve atuar de forma autônoma na elaboração da estratégia de testes. O objetivo é planejar os cenários de teste, executá-los apontando para o servidor da aplicação, **identificar eventuais falhas (bugs)** de validação ou de regras de negócio, e utilizar o Postman para **gerar a documentação oficial** dos endpoints.

---

## Requisitos dos Sistemas (Escopo de Testes)

1. **Módulo TechSchool (Autenticação):**
   * *Regra de Negócio:* O sistema de autenticação (`/api/login.php`) deve permitir o acesso apenas com credenciais válidas e cadastradas, bloqueando tentativas inválidas de forma segura.
2. **Módulo NinjaForge 3D (Gestão de Produtos):**
   * *Regra de Negócio:* O cadastro de produtos (`/api/produto.php`) exige obrigatoriamente o envio de nome, preço, quantidade e ID da categoria. 
   * *Restrição Crítica:* O preço de um produto **nunca** pode ser zero ou negativo. Valores inválidos devem ser rigorosamente barrados pela validação da API.
3. **Módulo SENAI (Sistema de Reservas):**
   * *Regra de Negócio:* O agendamento de salas (`/api/reserva.php`) requer o envio do ID da sala, data válida, horário e o nome do responsável identificados.

---

##  Passo a Passo para Execução do Desafio

### 1. Planejamento de Testes (Design)
* Com base nos requisitos acima, pensem e estruturem os **Cenários de Teste** (incluindo o "Fluxo Feliz" e os "Testes Negativos/Bordas", como tentar cadastrar preços negativos, datas inválidas ou campos vazios).

### 2. Execução e Construção no Postman
* Crie uma Collection no Postman contendo as requisições para cada endpoint utilizando o **IP do servidor** fornecido pelo professor/gestor.
* Organize as requisições em pastas separadas por módulos:
  * `Módulo TechSchool` (`/api/login.php`)
  * `Módulo NinjaForge 3D` (`/api/produto.php`)
  * `Módulo SENAI` (`/api/reserva.php`)
* Configure o Header `Content-Type: application/json` e utilize payloads em formato **raw/JSON**.

### 3. Investigação e Descoberta de Bugs
* Execute os cenários planejados, analise o comportamento de cada resposta da API e verifique se o sistema está cumprindo estritamente as regras de negócio ou se alguma falha está passando sem tratamento.

### 4. Geração da Documentação no Postman
* Adicione descrições detalhadas nas requisições e na Collection.
* Utilize a função **Save as example** após executar as requisições para anexar exemplos de payloads de sucesso e de erro na documentação nativa do Postman.

---

## Modelo de Relatório de Entrega

*(As equipes devem preencher as informações abaixo e entregar junto com o link ou arquivo JSON exportado da Collection do Postman documentada)*

### 1. Identificação da Equipe
* **Nome da Equipe:** [Preencher]
* **Integrantes:** [Preencher]
* **Link ou Arquivo da Collection (Postman):** [Inserir link do Workspace/Export]

---

### 2. Planejamento (Casos de Teste Criados)
*Listem abaixo os cenários planejados com base nos requisitos:*

| ID do Teste | Módulo | Cenário / Descrição do Teste | Tipo (Positivo / Negativo) |
| :--- | :--- | :--- | :--- |
| **CT-01** | TechSchool | Ex: Login com credenciais válidas | Positivo |
| **CT-02** | NinjaForge | Ex: Cadastro de produto com preço negativo | Negativo |
| **CT-03** | SENAI | Ex: Reserva de sala com dados válidos | Positivo |

---

### 3. Relatório de Execução e Achados (Bugs Identificados)
*Preencha esta seção para cada falha ou comportamento inesperado descoberto durante os testes:*

#### Bug 01: [Título curto do problema encontrado]
* **Módulo Afetado:** [Ex: NinjaForge 3D - produto.php]
* **Payload Enviado (O que foi testado):**
  ```json
  {
    "exemplo": "dado enviado que gerou o comportamento incorreto"
  }