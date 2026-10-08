# Atividade 04 — Guia do Front-end

## HTML5 — Estrutura, Semântica e Semântica Textual Inline

---

## Objetivo

Desenvolver uma página completa utilizando **HTML5** para apresentar um guia introdutório sobre **desenvolvimento Front-end**.

Nesta atividade, você deverá aplicar os conhecimentos adquiridos nas atividades anteriores e utilizar as novas tags de **semântica textual inline**.

A atividade é **acumulativa**.

Portanto, os elementos estudados anteriormente deverão continuar sendo utilizados sempre que forem adequados ao conteúdo.

> **O objetivo não é utilizar a maior quantidade possível de tags.**
>
> O objetivo é compreender **qual elemento HTML representa melhor cada tipo de informação**.

A página deverá ser desenvolvida **somente com HTML**.

> **Não utilize CSS ou JavaScript nesta atividade.**

---

# 1. Contexto

Você foi contratado para desenvolver uma página chamada:

# Guia do Front-end

O site será utilizado como material introdutório para estudantes que estão começando a estudar desenvolvimento Web.

A página deverá apresentar informações sobre:

* Front-end;
* HTML;
* CSS;
* JavaScript;
* Elementos HTML;
* Atributos;
* HTML semântico;
* Semântica textual;
* Código;
* Variáveis;
* Tecnologias utilizadas no desenvolvimento Web.

O resultado deverá se parecer com uma pequena **documentação técnica ou guia de estudos**.

---

# 2. Estrutura Geral

Organize sua página seguindo uma estrutura semelhante à apresentada abaixo:

```text
HTML
│
├── HEAD
│
└── BODY
    │
    ├── HEADER
    │   ├── Título
    │   ├── Descrição
    │   ├── Imagem
    │   └── NAV
    │
    ├── MAIN
    │   │
    │   ├── SECTION — O que é Front-end?
    │   │
    │   ├── SECTION — As três principais tecnologias
    │   │
    │   ├── SECTION — HTML
    │   │   ├── ARTICLE — Elementos
    │   │   └── ARTICLE — Atributos
    │   │
    │   ├── SECTION — HTML Semântico
    │   │
    │   ├── SECTION — Semântica Textual Inline
    │   │
    │   ├── SECTION — Código
    │   │
    │   ├── SECTION — Variáveis
    │   │
    │   ├── SECTION — Glossário
    │   │
    │   └── SECTION — Tecnologias
    │
    ├── ASIDE — Dica do Desenvolvedor
    │
    └── FOOTER — Guia do Front-end
```

Essa estrutura é uma referência.

Você poderá organizar os elementos de maneira diferente, desde que a página mantenha uma estrutura **lógica, organizada e semanticamente correta**.

---

# 3. Documento HTML5

Crie um documento HTML5 completo.

Utilize:

```<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia do Front-end</title>
</head>
<body>
    
</body>
</html>
```

O elemento `html` deverá possuir:

```html
lang="pt-BR"
```

No `head`, utilize:

* `meta charset`;
* `meta viewport`;
* `title`.

O título da página deverá ser:

```text
Guia do Front-end
```

---

# 4. Cabeçalho — `header`

Crie um cabeçalho utilizando:

```html
<header>
```

O cabeçalho deverá apresentar:

* nome do site;
* slogan;
* pequena descrição;
* uma imagem relacionada ao desenvolvimento Front-end.

A imagem deverá estar dentro de:

```html
<figure>
    <img>
    <figcaption>
</figure>
```

A imagem deverá possuir obrigatoriamente:

* `src`;
* `alt`;
* `title`.

A legenda deverá explicar a relação da imagem com o conteúdo.

### Imagens

As imagens utilizadas nesta atividade serão **fornecidas pelo professor**.

Não é necessário procurar imagens na Internet.

Organize os arquivos de imagem em uma pasta própria, por exemplo:

```text
projeto/
│
├── index.html
│
└── img/
    ├── frontend.png
    ├── html.png
    ├── css.png
    ├── javascript.png
    └── ...
```

---

# 5. Menu — `nav`

Crie um menu utilizando:

```html
<nav>
```

O menu deverá possuir os seguintes itens:

