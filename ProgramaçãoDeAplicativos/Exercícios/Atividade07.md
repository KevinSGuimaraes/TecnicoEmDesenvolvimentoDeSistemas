# Atividade 07 — Central de Informações e Suporte Técnico

## Desafio — Desenvolva um portal interativo de suporte técnico

Você foi contratado para desenvolver uma página para o setor de Tecnologia da Informação de uma empresa. O portal deverá disponibilizar orientações aos usuários, apresentar comunicados importantes e oferecer informações sobre os serviços de suporte.

Nesta atividade, você conhecerá novos elementos do HTML5 que permitem organizar conteúdos expansíveis, apresentar janelas de diálogo e trabalhar com mensagens alternativas quando o JavaScript estiver desabilitado.

Antes de desenvolver a página, leia as explicações e observe os exemplos de cada elemento.

---

# 1. Conteúdos expansíveis — `details` e `summary`

As tags `details` e `summary` são utilizadas em conjunto para criar conteúdos que podem ser expandidos ou recolhidos pelo próprio usuário, sem precisar utilizar JavaScript.

- **`details`:** cria uma área de conteúdo que pode ser aberta ou fechada.
- **`summary`:** define o título ou resumo que ficará visível mesmo quando o conteúdo estiver recolhido.

Quando o usuário clica no texto definido por `summary`, o navegador expande o elemento `details` e apresenta seu conteúdo. Ao clicar novamente, o conteúdo é recolhido.

### Exemplo

```html
<details>
    <summary>Como recuperar minha senha?</summary>

    <p>
        Entre em contato com o setor de TI
        para solicitar a redefinição da senha.
    </p>
</details>
```

**O que acontece no navegador?**

Inicialmente, somente a pergunta fica visível. Ao clicar nela, a resposta aparece. Um novo clique recolhe a resposta.

### Aplicação na atividade

Utilize `details` e `summary` para construir uma seção de perguntas frequentes (FAQ), contendo pelo menos cinco dúvidas comuns relacionadas à informática.

Sugestões de perguntas:

- Como recuperar minha senha?
- O que fazer quando o computador está lento?
- Como conectar à rede Wi-Fi da empresa?
- Como solicitar a instalação de um programa?
- Como identificar um e-mail suspeito?

Cada pergunta deverá apresentar uma resposta dentro do respectivo elemento `details`.

---

# 2. Janelas de diálogo — `dialog`

A tag `dialog` representa uma janela de diálogo dentro da página HTML. Ela pode ser utilizada para apresentar avisos, comunicados, confirmações ou informações importantes ao usuário.

Por padrão, o elemento não é exibido automaticamente. Para abrir uma janela diretamente no carregamento da página, podemos utilizar o atributo `open`.

### Exemplo

```html
<dialog open>
    <h2>Aviso importante</h2>

    <p>
        O sistema ficará indisponível
        no próximo sábado para manutenção.
    </p>
</dialog>
```

**O que acontece no navegador?**

Como o elemento possui o atributo `open`, o navegador apresenta o conteúdo dentro de uma janela de diálogo.

Sem esse atributo, o elemento `dialog` permanece fechado e não aparece na página.

### Como fechar uma janela de diálogo?

O elemento `dialog` possui um método chamado `close()`, que permite fechar a janela utilizando JavaScript.

Podemos executar esse método quando o usuário clicar em um botão.

Observe:

```html
<dialog open id="meuDialog">
    <h2>Comunicado do setor de TI</h2>

    <p>
        A manutenção dos servidores
        acontecerá neste final de semana.
    </p>

    <button
        type="button"
        onclick="document.getElementById('meuDialog').close()">

        Fechar comunicado

    </button>
</dialog>
```

**Entendendo o funcionamento:**

- `id="meuDialog"` identifica a janela para que ela possa ser localizada.
- `onclick` determina que uma ação será executada quando o usuário clicar no botão.
- `document.getElementById('meuDialog')` localiza o elemento HTML pelo seu identificador.
- `.close()` executa o fechamento da janela.

Neste exemplo, não precisamos criar uma função JavaScript. O próprio atributo `onclick` executa o comando diretamente quando o botão é pressionado.

### Aplicação na atividade

Crie uma janela de diálogo para apresentar um comunicado importante do setor de TI.

A janela deverá:

- Apresentar um título e uma mensagem.
- Ser exibida diretamente ao carregar a página.
- Possuir um botão para fechar o diálogo.
- Utilizar o método `close()` para realizar o fechamento.

---

# 3. Código JavaScript — `script`

