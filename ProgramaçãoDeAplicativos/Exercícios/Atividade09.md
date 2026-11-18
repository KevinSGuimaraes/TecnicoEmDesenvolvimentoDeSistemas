# ATIVIDADE PRÁTICA — DESENVOLVIMENTO WEB
# Projeto: VIBRA FESTIVAL
### Construindo uma página profissional utilizando HTML e CSS

---

# 1. CONTEXTUALIZAÇÃO

Imagine que você foi contratado por uma empresa de eventos para desenvolver o site oficial de um grande festival de música.

O evento se chama **VIBRA FESTIVAL** e reúne diferentes estilos musicais, artistas, gastronomia, arte e entretenimento.

Sua missão será desenvolver uma página web que apresente o evento de maneira atrativa, colorida e organizada.

Você deverá utilizar HTML para construir a estrutura da página e CSS para desenvolver toda a identidade visual.

**Seu desafio será reproduzir o projeto seguindo as especificações visuais e técnicas apresentadas neste documento.**

Não basta que a página apresente todas as informações. Ela deverá respeitar as cores, fontes, tamanhos, dimensões e características de formatação solicitadas.

---

# 2. CONFIGURAÇÕES GERAIS DO PROJETO

Antes de começar, crie a seguinte estrutura de arquivos:

```text
vibra-festival/
│
├── index.html
│
├──css
│──── style.css
│
└── imagens/
```

## 2.1. Configurações tipográficas

O projeto utilizará duas famílias tipográficas principais:

| Aplicação | Fonte |
|---|---|
| Textos gerais | Arial |
| Títulos das seções | Georgia |
| Título principal | Impact |

Configure os seguintes tamanhos:

| Elemento | Tamanho |
|---|---:|
| Título principal | 64px |
| Títulos das seções | 36px |
| Nome dos artistas | 29px |
| Subtítulos | 22px |
| Textos comuns | 16px |
| Informações complementares | 13px |
| Identificadores e horários | 12px |

## 2.2. Paleta de cores

Utilize obrigatoriamente as seguintes cores:

| Aplicação | Cor | Código |
|---|---|---|
| Roxo principal | Roxo escuro | `#32105F` |
| Roxo secundário | Roxo médio | `#6336A5` |
| Rosa | Rosa vibrante | `#F04E98` |
| Amarelo | Amarelo destaque | `#FFCC33` |
| Laranja | Laranja | `#E76B32` |
| Verde | Verde | `#23866B` |
| Texto principal | Roxo quase preto | `#241044` |
| Fundo claro | Branco amarelado | `#FFFAF2` |
| Fundo rosa claro | Rosa suave | `#FFE2EF` |
| Fundo verde claro | Verde suave | `#E4F7EF` |

---

# 3. DESENVOLVIMENTO DAS SEÇÕES

## SEÇÃO 01 — CABEÇALHO DO FESTIVAL

O cabeçalho será a primeira parte visualizada pelo visitante.

Ele deverá apresentar o nome do festival, uma frase de apresentação, a data do evento e um botão de chamada para ação.

### Conteúdo obrigatório

- Texto superior: MÚSICA • ARTE • CULTURA
- Título principal: VIBRA FESTIVAL
- Frase: Um encontro de ritmos, cores e pessoas.
- Data: 15 DE DEZEMBRO • A PARTIR DAS 14H
- Botão: GARANTA SEU INGRESSO

### Especificações visuais

| Propriedade | Configuração |
|---|---|
| Cor de fundo | `#32105F` |
| Imagem de fundo | Fotografia de um festival musical |
| Repetição da imagem | Não repetir |
| Posição da imagem | Centralizada |
| Fixação da imagem | Acompanhar a página |
| Tamanho da imagem | Cobrir toda a área |
| Alinhamento dos textos | Centralizado |
| Espaçamento interno | 75px vertical e 20px horizontal |

### Formatação dos textos

**Título principal:**

- Fonte: Impact.
- Tamanho: 64px.
- Espessura: 900.
- Espaçamento entre letras: 3px.
- Cor principal: Branco.
- A palavra FESTIVAL deverá aparecer na cor amarela `#FFCC33`.

**Frase de apresentação:**

- Fonte: Georgia.
- Tamanho: 22px.
- Estilo: Itálico.
- Cor: Branco.

**Data do evento:**

- Tamanho: 16px.
- Espessura: Negrito.
- Cor: `#FFCC33`.

**Botão:**

- Fundo: `#FFCC33`.
- Texto: `#241044`.
- Espaçamento interno: 12px vertical e 25px horizontal.
- Formato arredondado.
- Texto em negrito.

---

## SEÇÃO 02 — SOBRE O FESTIVAL

Crie uma seção para apresentar o evento aos visitantes.

### Conteúdo obrigatório

Título:

**Mais que música. Uma experiência!**

Primeiro parágrafo:

"Prepare-se para um dia inteiro de música, encontros e descobertas. O Vibra Festival reúne diferentes estilos musicais em um só lugar, com atrações para todos os gostos."