* Início;
* Front-end;
* HTML;
* CSS;
* JavaScript;
* Semântica;
* Glossário;
* Tecnologias;
* Contato.

Organize os itens utilizando:

```text
ul
li
a
```

Os links deverão direcionar para as respectivas seções da página utilizando **âncoras internas**.

Exemplo:

```html
<a href="#html">HTML</a>
```

---

# 6. Links Externos

Adicione pelo menos **quatro links externos** relacionados ao desenvolvimento Web.

Sugestões:

* MDN Web Docs;
* W3C;
* PHP;
* PostgreSQL.

Os links externos deverão utilizar:

```text
href
target="_blank"
title
```

O atributo `title` deverá informar ao usuário o destino do link.

Exemplo:

```html
<a
    href="https://developer.mozilla.org/"
    target="_blank"
    title="Acessar a documentação MDN">
    MDN Web Docs
</a>
```

---

# 7. Conteúdo Principal — `main`

Todo o conteúdo principal da página deverá estar dentro de:

```html
<main>
```

Dentro do `main`, crie as diferentes seções solicitadas nesta atividade.

---

# 8. Seção — O que é Front-end?

Crie uma seção chamada:

```text
O que é Front-end?
```

Explique com suas próprias palavras o que significa desenvolvimento Front-end.

O texto deverá explicar que o Front-end está relacionado à parte da aplicação que o usuário visualiza e utiliza diretamente.

Crie pelo menos **dois parágrafos**.

Utilize obrigatoriamente:

* `strong`;
* `em`;
* `mark`.

Cada elemento deverá ser utilizado de acordo com seu significado.

> Não utilize essas tags simplesmente porque deixam o texto em negrito, itálico ou destacado.

---

# 9. As três principais tecnologias

Crie uma seção chamada:

```text
As três principais tecnologias
```

Explique a função de:

1. HTML;
2. CSS;
3. JavaScript.

Utilize uma lista para apresentar as três tecnologias.

As siglas deverão utilizar:

```html
<abbr>
```

O atributo `title` deverá apresentar o significado completo da sigla.

Exemplo:

```html
<abbr title="HyperText Markup Language">
    HTML
</abbr>
```

---

# 10. HTML — Estrutura da Web

Crie uma seção chamada:

```text
HTML — Estrutura da Web
```

Explique:

* o que é HTML;
* para que serve;
* o que são elementos;
* o que são atributos;
* diferença entre estrutura e aparência.

Quando mencionar uma tag HTML dentro de um texto, utilize:

```html
<code>
```

Exemplo:

```html
<code>h1</code>
```

---

# 11. Article — Elementos HTML

Dentro da seção HTML, crie um:

```html
<article>
```

com o título:

```text
Elementos HTML
```

Explique o que são elementos HTML.

Apresente pelo menos **cinco elementos** utilizando uma lista.

Utilize como exemplos:

* `h1`;
* `p`;
* `a`;
* `img`;
* `ul`.

Os nomes das tags deverão ser representados utilizando `code`.

---

# 12. Article — Atributos HTML

Crie outro:

```html
<article>
```

com o título:

```text
Atributos HTML
```

Explique o que são atributos.

Apresente pelo menos cinco atributos estudados anteriormente.

Sugestões:

* `href`;
* `src`;
* `alt`;
* `title`;
* `lang`.

Explique a função de cada atributo.

---

# 13. HTML Semântico

Crie uma seção chamada:

```text
HTML Semântico
```

Explique o que significa **semântica no HTML**.

Explique a função dos seguintes elementos:

```text
header
nav
main
section
article
aside
footer
address
```

Utilize uma lista ou um glossário.

Os nomes das tags deverão ser apresentados utilizando:

```html
<code>
```

---

# 14. A tag `div`

Crie uma explicação sobre:

```html
<div>
```

Explique que `div` é um elemento genérico de agrupamento e não possui significado semântico específico.

Utilize pelo menos **duas `div`** na página.

As `div` deverão ser utilizadas em situações nas quais não exista um elemento semântico mais apropriado.

> Não utilize `div` para substituir `header`, `nav`, `main`, `section`, `article`, `aside` ou `footer`.

---

# 15. Semântica Textual Inline

Crie uma seção chamada:

