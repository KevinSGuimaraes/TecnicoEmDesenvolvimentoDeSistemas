# Atividade Prática — Portal do Desenvolvedor

## HTML5 — Estrutura, Semântica e Atributos

---

## Objetivo

Desenvolver uma página completa utilizando HTML5, aplicando os conceitos estudados até o momento.

A atividade tem como objetivo praticar:

- Estrutura básica de um documento HTML5;
- Tags de texto;
- Links;
- Imagens;
- Listas;
- Glossários;
- Citações;
- Código;
- Tags semânticas;
- Organização de conteúdo;
- Atributos HTML.

A página deverá ser desenvolvida **somente com HTML**.

> **Não utilize CSS ou JavaScript nesta atividade.**

---

# 1. Contexto

Você foi contratado para desenvolver a página inicial de um portal chamado:

# Portal do Desenvolvedor

O portal é voltado para estudantes, desenvolvedores e profissionais da área de tecnologia.

O site deverá apresentar notícias, tutoriais, tecnologias, cursos, informações históricas e links úteis.

A página deverá possuir uma estrutura semelhante à de um portal real.

---

# 2. Estrutura Geral

A página deverá possuir a seguinte estrutura:

```text
HTML
│
├── HEAD
│
└── BODY
    │
    ├── HEADER
    │
    ├── NAV
    │
    ├── MAIN
    │   │
    │   ├── SECTION — Notícias
    │   │   ├── ARTICLE
    │   │   ├── ARTICLE
    │   │   └── ARTICLE
    │   │
    │   ├── SECTION — Tutoriais
    │   │   ├── ARTICLE
    │   │   └── ARTICLE
    │   │
    │   ├── SECTION — Glossário
    │   │
    │   ├── SECTION — História
    │   │
    │   └── SECTION — Código
    │
    ├── ASIDE
    │
    └── FOOTER
```

---

# 3. Cabeçalho — `header`

Crie o cabeçalho do portal utilizando:

```html
<header>
```

O cabeçalho deverá conter:

- Nome do portal;
- Slogan;
- Uma imagem;
- Legenda para a imagem.

A imagem deverá utilizar:

```html
<figure>
<img>
<figcaption>
```

### Requisitos

A imagem deverá possuir:

- `src`
- `alt`
- `title`

O atributo `alt` deverá descrever o conteúdo da imagem.

O atributo `title` deverá apresentar uma informação adicional sobre a imagem.

---

# 4. Menu de Navegação — `nav`

Crie um menu principal utilizando:

```html
<nav>
```

O menu deverá possuir os seguintes itens:

- Início
- Notícias
- Tutoriais
- Programação
- Banco de Dados
- Cursos
- Contato

Utilize:

```text
ul
li
a
```

Todos os itens deverão ser links.

---

# 5. Links

A página deverá possuir links internos e externos.

Os links deverão utilizar:

```html
href
```

Os links externos deverão abrir em uma nova aba.

Para isso, utilize:

```html
target="_blank"
```

Os links externos também deverão possuir um atributo `title` informando para onde o link levará.

Exemplo:

```html
<a
    href="https://www.php.net/"
    target="_blank"
    title="Documentação oficial do PHP">
    PHP
</a>
```

---

# 6. Conteúdo Principal — `main`

Todo o conteúdo principal do portal deverá estar dentro de:

```html
<main>
```

---

# 7. Notícias em Destaque — `section`

Crie uma seção chamada:

```text
Notícias em Destaque
```

Utilize:

```html
<section>
```

A seção deverá possuir pelo menos **3 artigos**.

Utilize:

```html
<article>
```

Cada artigo deverá possuir:

- Título;
- Subtítulo;
- Pelo menos dois parágrafos;
- Uma imagem;
- Legenda da imagem;
- Link para continuar lendo.

---

## Sugestões de notícias

Você pode utilizar temas como:

- Inteligência Artificial transforma o mercado de trabalho;
- Novos processadores chegam ao mercado;
- Programação continua entre as áreas mais procuradas.

---

# 8. Citação

Em uma das notícias deverá existir uma citação utilizando:

```html
<blockquote>
```

A citação deverá possuir o atributo:

```html
cite
```

O atributo deverá indicar a origem da informação.

---

# 9. Tutoriais — `section`

Crie uma seção chamada:

```text
Tutoriais
```

A seção deverá possuir pelo menos dois artigos.

Sugestões:

- Primeiros passos com HTML;
- Introdução à programação;
- Primeiros passos com banco de dados.

Cada tutorial deverá possuir:

- Título;
- Descrição;
- Link para o tutorial.

---

# 10. Glossário Técnico

Crie uma seção chamada:

```text
Glossário Técnico
```

Utilize:

```text
dl
dt
dd
```

Inclua pelo menos cinco termos.

Exemplo:

```text
HTML
CSS
JavaScript
PHP
PostgreSQL
```

Cada termo deverá possuir sua respectiva descrição.

---

# 11. Linha do Tempo da Tecnologia

Crie uma seção chamada:

```text
Linha do Tempo da Tecnologia
```

Utilize uma lista ordenada:

```html
<ol>
```

A lista deverá apresentar pelo menos cinco acontecimentos históricos.

### Requisitos

A lista deverá:

- utilizar o atributo `start`;
- utilizar o atributo `type`.