Segundo parágrafo:

"Traga seus amigos, descubra novos artistas e faça parte de uma celebração cheia de energia, criatividade e boas lembranças."

Frase de destaque:

"A música aproxima pessoas e transforma momentos."

### Especificações visuais

| Propriedade | Configuração |
|---|---|
| Cor de fundo | `#FFF1D6` |
| Espaçamento interno | 65px vertical |
| Espaçamento horizontal | 9% |
| Título | Georgia, 36px |
| Cor do título | `#241044` |
| Destaque do título | Rosa `#F04E98` |
| Parágrafos | Arial, 16px |
| Largura máxima dos parágrafos | 750px |

### Frase de destaque

A frase deverá ser apresentada dentro de um elemento de destaque com:

- Fundo branco.
- Texto roxo médio `#6C3483`.
- Fonte Georgia.
- Tamanho 21px.
- Estilo itálico.
- Espessura negrito.
- Borda esquerda rosa de 6px.
- Espaçamento interno de 18px vertical e 25px horizontal.

---

## SEÇÃO 03 — ATRAÇÕES MUSICAIS

Crie uma seção para apresentar quatro atrações musicais.

Cada atração deverá possuir um cartão próprio.

### Atração 1

- Artista: Solaris
- Horário: 15H00
- Estilo musical: POP • INDIE
- Descrição: Melodias contagiantes para começar a tarde com muita energia.
- Cor do cartão: `#6336A5`

### Atração 2

- Artista: DJ Nebula
- Horário: 16H30
- Estilo musical: ELETRÔNICA
- Descrição: Batidas envolventes e uma pista pronta para não ficar parada.
- Cor do cartão: `#D93683`

### Atração 3

- Artista: Maré Alta
- Horário: 18H00
- Estilo musical: ROCK • ALTERNATIVO
- Descrição: Guitarras, atitude e músicas para cantar junto.
- Cor do cartão: `#E76B32`

### Atração 4

- Artista: Lua & Banda
- Horário: 20H00
- Estilo musical: BRASILIDADES
- Descrição: Uma mistura de ritmos brasileiros para fechar o festival em grande estilo.
- Cor do cartão: `#23866B`

### Especificações dos cartões

| Propriedade | Configuração |
|---|---|
| Largura | 47% |
| Altura mínima | 230px |
| Espaçamento externo | 1% |
| Espaçamento interno | 25px |
| Cor do texto | Branco |
| Cantos arredondados | 14px |
| Alinhamento | Superior |

### Formatação interna

**Nome do artista:**

- Fonte: Georgia.
- Tamanho: 29px.
- Espessura: Negrito.
- Cor: Branco.

**Horário:**

- Tamanho: 13px.
- Espessura: 900.
- Espaçamento entre letras: 2px.

**Estilo musical:**

- Tamanho: 12px.
- Negrito.
- Espaçamento entre letras: 2px.

**Descrição:**

- Fonte: Arial.
- Tamanho: 16px.
- Cor: Branco.

Os cartões deverão ser apresentados em duas colunas, formando duas linhas.

---

## SEÇÃO 04 — PROGRAMAÇÃO DO EVENTO

Crie uma tabela apresentando a programação do festival.

Utilize os seguintes dados:

| Horário | Atividade |
|---|---|
| 14h00 | Abertura dos portões |
| 15h00 | Show de abertura — Solaris |
| 16h30 | DJ Nebula |
| 18h00 | Show — Maré Alta |
| 20h00 | Show principal — Lua & Banda |

### Especificações visuais

- Fundo da seção: Branco `#FFFFFF`.
- Tabela ocupando 100% da largura disponível.
- Cor do cabeçalho da tabela: `#32105F`.
- Texto do cabeçalho: Branco.
- Tamanho da fonte do cabeçalho: 14px.
- Espaçamento interno das células: 14px vertical e 15px horizontal.
- Cor das bordas inferiores: `#E5D9ED`.
- Linhas alternadas com fundo `#F5EAFF`.
- Última apresentação destacada em rosa escuro `#B51C69` e negrito.

O cabeçalho deverá conter as colunas HORÁRIO e ATIVIDADE.

---

## SEÇÃO 05 — EXPERIÊNCIAS DO FESTIVAL

Crie três áreas apresentando experiências disponíveis no evento.

### Experiência 1 — Espaço gastronômico

Descrição:

"Sabores variados, comidas deliciosas e opções para todos os gostos."

Utilize uma fotografia relacionada à gastronomia.

### Experiência 2 — Galeria criativa

Descrição:

"Conheça artistas locais, instalações e trabalhos cheios de personalidade."

Utilize uma fotografia relacionada à arte.

### Experiência 3 — Espaço de fotos

Descrição:

"Registre seus melhores momentos e compartilhe a experiência."

Utilize uma fotografia relacionada a festivais ou apresentações musicais.

### Especificações visuais

