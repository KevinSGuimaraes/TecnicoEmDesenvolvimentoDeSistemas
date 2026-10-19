# Atividade 05 — Portal Multimídia de Tecnologia

## Desafio — Desenvolva um portal multimídia

Você foi contratado para desenvolver uma página para um portal educacional de tecnologia. O objetivo é apresentar conteúdos de programação, hardware, desenvolvimento web e matemática aplicada à computação, utilizando os recursos multimídia disponíveis no HTML5.

Sua tarefa é construir uma página HTML completa, organizada semanticamente e com diferentes tipos de conteúdo multimídia.

**Atenção:** nesta atividade, você deverá utilizar somente HTML, sem CSS e sem JavaScript. O resultado visual deve ser construído exclusivamente com as tags estudadas.

## 1. Estrutura da página

Crie um documento HTML5 completo, contendo:

- Título da página: `Portal Multimídia de Tecnologia`.
- Idioma definido como português do Brasil.
- Codificação de caracteres UTF-8.
- Cabeçalho com o nome do portal e uma breve apresentação.
- Menu de navegação com links para as principais seções.
- Conteúdo principal dividido em seções.
- Barra lateral com informações complementares.
- Rodapé com informações sobre o projeto.

Utilize corretamente as tags semânticas estudadas nas atividades anteriores.

## 2. Seção — Galeria de imagens

Crie uma galeria com pelo menos três imagens relacionadas à tecnologia, como computadores, robótica, programação ou redes.

Requisitos:

- Utilize a tag `img` para exibir as imagens.
- Preencha o atributo `alt` com descrições significativas.
- Utilize `figure` e `figcaption` para apresentar legendas.
- Inclua pelo menos uma imagem responsiva utilizando `picture` e `source`.
- Utilize `width` e `height` quando apropriado.
- Organize o conteúdo com títulos e parágrafos.

As imagens devem estar armazenadas em uma pasta do projeto, evitando depender exclusivamente de links externos.

## 3. Seção — Conteúdo em áudio

Crie uma seção chamada **Podcast de Tecnologia**.

Requisitos:

- Apresente um título e uma descrição do episódio.
- Insira pelo menos um áudio utilizando `audio`.
- Utilize `source` para informar o arquivo e seu tipo.
- Habilite os controles de reprodução.
- Inclua um texto alternativo para navegadores que não suportem o recurso.

O áudio deve estar relacionado à tecnologia, à programação ou à computação.

## 4. Seção — Aula em vídeo

Crie uma seção chamada **Aula em Vídeo**.

Requisitos:

- Apresente um título e uma descrição do conteúdo.
- Insira um vídeo utilizando `video`.
- Utilize `source` para informar o arquivo de vídeo.
- Disponibilize os controles de reprodução.
- Defina uma largura adequada para o vídeo.
- Utilize `track` para disponibilizar uma faixa de legendas em português, por meio de um arquivo WebVTT (`.vtt`).

## 5. Seção — Mapa interativo de componentes

Crie uma imagem que represente um computador, uma placa eletrônica ou um laboratório de informática.

A imagem deverá possuir pelo menos três regiões clicáveis.

Requisitos:

- Utilize `map` para definir o mapa de imagem.
- Utilize `area` para definir as regiões interativas.
- Identifique cada região com o atributo `alt`.
- Utilize pelo menos dois formatos de área, como `rect`, `circle` ou `poly`.
- Cada região deverá direcionar para uma página, seção ou recurso relacionado ao componente identificado.

Exemplo de aplicação: uma região para o processador, outra para a memória RAM e outra para o armazenamento.

## 6. Seção — Material complementar

Crie uma seção chamada **Biblioteca Digital**.

Requisitos:

- Incorpore um documento PDF utilizando `object` ou `embed`.
- Disponibilize um link para abrir ou acessar o documento caso ele não seja exibido.
- Incorpore um conteúdo externo utilizando `iframe`, como um vídeo educacional ou outro recurso compatível.
- Utilize `title` no `iframe` para identificar seu conteúdo.
- Acrescente uma descrição sobre a importância dos materiais apresentados.

