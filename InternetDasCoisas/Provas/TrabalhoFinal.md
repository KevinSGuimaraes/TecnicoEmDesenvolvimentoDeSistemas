# 🏙️ Projeto Integrador – Cidade Industrial Inteligente  
### Curso: Técnico em Desenvolvimento de Sistemas  
### Unidade: SENAI – Dois Vizinhos  
### Disciplina: Internet das Coisas (IoT)  
### Professor: Kevin de Souza Guimarães  
### Turma: Módulo II - Março/2025  

---

## 🧭 1. Introdução

A **Internet das Coisas (IoT)** e a **automação inteligente** estão transformando o modo como cidades e indústrias funcionam, integrando sensores, atuadores, sistemas embarcados e plataformas de dados para criar ambientes conectados e eficientes.

Neste projeto integrador, os alunos desenvolverão uma **Cidade Industrial Inteligente (Smart Industry City)** — uma maquete funcional representando um ecossistema industrial automatizado, no qual diferentes setores se comunicam e operam de forma coordenada por meio de sistemas embarcados e IoT.

A estrutura física da cidade será **baseada em modelos 3D pré-desenhados**, fornecidos pelo professor por meio do **Tinkercad**, permitindo que os alunos concentrem seus esforços em:
- Montagem e integração eletrônica;  
- Desenvolvimento da lógica de automação;  
- Programação embarcada;  
- Comunicação e integração IoT.  

---

## 🎯 2. Objetivos

### 2.1 Objetivo Geral
Projetar e implementar uma **Cidade Industrial Inteligente** em escala reduzida, integrando conceitos de automação, controle, IoT e sistemas embarcados, utilizando plataformas de desenvolvimento como **Arduino, ESP32 e STM32**.

### 2.2 Objetivos Específicos
- Aplicar princípios de **automação e controle** em um ambiente simulado de indústria 4.0.  
- Integrar sensores, atuadores e controladores em uma arquitetura funcional.  
- Implementar **monitoramento e controle remoto via IoT**.  
- Aplicar **programação embarcada e lógica de decisão**.  
- Compreender a comunicação entre dispositivos (protocolos MQTT, HTTP, Wi-Fi, etc.).  
- Trabalhar de forma colaborativa na **integração de múltiplos sistemas dentro de uma única cidade industrial**.  
- Documentar e apresentar o projeto de forma técnica e organizada.

---

## 🏗️ 3. Escopo do Projeto

O grupo deverá desenvolver **uma maquete funcional de uma Cidade Industrial Inteligente**, composta por múltiplos setores interligados — como fábricas, sistemas de energia, controle de tráfego interno, armazenagem, entre outros.

Cada setor (ou módulo) será automatizado e integrado eletronicamente a uma **plataforma central IoT**, formando um ecossistema único e interconectado.

### 3.1 Estrutura Física
- Os **modelos 3D de cada setor** serão **fornecidos previamente** pelo professor Kevin Guimarães, desenvolvidos no **Tinkercad**.  
- Os alunos deverão montar os componentes eletrônicos e realizar a integração com os modelos fornecidos.  
- A impressão 3D será feita sob demanda, conforme a necessidade de componentes físicos adicionais.

### 3.2 Escopo Técnico
O grupo deverá:
- Montar e testar sensores e atuadores de cada módulo.  
- Programar os microcontroladores responsáveis por cada setor.  
- Implementar a comunicação entre os setores (rede IoT).  
- Desenvolver dashboards para visualização de dados e controle remoto.  
- Garantir o funcionamento coordenado da cidade como um todo.  

---

## ⚙️ 4. Requisitos Técnicos

### 4.1 Hardware
- **Controladores:** Arduino, ESP32, ESP8266 ou STM32.  
- **Sensores:** Ultrassônico, IR, LDR, temperatura (DHT22/LM35), presença (PIR), nível, cor, entre outros.  
- **Atuadores:** Servos, motores DC, relés, LEDs, buzzers, displays, motores de passo.  
- **Comunicação:** Wi-Fi, MQTT, HTTP, BLE ou LoRa (opcional).  
- **Energia:** Fontes de 5V e/ou 12V conforme demanda.  
- **Estrutura:** Modelos 3D fornecidos pelo professor (Tinkercad).  