```text
Semântica Textual Inline
```

Explique que existem elementos HTML destinados a representar o significado de pequenos trechos de texto.

Nesta seção, utilize obrigatoriamente:

```text
span
strong
em
mark
small
abbr
cite
q
time
```

Crie exemplos reais para cada uma dessas tags.

---

# 16. `strong`, `em`, `mark` e `small`

Crie textos utilizando:

### `strong`

Para representar uma informação de **grande importância**.

### `em`

Para representar **ênfase**.

### `mark`

Para destacar uma informação relevante dentro de determinado contexto.

### `small`

Para representar uma observação ou informação complementar.

Utilize cada elemento de maneira semanticamente adequada.

---

# 17. `span`

Utilize `span` para agrupar um trecho de texto que não possua um significado semântico específico.

O uso deverá fazer sentido dentro do conteúdo.

> Lembre-se: `span` é um elemento genérico inline.

---

# 18. `abbr`

Crie uma subseção chamada:

```text
Siglas importantes
```

Apresente pelo menos **cinco siglas relacionadas à tecnologia**.

Sugestões:

* HTML;
* CSS;
* API;
* URL;
* HTTP;
* SQL;
* PHP.

Utilize:

```html
<abbr title="...">
```

O `title` deverá apresentar o significado completo da sigla.

---

# 19. `cite`, `q` e `blockquote`

Crie uma seção chamada:

```text
Referências e citações
```

Apresente pelo menos uma obra relacionada à tecnologia.

Pode ser:

* livro;
* documentação;
* artigo;
* site.

Utilize `cite` para identificar a obra.

Depois, apresente pelo menos **duas citações curtas** utilizando `q`.

Também deverá existir pelo menos um:

```html
<blockquote>
```

O `blockquote` deverá representar uma citação ou trecho mais extenso.

Utilize o atributo:

```text
cite
```

quando houver uma fonte correspondente.

---

# 20. `time`

Crie uma seção chamada:

```text
Atualizações
```

Apresente pelo menos três informações relacionadas a datas.

Por exemplo:

* data de publicação;
* data de atualização;
* próxima aula.

Utilize:

```html
<time datetime="...">
```

Exemplo:

```html
<time datetime="2026-10-08">
    8 de outubro de 2026
</time>
```

---

# 21. Código — `code` e `pre`

Crie uma seção chamada:

```text
Exemplo de Código
```

Apresente exemplos de código HTML.

Utilize `code` para pequenos trechos.

Utilize `pre` para representar um bloco maior de código.

O exemplo deverá possuir pelo menos:

* um título;
* um parágrafo;
* um link.

---

# 22. Teclado — `kbd`

Crie uma subseção chamada:

```text
Atalhos
```

Apresente pelo menos três comandos de teclado.

Utilize exemplos como:

```text
Ctrl + S
Ctrl + C
Ctrl + V
```

As teclas deverão ser representadas utilizando `kbd`.

Exemplo:

```html
<kbd>Ctrl</kbd> + <kbd>S</kbd>
```

---

# 23. Saída de Programa — `samp`

Crie uma subseção chamada:

```text
Saída do Programa
```

Imagine que um programa tenha produzido mensagens para o usuário.

Exemplos:

```text
Arquivo salvo com sucesso.
```

```text
Erro: arquivo não encontrado.
```

Utilize `samp` para representar essas saídas.

Crie pelo menos **duas mensagens diferentes**.

---

# 24. Variáveis — `var`

Crie uma seção chamada:

```text
Variáveis
```

Apresente um exemplo matemático ou de programação.

Por exemplo:

```text
x = 10
y = 20
resultado = x + y
```

As variáveis deverão ser representadas utilizando:

```html
<var>
```

Utilize pelo menos **duas variáveis**.

---

# 25. Glossário Front-end

Crie uma seção chamada:

```text
Glossário Front-end
```

Utilize:

```text
dl
dt
dd
```

Inclua pelo menos **10 termos**.

Sugestões:

* HTML;
* CSS;
* JavaScript;
* Front-end;
* Back-end;
* Elemento;
* Atributo;
* Tag;
* Semântica;
* API.

Cada termo deverá possuir uma descrição.

---

# 26. Tecnologias Front-end

