# Trabalho de Pesquisa — Modularização PWM

## Tema
**Modulador PWM (Pulse Width Modulation)**

---

## Objetivo
Compreender o conceito e o funcionamento da **modulação por largura de pulso (PWM)**, sua **importância dentro da arquitetura de sistemas embarcados e IoT**, bem como a **relação com o ADC (Conversor Analógico-Digital)** e a forma como ambos se complementam no controle de sinais, sensores e atuadores.

---

##  Contexto (com base na aula)
Durante a aula, estudamos o **processamento de sinais** em microcontroladores, onde:
- As **entradas** (sensores) captam sinais **analógicos** do ambiente;  
- As **saídas** (atuadores) respondem a esses sinais em forma **digital**;  
- E o **microcontrolador** realiza o **processamento** utilizando **conversão ADC** e **modulação PWM**.

Essa modulação é fundamental para **converter comandos digitais em sinais controláveis** para atuadores como **LEDs, motores e sistemas de potência**, permitindo **variação de intensidade, velocidade ou posição**.

---

## Tópicos que devem ser pesquisados e respondidos

### 1. O que é o Modulador PWM
- Explique o significado de “Modulação por Largura de Pulso”.  
- O que significa “Duty Cycle”?  
- Qual é a diferença entre PWM e um sinal analógico contínuo?

### 2. Como o PWM funciona
- Descreva como o PWM gera diferentes níveis médios de tensão.  
- Mostre um gráfico representando diferentes duty cycles (25%, 50%, 75%).  
- Explique como a **frequência** do sinal influencia o comportamento da carga.

### 3. Para que serve o PWM
- Liste e explique aplicações do PWM em:
  - Controle de velocidade de motores DC;  
  - Controle de brilho de LEDs;  
  - Controle de temperatura e potência elétrica;  
  - Outras aplicações em robótica e IoT.

### 4. Importância do PWM
- Por que o PWM é mais eficiente que um sinal analógico puro?  
- Qual é a vantagem de controlar energia através do duty cycle?  
- Explique a importância do PWM no consumo energético e na precisão de controle.

### 5. Aplicação prática no Arduino
- Como o Arduino gera um sinal PWM?  
- Quais pinos possuem suporte (marcados com `~`)?  
- Mostre um exemplo prático com código, por exemplo, controle de brilho de um LED:

### 6. Interferência do PWM no ADC

-Explique o que é o ADC (Conversor Analógico-Digital) e sua função no microcontrolador.
-Descreva como sinais PWM podem interferir em medições analógicas, caso não haja filtragem.
-Cite soluções para evitar interferências (uso de filtros RC, capacitores e separação de alimentação).
-Explique por que é importante entender essa interferência em projetos de IoT.