### 4.2 Software e Ferramentas
- **IDE:** Arduino IDE, PlatformIO ou STM32CubeIDE.  
- **Plataformas IoT:** Blynk, Node-RED, Thingspeak, TagoIO ou similar.  
- **Modelagem 3D:** Tinkercad (modelos fornecidos).  
- **Diagramas:** Fritzing, Draw.io, Lucidchart, Tinkercad Circuits.  
- **Documentação:** Markdown, Word ou PDF técnico.

---

## 🧩 5. Etapas de Desenvolvimento

### **Etapa 1 – Planejamento e Divisão de Setores**
- Definição dos módulos/estações industriais (energia, logística, controle, produção etc.).  
- Planejamento das interligações IoT.  
- Mapeamento dos sensores e atuadores de cada módulo.  

### **Etapa 2 – Montagem Eletrônica**
- Integração dos sensores e atuadores aos microcontroladores.  
- Testes de funcionamento individual.  
- Registro de esquemas elétricos e lista de componentes (BOM).  

### **Etapa 3 – Programação e Automação**
- Implementação da lógica de controle local (modo automático e manual).  
- Controle sequencial e resposta a eventos.  
- Sincronização entre módulos da cidade.  

### **Etapa 4 – Integração IoT**
- Comunicação entre controladores e servidor central.  
- Monitoramento e controle remoto via dashboard.  
- Envio de dados para plataforma online (MQTT, HTTP ou API).  

### **Etapa 5 – Validação e Apresentação**
- Teste de todo o sistema interconectado.  
- Ajustes finais de desempenho e estabilidade.  
- Preparação para apresentação e demonstração prática.  

---

## 📡 6. Comunicação e Integração IoT

A **Cidade Industrial Inteligente** deverá funcionar como um sistema distribuído, onde cada setor troca informações com um **servidor central IoT**.

Cada módulo deverá:
- Enviar dados de sensores (status, leituras, eventos).  
- Receber comandos de controle (liga/desliga, níveis, rotinas).  
- Operar de forma autônoma, mas sincronizada com os demais setores.  
- Exibir dados de operação em um dashboard ou painel web.  

---

## 🧠 7. Entregáveis

### **1. Documentação Técnica**
- Descrição detalhada do projeto e sua arquitetura.  
- Diagrama de blocos e de interligação.  
- Esquemas elétricos e lista de materiais (BOM).  
- Código-fonte devidamente comentado.  
- Prints ou fotos dos modelos e montagem.  
- Descrição da integração IoT e dashboards criados.  

### **2. Protótipo Funcional**
- Maquete completa e operante da Cidade Industrial.  
- Integração funcional entre setores.  
- Conectividade IoT implementada.  

### **3. Apresentação Final**
- Demonstração prática do sistema.  
- Explicação técnica dos componentes e do funcionamento.  
- Discussão sobre desafios, aprendizados e resultados.  

---

## 📅 8. Cronograma Sugerido

| Etapa | Atividade | Prazo (Semanas) |
|-------|------------|----------------|
| 1 | Planejamento e divisão dos setores | 1 |
| 2 | Montagem eletrônica dos módulos | 2–3 |
| 3 | Programação e controle local | 4–5 |
| 4 | Integração IoT e testes globais | 6–7 |
| 5 | Documentação e apresentação final | 8–9 |

---

## 🧾 9. Critérios de Avaliação

| Critério | Descrição | Peso |
|-----------|------------|------|
| Planejamento e documentação técnica | Clareza, detalhamento e organização | 20% |
| Montagem eletrônica e estrutura física | Integração dos componentes e acabamento | 20% |
| Automação e funcionamento | Lógica de controle, estabilidade e resposta | 25% |
| Integração IoT e interface | Comunicação, dashboards e conectividade | 20% |
| Apresentação e inovação | Clareza, domínio técnico e criatividade | 15% |
| **Total** |  | **100%** |

---

## 💡 10. Considerações Finais

O projeto **Cidade Industrial Inteligente (Smart Industry City)** representa um desafio integrador de alto valor técnico e educacional.  

A proposta une as áreas de **automação, eletrônica, programação e IoT**, promovendo o aprendizado prático e colaborativo em um ambiente controlado e realista.  

Com o fornecimento dos **modelos 3D via Tinkercad**, os alunos poderão focar integralmente em desenvolver **soluções de automação embarcada**, **lógica de controle** e **comunicação IoT**, demonstrando competências fundamentais para a Indústria 4.0.  

> “Aprender é experimentar, projetar e construir o que ainda não existe.”  
> — Prof. Kevin de Souza Guimarães  