Crie uma seção chamada:

```text
Tecnologias Front-end
```

Apresente pelo menos **cinco tecnologias ou ferramentas** relacionadas ao desenvolvimento Web.

Cada tecnologia deverá possuir:

* nome;
* descrição;
* imagem;
* legenda;
* link externo.

Utilize:

```html
<figure>
    <img>
    <figcaption>
</figure>
```

As imagens fornecidas pelo professor deverão ser utilizadas nessa seção.

Todas as imagens deverão possuir:

```text
src
alt
title
```

---

# 27. Lista de Tecnologias

Crie uma lista não ordenada contendo as tecnologias apresentadas.

Utilize:

```html
<ul>
    <li>
</ul>
```

A lista deverá possuir pelo menos cinco itens.

---

# 28. Ranking de Tecnologias

Crie uma seção chamada:

```text
Ranking
```

Apresente um ranking com pelo menos cinco tecnologias.

Utilize:

```html
<ol>
```

Depois crie uma segunda lista apresentando as tecnologias em ordem inversa.

Utilize:

```html
reversed
```

A segunda lista deverá ser realmente uma lista ordenada de maneira reversa.

---

# 29. Área Complementar — `aside`

Crie um `aside` contendo três áreas:

## Dica do Desenvolvedor

Apresente uma dica para quem está aprendendo HTML.

## Links Úteis

Apresente pelo menos cinco links externos.

## Você Sabia?

Apresente uma curiosidade relacionada ao HTML ou à Web.

---

# 30. Imagens

A página deverá possuir pelo menos **quatro imagens**.

As imagens serão fornecidas pelo professor.

Todas as imagens deverão possuir:

```text
src
alt
title
```

Pelo menos quatro imagens deverão estar dentro de:

```html
<figure>
```

e possuir:

```html
<figcaption>
```

O texto do `alt` deverá descrever corretamente a imagem.

> Não utilize `alt="imagem"` ou `alt="foto"` de maneira genérica.

---

# 31. Hierarquia dos títulos

Utilize corretamente:

```text
h1
h2
h3
h4
h5
h6
```

Os títulos deverão possuir uma hierarquia lógica.

Exemplo:

```text
h1 — Guia do Front-end

    h2 — HTML

        h3 — Elementos

        h3 — Atributos

    h2 — CSS

    h2 — JavaScript
```

Não utilize títulos apenas porque possuem tamanhos diferentes.

A escolha do título deverá representar a **hierarquia do conteúdo**.

---

# 32. `hr`

Utilize:

```html
<hr>
```

para separar áreas importantes da página.

Utilize pelo menos **cinco elementos `hr`**.

---

# 33. Rodapé — `footer`

Crie um:

```html
<footer>
```

O rodapé deverá possuir:

* nome do site;
* ano;
* links;
* informações de contato;
* observação sobre o material.

---

# 34. Contato — `address`

Utilize:

```html
<address>
```

para apresentar:

* nome;
* e-mail;
* telefone;
* cidade;
* estado.

O e-mail deverá utilizar:

```text
mailto:
```

Exemplo:

```html
<a href="mailto:exemplo@email.com">
    exemplo@email.com
</a>
```

---

# 35. Requisitos mínimos

| Elemento     | Quantidade mínima |
| ------------ | ----------------: |
| `header`     |                 1 |
| `nav`        |                 1 |
| `main`       |                 1 |
| `section`    |                 8 |
| `article`    |                 2 |
| `aside`      |                 1 |
| `footer`     |                 1 |
| `address`    |                 1 |
| `figure`     |                 4 |
| `figcaption` |                 4 |
| `img`        |                 4 |
| `ul`         |                 3 |
| `ol`         |                 2 |
| `dl`         |                 1 |
| `dt`         |                10 |
| `dd`         |                10 |
| `blockquote` |                 1 |
| `pre`        |                 1 |
| `div`        |                 2 |
| `hr`         |                 5 |

---

# 36. Novas tags obrigatórias

As tags estudadas nesta aula deverão ser utilizadas de maneira significativa.