Não é necessário utilizar `object` e `embed` simultaneamente.

## 7. Seção — Ilustração vetorial

Crie uma ilustração utilizando diretamente a tag `svg`.
por essa parte ser muito difici vou deixar o codigo para voces verem:
```
            <svg width="300" height="180"
                 viewBox="0 0 300 180"
                 role="img"
                 aria-label="Ilustração vetorial de um computador">

                <rect x="50" y="20"
                      width="200" height="110"
                      fill="lightblue"
                      stroke="black"
                      stroke-width="3">

                </rect>

                <rect x="65" y="35"
                      width="170" height="80"
                      fill="white"
                      stroke="black">

                </rect>

                <circle cx="150" cy="75"
                        r="20"
                        fill="royalblue">

                </circle>

                <line x1="150" y1="130"
                      x2="150" y2="150"
                      stroke="black"
                      stroke-width="5">

                </line>

                <rect x="110" y="150"
                      width="80" height="8"
                      fill="gray">

                </rect>

                <text x="150" y="175"
                      text-anchor="middle"
                      font-size="12">
                    Computador
                </text>

            </svg>
```
## 8. Seção — Matemática aplicada à computação

Crie uma seção chamada **Matemática para Programadores**.

Apresente pelo menos três expressões matemáticas utilizando MathML dentro da tag `math`.

Sugestões:

- Uma fração;
- Uma equação do segundo grau;
- Uma expressão de potência;
- Uma fórmula relacionada ao cálculo de desempenho computacional.

Utilize elementos apropriados do MathML, como `mi`, `mn`, `mo`, `mfrac`, `msup` ou `msqrt`.

Cada expressão deverá possuir um título e uma explicação sobre sua aplicação.

## 9. Seção — Informações complementares

Utilize as tags de texto estudadas anteriormente para apresentar informações adicionais, como:

- Termos técnicos com `abbr`;
- Trechos de código com `code` e `pre`;
- Informações importantes com `strong` e `em`;
- Pequenos destaques com `mark`;
- Citações de fontes com `cite` ou `blockquote`;
- Data de publicação utilizando `time`.

Organize as informações de maneira coerente com o tema do portal.

## 10. Requisitos técnicos

O projeto deverá atender aos seguintes critérios:

- Utilizar a estrutura completa do HTML5.
- Utilizar corretamente as tags semânticas já estudadas.
- Apresentar indentação consistente.
- Utilizar nomes de arquivos e pastas organizados.
- Utilizar caminhos corretos para imagens, áudios, vídeos, legendas e documentos.
- Preencher os atributos necessários para acessibilidade.
- Não utilizar CSS ou JavaScript.
- Não substituir elementos HTML por imagens de telas ou capturas de código.
- Verificar se os recursos locais estão sendo carregados corretamente.

## 11. Organização dos arquivos

Organize o projeto seguindo uma estrutura semelhante a esta:

```text
portal-multimidia/
├── index.html
├── img/
│   ├── computador.jpg
│   ├── laboratorio.jpg
│   ├── robótica.jpg
│   └── mapa-componentes.jpg
├── midia/
│   ├── podcast.mp3
│   └── aula.mp4
├── legendas/
│   └── aula-pt.vtt
└── documentos/
    └── manual.pdf
```

Você poderá acrescentar outras pastas e arquivos conforme a necessidade do projeto.

## 12. Entrega

Entregue o projeto completo, contendo:

1. O arquivo `index.html`.
2. Os arquivos de mídia utilizados.
3. O arquivo de legendas, quando aplicável.
4. Os documentos e demais recursos necessários.
5. O projeto organizado em um repositório GitHub.

**Critério de conclusão:** o portal deverá apresentar os conteúdos solicitados, funcionar corretamente no navegador e demonstrar que você compreende a finalidade de cada elemento utilizado.