Exemplo:

```html
<ol type="A" start="1">
```

---

# 12. Ranking de Tecnologias

Crie uma seção chamada:

```text
Ranking de Tecnologias
```

Utilize uma lista ordenada.

O ranking deverá:

- começar na posição 10;
- utilizar letras maiúsculas como marcador.

Utilize os atributos necessários para produzir esse comportamento.

---

# 13. Lista Regressiva

Crie uma seção chamada:

```text
Contagem Regressiva para o Evento
```

Utilize uma lista ordenada que apresente os próximos cinco eventos em ordem decrescente.

A lista deverá utilizar o atributo:

```html
reversed
```

---

# 14. Listas Não Ordenadas

Crie uma seção ou conteúdo complementar contendo listas não ordenadas.

Utilize:

```html
<ul>
<li>
```

Crie pelo menos duas listas diferentes.

Sugestões:

### Tecnologias estudadas

- HTML
- CSS
- JavaScript
- PHP
- PostgreSQL

### Cursos recomendados

- Lógica de Programação
- Desenvolvimento Web
- Banco de Dados
- Engenharia de Software

---

# 15. Código da Semana

Crie uma seção chamada:

```text
Código da Semana
```

Utilize:

```html
<pre>
```

Apresente um pequeno trecho de código.

Pode ser um exemplo em:

- C;
- PHP;
- JavaScript;
- SQL.

---

# 16. Barra Lateral — `aside`

Crie uma área de conteúdo complementar utilizando:

```html
<aside>
```

A barra lateral deverá conter:

### Tecnologias populares

Uma lista não ordenada.

### Links úteis

Uma lista contendo links externos.

Inclua links para sites relacionados à tecnologia.

Exemplos:

- MDN;
- PHP;
- W3C;
- PostgreSQL.

Os links deverão abrir em uma nova aba.

---

# 17. Uso de `div`

Utilize pelo menos **duas tags `div`** na página.

Lembre-se:

> A `div` não possui significado semântico específico.

Utilize-a somente para agrupar conteúdos que não possuem uma tag semântica mais adequada.

---

# 18. Rodapé — `footer`

Crie o rodapé utilizando:

```html
<footer>
```

O rodapé deverá possuir:

- Nome do portal;
- Direitos autorais;
- Ano;
- Links rápidos;
- Informações de contato.

---

# 19. Informações de Contato — `address`

As informações de contato deverão utilizar:

```html
<address>
```

Inclua:

- E-mail;
- Telefone;
- Endereço;
- Cidade e estado.

---

# 20. Linha Horizontal

Utilize:

```html
<hr>
```

para separar visualmente diferentes áreas importantes da página.

---

# 21. Títulos

Utilize diferentes níveis de títulos:

```text
h1
h2
h3
h4
h5
h6
```

Os títulos deverão respeitar uma hierarquia lógica.

Não utilize títulos apenas para aumentar ou diminuir o tamanho do texto.

---

# 22. Quantidade Mínima

Sua página deverá possuir no mínimo:

| Elemento | Quantidade |
|---|---:|
| `header` | 1 |
| `nav` | 1 |
| `main` | 1 |
| `section` | 5 |
| `article` | 5 |
| `aside` | 1 |
| `footer` | 1 |
| `figure` | 4 |
| `figcaption` | 4 |
| `img` | 4 |
| Links | 15 |
| Listas `ul` | 3 |
| Listas `ol` | 3 |
| `dl` | 1 |
| `blockquote` | 1 |
| `pre` | 1 |
| `div` | 2 |
| `hr` | 5 |

---

# 23. Atributos Obrigatórios

Durante a atividade, utilize corretamente os seguintes atributos:

### Documento

```text
lang
charset
```

### Imagens

```text
src
alt
title
```

### Links

```text
href
target
title
```

### Listas

```text
type
start
reversed
```

### Citação

```text
cite
```

---

# 24. Desafio Extra

Crie uma seção chamada:

```text
Conheça as Tecnologias
```

Cada tecnologia deverá possuir:

- uma imagem;
- título;
- descrição;
- link externo.

Os links deverão abrir em uma nova aba.

---

# 25. Regras

- Não utilizar CSS.
- Não utilizar JavaScript.
- Não utilizar frameworks.
- Não utilizar Bootstrap.
- Não utilizar classes para estilização.
- Utilizar somente HTML.
- O código deverá estar corretamente identado.
- Os elementos deverão estar semanticamente organizados.
- Os links e imagens devem funcionar.

---

# 26. Critérios de Avaliação

| Critério | Valor |
|---|---:|
| Estrutura HTML5 correta | 1,0 |
| Uso das tags semânticas | 2,5 |
| Uso das tags estudadas anteriormente | 1,5 |
| Uso correto dos atributos | 2,0 |
| Organização e hierarquia do conteúdo | 1,5 |
| Identação e organização do código | 1,0 |
| Funcionamento dos links e imagens | 0,5 |
| **Total** | **10,0** |

---

# Resultado Esperado

Ao final da atividade, a página deverá possuir uma estrutura semelhante a um portal real de tecnologia.

O objetivo não é criar uma página visualmente bonita.

O objetivo é criar uma página **bem estruturada, organizada e semanticamente correta utilizando HTML5**.