| Tag      | Quantidade mínima |
| -------- | ----------------: |
| `span`   |                 1 |
| `strong` |                 3 |
| `em`     |                 2 |
| `mark`   |                 2 |
| `small`  |                 2 |
| `abbr`   |                 5 |
| `cite`   |                 1 |
| `q`      |                 2 |
| `time`   |                 3 |
| `code`   |            vários |
| `kbd`    |                 3 |
| `samp`   |                 2 |
| `var`    |                 2 |

---

# 37. Atributos obrigatórios

Utilize corretamente os atributos estudados.

### Documento

```text
lang
charset
name
content
```

### Links

```text
href
target
title
```

### Imagens

```text
src
alt
title
```

### Citações

```text
cite
```

### Datas

```text
datetime
```

### Listas

```text
type
start
reversed
```

---

# 38. Organização dos arquivos

Organize o projeto da seguinte maneira:

```text
ATV04/
│
├── index.html
│
└── img/
    ├── frontend.png
    ├── html.png
    ├── css.png
    ├── javascript.png
    └── tecnologia.png
```

Os nomes dos arquivos podem ser diferentes, desde que a organização seja mantida.

---

# 39. Revisão do código

Antes de entregar, revise toda a página.

Responda mentalmente às seguintes perguntas:

1. Minha estrutura HTML5 está correta?
2. O `main` contém o conteúdo principal?
3. Os elementos semânticos estão sendo utilizados corretamente?
4. Estou utilizando `div` apenas quando necessário?
5. Meus títulos possuem hierarquia?
6. Todas as imagens possuem `alt`?
7. Meus links funcionam?
8. Os links externos possuem `target="_blank"`?
9. As siglas possuem `abbr`?
10. Os códigos estão representados por `code`?
11. Os blocos de código utilizam `pre`?
12. As teclas estão representadas por `kbd`?
13. As saídas estão representadas por `samp`?
14. As variáveis estão representadas por `var`?
15. As datas estão representadas por `time`?
16. As citações estão representadas corretamente?
17. Estou utilizando `strong` pelo significado e não apenas pela aparência?
18. Estou utilizando `em` pelo significado e não apenas pela aparência?
19. Estou utilizando `mark` de maneira adequada?
20. O conteúdo continua compreensível sem CSS?

---

# 40. Regras

* Utilize somente HTML.
* Não utilize CSS.
* Não utilize JavaScript.
* Não utilize Bootstrap.
* Não utilize frameworks.
* Não utilize bibliotecas externas para substituir os elementos solicitados.
* Não utilize estilos inline.
* Não utilize `div` para substituir elementos semânticos.
* Organize e indente corretamente o código.
* Os links devem funcionar.
* As imagens devem funcionar.
* Utilize as imagens fornecidas pelo professor.
* O conteúdo deve estar relacionado a HTML e Front-end.
* Utilize as tags de acordo com sua finalidade.

---

# 41. Entrega

Entregue o projeto contendo:

```text
ATV04/
│
├── index.html
│
└── img/
```

O arquivo principal deverá obrigatoriamente se chamar:

```text
index.html
```

---

# 42. Critérios de Avaliação

| Critério                     |    Valor |
| ---------------------------- | -------: |
| Estrutura HTML5              |      1,0 |
| Organização e hierarquia     |      1,0 |
| Tags semânticas              |      1,5 |
| Tags estudadas anteriormente |      1,0 |
| Semântica textual inline     |      2,0 |
| Atributos                    |      1,0 |
| Links e imagens              |      0,5 |
| Organização e indentação     |      0,5 |
| Qualidade do conteúdo        |      0,5 |
| **Total**                    | **10,0** |

---

# 43. O que realmente será avaliado?

Não será avaliada apenas a quantidade de tags utilizadas.

Será avaliado se você consegue **escolher corretamente o elemento HTML para representar determinado conteúdo**.

Por exemplo:

```html
<strong>HTML é importante.</strong>
```

não deve ser utilizado simplesmente porque deixa o texto em negrito.

A pergunta correta é:

> **Esse trecho realmente representa uma informação de grande importância?**

Da mesma maneira:

```html
<code>html</code>
```

deve ser utilizado quando estamos nos referindo a código ou a um trecho de código.

E:

```html
<kbd>Ctrl</kbd>
```

deve representar uma entrada realizada pelo usuário através do teclado.

---