| Propriedade | Configuração |
|---|---|
| Cor de fundo da seção | `#E4F7EF` |
| Largura de cada cartão | 30% |
| Espaçamento externo | 1% |
| Espaçamento interno | 15px |
| Fundo dos cartões | Branco |
| Arredondamento | 12px |
| Altura das imagens | 150px |
| Largura das imagens | 100% |
| Fonte dos títulos | Georgia |
| Tamanho dos títulos | 21px |
| Cor dos títulos | `#6336A5` |
| Fonte das descrições | Arial |
| Tamanho das descrições | 16px |

As três experiências deverão aparecer lado a lado.

---

## SEÇÃO 06 — INFORMAÇÕES E INGRESSOS

Crie uma seção com informações importantes sobre o festival.

### Conteúdo obrigatório

- Data: 15 de dezembro.
- Local: Parque das Artes.
- Horário: Das 14h às 22h.
- Classificação: Consulte as regras do evento.
- Ingresso promocional: R$ 35,00.

### Especificações visuais

| Propriedade | Configuração |
|---|---|
| Fundo da seção | `#FFE2EF` |
| Título | Georgia, 36px |
| Destaque do título | Rosa `#F04E98` |
| Aviso de ingresso | Fundo `#FFF0B3` |
| Cor do texto do aviso | `#45216B` |
| Borda esquerda | Amarela, 6px |
| Espaçamento interno do aviso | 15px |
| Informações | Arial, 16px |
| Espaçamento entre informações | 8px |

A frase "Evento fictício desenvolvido para fins educacionais." deverá aparecer em tamanho 13px, itálico e cor `#765D7E`.

---

## SEÇÃO 07 — RODAPÉ

Crie o rodapé para finalizar a página.

### Conteúdo obrigatório

- Nome: VIBRA FESTIVAL.
- Frase: Onde a música encontra a sua energia.
- Direitos autorais: © 2026 Vibra Festival. Todos os direitos reservados.
- Link: Voltar ao topo.

### Especificações visuais

| Propriedade | Configuração |
|---|---|
| Cor de fundo | `#241044` |
| Cor dos textos | Branco |
| Alinhamento | Centralizado |
| Espaçamento interno | 45px vertical e 20px horizontal |
| Fonte do título | Impact |
| Tamanho do título | 36px |
| Cor de FESTIVAL | `#FFCC33` |
| Texto de direitos autorais | 12px |
| Link | Amarelo `#FFCC33` |

---

# 4. REQUISITOS TÉCNICOS OBRIGATÓRIOS

Além de reproduzir o layout, você deverá demonstrar que compreende os conceitos de CSS estudados.

## 4.1. Formas de aplicação do CSS

Utilize as três formas de aplicação:

1. CSS externo: arquivo `style.css`, responsável pela maior parte da estilização.
2. CSS interno: utilização da tag `<style>` no documento HTML.
3. CSS inline: aplicação de uma regra diretamente em um elemento HTML.

## 4.2. Seletores

Utilize obrigatoriamente:

- Seletor de elemento: `body`, `h1`, `p`, entre outros.
- Seletor de classe: `.cartao`, `.sobre`, entre outros.
- Seletor de ID: `#topo`, `#sobre`, entre outros.

## 4.3. Propriedades obrigatórias

### Background

Utilize:

- `background-color`
- `background-image`
- `background-repeat`
- `background-position`
- `background-attachment`

### Fontes

Utilize:

- `font-family`
- `font-size`
- `font-weight`
- `font-style`
- `color`

### Outras propriedades

Utilize também:

- `margin`
- `padding`
- `border`
- `text-align`
- `width`
- `height`

---

# 5. ORGANIZAÇÃO E ENTREGA

Ao finalizar, você deverá entregar:

- `index.html`
- `style.css`
- Pasta `imagens`, caso tenha utilizado imagens locais.

Antes da entrega, verifique:

- Todas as sete seções foram desenvolvidas?
- As cores correspondem às especificações?
- Os tamanhos das fontes estão corretos?
- As quatro atrações foram apresentadas?
- A tabela de programação está completa?
- As três experiências possuem imagens?
- O cabeçalho possui uma imagem de fundo?
- As três formas de aplicação do CSS foram utilizadas?
- Foram utilizados seletores de elementos, classes e IDs?

---

# 6. CRITÉRIOS DE AVALIAÇÃO

| Critério | Pontuação |
|---|---:|
| Estrutura HTML e organização | 1,0 |
| Reprodução das cores e identidade visual | 1,5 |
| Formatação de fontes e textos | 1,5 |
| Utilização das propriedades de background | 1,5 |
| Utilização de seletores, classes e IDs | 1,5 |
| Construção e formatação das seções | 1,5 |
| Organização dos arquivos e entrega | 1,0 |
| Compreensão e explicação do código | 0,5 |
| **TOTAL** | **10,0** |

**Lembre-se: o objetivo é aprender a transformar uma estrutura HTML em uma página visualmente interessante utilizando CSS.**