A tag `script` é utilizada para inserir ou referenciar códigos JavaScript em uma página HTML.

Enquanto o HTML define a estrutura e o conteúdo da página, o JavaScript permite adicionar comportamentos e interações.

O código JavaScript pode ser escrito diretamente entre as tags `script` ou carregado a partir de um arquivo externo.

### Exemplo

```html
<script>
    console.log("JavaScript está funcionando!");
</script>
```

**O que acontece no navegador?**

O navegador executa o código JavaScript presente dentro da tag `script`. Neste exemplo, a mensagem é enviada para o console do navegador, que pode ser acessado pelas ferramentas de desenvolvedor.

É importante compreender que a tag `script` não é uma tag de conteúdo visual. Ela serve para inserir ou carregar instruções JavaScript.

### Aplicação na atividade

Inclua a tag `script` no documento para identificar onde os códigos JavaScript podem ser inseridos.

Nesta atividade, o fechamento da janela será realizado diretamente pelo atributo `onclick`, conforme apresentado anteriormente. Não é necessário criar funções ou desenvolver códigos JavaScript complexos.

---

# 4. Conteúdo alternativo — `noscript`

A tag `noscript` permite apresentar um conteúdo alternativo quando o JavaScript está desabilitado ou não é suportado pelo navegador.

Ela é útil para informar ao usuário que determinado recurso da página depende do JavaScript para funcionar corretamente.

### Exemplo

```html
<noscript>
    <p>
        Atenção: habilite o JavaScript
        para utilizar todos os recursos desta página.
    </p>
</noscript>
```

**O que acontece no navegador?**

- Com JavaScript habilitado, o conteúdo de `noscript` não é apresentado.
- Com JavaScript desabilitado, a mensagem alternativa é exibida.

### Aplicação na atividade

Inclua uma mensagem dentro de `noscript` informando que algumas funcionalidades da página dependem do JavaScript.

Considere que, se o JavaScript estiver desabilitado, o botão que utiliza `onclick` não conseguirá executar o comando de fechamento do diálogo.

---

# 5. Desafio prático — Desenvolva o portal

Agora que você conhece o funcionamento dos elementos, desenvolva uma página HTML para o setor de Tecnologia da Informação de uma empresa.

O portal deverá possuir três áreas principais.

## 5.1. Central de orientações

Crie uma seção de perguntas frequentes utilizando `details` e `summary`.

Requisitos:

- Apresente pelo menos cinco perguntas relacionadas à informática.
- Cada pergunta deverá possuir uma resposta.
- O usuário deverá conseguir expandir e recolher as respostas individualmente.

## 5.2. Comunicados e avisos

Crie uma área para apresentar pelo menos três comunicados do setor de TI.

Sugestões:

- Manutenção programada dos servidores.
- Atualização obrigatória de softwares.
- Indisponibilidade temporária de serviços.

Além dos comunicados, implemente uma janela de diálogo utilizando `dialog`.

Requisitos:

- Apresente um comunicado importante dentro da janela.
- Utilize o atributo `open` para exibi-la ao carregar a página.
- Inclua um botão que permita fechar a janela.
- Utilize `onclick` e o método `close()` para realizar o fechamento.

## 5.3. Informações sobre o suporte

Crie uma seção com informações sobre o funcionamento do setor de TI.

Inclua:

- Horários de atendimento.
- Canais de contato.
- Procedimentos para abertura de chamados.
- Orientações sobre o prazo de atendimento.
- Uma mensagem alternativa utilizando `noscript`.

---

# 6. Requisitos técnicos

- Utilize a estrutura básica do HTML5.
- Organize o documento com os elementos semânticos já estudados.
- Utilize todas as tags abordadas nesta atividade: `details`, `summary`, `dialog`, `script` e `noscript`.
- Utilize `details` e `summary` para as perguntas frequentes.
- Utilize `dialog` para apresentar um comunicado em formato de janela.
- Utilize `onclick` e `close()` para fechar a janela.
- Utilize `noscript` para apresentar uma mensagem alternativa.
- Não utilize CSS, bibliotecas externas ou recursos avançados de JavaScript.

# 7. Entrega

Salve a página como `index.html` e publique-a no repositório da atividade no GitHub.

A avaliação considerará:

- Utilização correta dos elementos HTML estudados.
- Organização semântica do documento.
- Clareza e organização das informações.
- Funcionamento dos conteúdos expansíveis.
- Funcionamento da janela de diálogo e do botão de fechamento.
- Utilização adequada da mensagem alternativa.