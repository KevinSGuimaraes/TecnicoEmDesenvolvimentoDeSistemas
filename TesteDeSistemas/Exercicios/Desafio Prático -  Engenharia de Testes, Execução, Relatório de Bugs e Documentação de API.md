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
