# DESAFIO PRÁTICO --- DESENVOLVIMENTO DE UMA API REST COM NODE.JS E BANCO DE DADOS

**Tema:** Construção de uma API para gerenciamento de informações\
**Tecnologias sugeridas:** Node.js, Express.js e banco de dados
relacional\
**Prazo:** Apresentação na sexta-feira\
**Formato:** Desenvolvimento em equipes
------------------------------------------------------------------------

# 1. Contextualização

No desenvolvimento de sistemas modernos, diferentes aplicações precisam
compartilhar informações. Um aplicativo mobile pode consultar dados de
um servidor, um site pode cadastrar informações em um banco de dados e
um sistema administrativo pode atualizar registros.

Para possibilitar essa comunicação, utilizamos APIs (*Application
Programming Interfaces*).

Neste desafio, vocês deverão desenvolver uma API utilizando Node.js,
responsável por receber requisições, processar informações e realizar
operações em um banco de dados.

Vocês poderão utilizar ferramentas de inteligência artificial generativa
para auxiliar na implementação, pesquisar documentações e consultar
exemplos. Também está liberado o uso de ferramentas de *vibe coding*.

Entretanto, o objetivo principal não é apenas construir uma aplicação
funcional, mas compreender os conceitos e as decisões técnicas
envolvidos no desenvolvimento.

> **Atenção:** Na apresentação, vocês deverão demonstrar que compreendem
> aquilo que construíram. Saber gerar código com IA não significa
> necessariamente saber desenvolver ou compreender um sistema.

# 2. O desafio

Escolham um dos contextos abaixo e desenvolvam uma API para solucionar
um problema relacionado a ele.

## Opção A --- Sistema de gerenciamento de tarefas

Desenvolver uma API que permita cadastrar e administrar tarefas.

Possíveis informações: - Título da tarefa. - Descrição. - Data de
criação. - Prazo de conclusão. - Status (pendente, em andamento ou
concluída).

## Opção B --- Sistema de gerenciamento de produtos

Desenvolver uma API para administrar produtos de uma pequena loja.

Possíveis informações: - Nome do produto. - Descrição. - Preço. -
Quantidade em estoque. - Categoria.

## Opção C --- Sistema de gerenciamento de alunos

Desenvolver uma API para administrar informações de alunos de uma
instituição.

Possíveis informações: - Nome completo. - E-mail. - Curso. -
Matrícula. - Situação (ativo ou inativo).

## Opção D --- Sistema de gerenciamento de chamados

Desenvolver uma API para registrar e acompanhar solicitações de suporte
técnico.

Possíveis informações: - Nome do solicitante. - Título do chamado. -
Descrição do problema. - Prioridade. - Status do atendimento.

# 3. Requisitos técnicos obrigatórios

Independentemente do contexto escolhido, a API deverá implementar os
seguintes recursos.

## 3.1. Estrutura do projeto

-   Utilizar Node.js como ambiente de execução.
-   Utilizar Express.js para estruturar o servidor e gerenciar as rotas
    HTTP.
-   Organizar minimamente os arquivos do projeto.
-   Utilizar `package.json` para gerenciar as dependências.
-   Utilizar variáveis de ambiente para armazenar configurações
    sensíveis, quando aplicável.

## 3.2. Conexão com banco de dados

A aplicação deverá possuir conexão com um banco de dados e utilizar essa
conexão para armazenar e consultar informações.

Requisitos: - Criar a estrutura necessária para armazenar os
registros. - Implementar a conexão entre Node.js e o banco de dados. -
Inserir informações no banco. - Consultar informações armazenadas. -
Atualizar registros. - Excluir registros.

O banco deverá ser persistente: as informações não poderão existir
apenas em variáveis na memória da aplicação.

**Bancos sugeridos:** PostgreSQL ou MySQL. Caso a turma já esteja
utilizando outro banco relacional, conversem com o professor antes de
adotá-lo.

## 3.3. Operações da API (CRUD)

A API deverá implementar as quatro operações fundamentais de manipulação
de dados:

  Operação   Método HTTP    Finalidade
  ---------- -------------- ----------------------------
  Create     POST           Cadastrar um novo registro
  Read       GET            Consultar registros
  Update     PUT ou PATCH   Atualizar um registro
  Delete     DELETE         Excluir um registro

Exemplo de rotas para uma API de tarefas:

  Método   Rota           Funcionamento
  -------- -------------- ---------------------------------
  GET      `/tarefas`     Listar todas as tarefas
  GET      `/tarefas/1`   Consultar uma tarefa específica
  POST     `/tarefas`     Cadastrar uma tarefa
  PUT      `/tarefas/1`   Atualizar uma tarefa
  DELETE   `/tarefas/1`   Excluir uma tarefa

As rotas são exemplos. Adaptem-nas ao contexto escolhido.

## 3.4. Comunicação por JSON

A API deverá receber e retornar informações no formato JSON.

Exemplo de envio de dados para cadastrar uma tarefa:

``` json
{
  "titulo": "Estudar Node.js",
  "descricao": "Aprender a desenvolver APIs REST",
  "status": "pendente"
}
```

Exemplo de resposta do servidor:

``` json
{
  "mensagem": "Tarefa cadastrada com sucesso",
  "id": 1
}
```

## 3.5. Tratamento de erros

A aplicação deverá prever situações como:

-   Tentativa de consultar um registro inexistente.
-   Envio de informações obrigatórias vazias.
-   Dados inválidos.
-   Falha na conexão com o banco de dados.
-   Tentativa de executar uma operação que não pode ser realizada.

A API deverá retornar respostas HTTP coerentes com cada situação, em vez
de simplesmente apresentar erros inesperados.

# 4. Conceitos que deverão ser compreendidos

Durante o desenvolvimento, pesquisem e compreendam os seguintes
conceitos. Não basta copiar definições: relacionem cada conceito com
aquilo que implementaram.

1.  **Node.js:** O que é? Qual sua finalidade? Por que utilizá-lo no
    desenvolvimento de aplicações de servidor?
2.  **Express.js:** O que é um framework? Como o Express facilita a
    criação de servidores e APIs?
3.  **API:** O que é uma API? Como duas aplicações diferentes conseguem
    se comunicar?
4.  **API REST:** O que caracteriza uma API REST? Qual a relação entre
    recursos, rotas e métodos HTTP?
5.  **HTTP:** Qual a diferença entre GET, POST, PUT, PATCH e DELETE?
6.  **JSON:** O que é? Por que é tão utilizado na comunicação entre
    aplicações?
7.  **Requisição e resposta:** O que acontece desde o momento em que um
    cliente envia uma requisição até receber uma resposta do servidor?
8.  **Banco de dados:** Como a API estabelece uma conexão com o banco?
    Como os dados são inseridos, consultados, atualizados e excluídos?
9.  **Rotas:** O que são endpoints? Qual a função de cada rota?
10. **Status HTTP:** Qual a diferença entre os códigos 200, 201, 204,
    400, 404 e 500?
11. **Middleware:** O que é? Qual sua função dentro do Express?
12. **Async/Await:** Por que operações com banco de dados normalmente
    utilizam processamento assíncrono?

# 5. Testes da API

Uma API não precisa necessariamente possuir uma interface visual para
funcionar.

Utilizem uma ferramenta de testes, como Postman ou Insomnia, para
realizar requisições e verificar o comportamento da aplicação.

Será necessário demonstrar:

-   Uma requisição GET retornando os registros.
-   Uma requisição POST cadastrando um registro.
-   Uma requisição PUT ou PATCH atualizando um registro.
-   Uma requisição DELETE excluindo um registro.
-   Pelo menos uma situação de erro sendo tratada corretamente.
-   Que os dados realmente estão sendo armazenados no banco de dados.

# 6. Entregáveis

Até a apresentação, a equipe deverá organizar:

1.  **Projeto funcional:** arquivos da aplicação e instruções para
    executá-la.
2.  **Banco de dados:** script SQL ou instruções para criar tabelas e
    estrutura necessária.
3.  **Documentação:** arquivo README com objetivo, tecnologias,
    instalação, configuração, execução e endpoints.
4.  **Testes:** coleção do Postman/Insomnia ou roteiro documentado com
    requisições e respostas.
5.  **Diagrama de funcionamento:** representação do caminho de uma
    requisição, desde o cliente até o banco de dados e a resposta.
6.  **Apresentação técnica:** demonstração e explicação da solução.

Não incluam senhas, tokens ou credenciais reais no repositório. Usem um
arquivo `.env` local e disponibilizem um `.env.example` sem valores
secretos.

# 7. Apresentação técnica --- sexta-feira

A apresentação será a principal etapa de avaliação.

Não basta abrir o código e ler o que cada linha faz. Expliquem como a
aplicação funciona, quais decisões foram tomadas e quais conceitos estão
envolvidos.

## 7.1. Problema escolhido

-   Qual problema a aplicação pretende resolver?
-   Quem utilizaria essa API?
-   Por que escolheram esse contexto?

## 7.2. Arquitetura e funcionamento

-   Como o projeto foi organizado?
-   Como Node.js e Express participam da aplicação?
-   Como acontece a comunicação entre cliente e servidor?
-   Como a API se conecta ao banco de dados?

## 7.3. Funcionamento das requisições

-   Demonstrar os métodos GET, POST, PUT/PATCH e DELETE.
-   Explicar o que acontece em cada requisição.
-   Explicar quais informações são enviadas e quais respostas são
    recebidas.
-   Justificar a utilização de cada método HTTP.

## 7.4. Banco de dados

-   Demonstrar a estrutura das tabelas.
-   Explicar como os dados são armazenados.
-   Demonstrar a persistência das informações.
-   Explicar como a aplicação realiza consultas e alterações.

## 7.5. Decisões técnicas

-   Quais bibliotecas foram utilizadas?
-   Qual a função de cada dependência importante?
-   Como foram tratados erros e dados inválidos?
-   Quais dificuldades encontraram durante o desenvolvimento?
-   Quais partes foram desenvolvidas com auxílio de IA e como foram
    validadas?

## 7.6. Demonstração prática

-   Executar a aplicação.
-   Realizar requisições utilizando Postman ou Insomnia.
-   Demonstrar os registros no banco de dados.
-   Mostrar pelo menos um tratamento de erro.

**Todos os integrantes poderão ser questionados individualmente.** Cada
pessoa deverá conhecer a solução e conseguir explicar pelo menos o fluxo
geral da aplicação e as partes pelas quais ficou responsável.

# 8. Critérios de avaliação

A avaliação considerará principalmente a compreensão técnica da solução,
e não a quantidade de código produzido.

  Critério                                           Pontuação
  ------------------------------------------------ -----------
  Aplicação funcional e requisitos implementados           2,0
  Compreensão de Node.js, Express e API REST               2,0
  Domínio dos métodos HTTP e das requisições               2,0
  Compreensão da conexão e manipulação do banco            2,0
  Clareza, domínio e qualidade da apresentação             2,0
  **Total**                                           **10,0**

Uma aplicação visualmente sofisticada, com muitas funcionalidades, não
garante uma boa avaliação. Uma solução simples, mas bem compreendida e
tecnicamente explicada, terá muito mais valor.

# 9. Ferramentas de IA para desenvolver o projeto

Vocês podem escolher as ferramentas com as quais se sentirem mais
confortáveis. Algumas permitem trabalhar diretamente nos arquivos do
projeto; outras funcionam principalmente por conversação.

## 9.1. Editores e ambientes com IA integrada

  -------------------------------------------------------------------------------------
  Ferramenta              Para que pode ser       Site
                          utilizada               
  ----------------------- ----------------------- -------------------------------------
  **Cursor**              Editor de código com IA https://cursor.com/
                          capaz de analisar,      
                          criar e modificar       
                          arquivos do projeto.    

  **Windsurf**            IDE com agente de IA    https://windsurf.com/
                          para compreender o      
                          projeto e auxiliar na   
                          implementação.          

  **Replit**              Ambiente online para    https://replit.com/
                          criar, executar e       
                          testar aplicações sem   
                          configurar todo o       
                          ambiente local.         

  **GitHub Copilot**      Assistente integrado a  https://github.com/features/copilot
                          editores, útil para     
                          gerar funções, explicar 
                          trechos e auxiliar na   
                          programação.            
  -------------------------------------------------------------------------------------

## 9.2. Ferramentas de geração de aplicações

  -----------------------------------------------------------------------
  Ferramenta              Para que pode ser       Site
                          utilizada               
  ----------------------- ----------------------- -----------------------
  **Bolt.new**            Gerar projetos a partir https://bolt.new/
                          de descrições em        
                          linguagem natural, com  
                          possibilidade de        
                          execução no navegador.  

  **Lovable**             Criar aplicações        https://lovable.dev/
                          completas a partir de   
                          instruções,             
                          especialmente projetos  
                          com interface visual e  
                          backend.                
  -----------------------------------------------------------------------

**Atenção:** Bolt e Lovable podem priorizar a construção de interfaces e
aplicações completas. Como o desafio é especificamente uma API REST,
verifiquem se o resultado realmente possui um backend Node.js/Express e
uma conexão funcional com banco de dados, e não apenas uma interface
simulando operações.

## 9.3. Assistentes conversacionais

  ----------------------------------------------------------------------------
  Ferramenta              Para que pode ser       Site
                          utilizada               
  ----------------------- ----------------------- ----------------------------
  **ChatGPT**             Gerar código, explicar  https://chatgpt.com/
                          implementações,         
                          encontrar erros e       
                          estudar conceitos.      

  **Claude**              Analisar projetos com   https://claude.ai/
                          vários arquivos,        
                          revisar código e        
                          explicar arquitetura.   

  **Google Gemini**       Pesquisar documentação, https://gemini.google.com/
                          gerar código e          
                          compreender conceitos   
                          técnicos.               
  ----------------------------------------------------------------------------

> **Dica:** não é necessário utilizar todas as ferramentas. Escolham uma
> ou duas e aprendam a utilizá-las bem.

# 10. Catálogo de prompts para Vibe Coding

Os prompts abaixo são pontos de partida. Substituam os trechos entre
colchetes pelas informações do projeto de vocês e adaptem as instruções
conforme a necessidade.

Não é obrigatório utilizar todos. O objetivo é orientar a interação com
a IA durante as diferentes etapas do desenvolvimento.

## Etapa 1 --- Planejamento

### Prompt 01 --- Transformando uma ideia em projeto

``` text
Quero desenvolver uma API REST utilizando Node.js e Express.js
para um projeto acadêmico.

Minha ideia inicial é: [DESCREVA SUA IDEIA].

Antes de começar a programar, quero que você atue como um
analista de sistemas e me ajude a estruturar o projeto.

Apresente:
1. Qual problema o sistema resolve.
2. Quem serão seus usuários.
3. Quais funcionalidades serão necessárias.
4. Quais informações deverão ser armazenadas.
5. Quais tabelas deverão existir no banco de dados.
6. Quais relacionamentos existirão entre elas.
7. Quais endpoints deverão ser implementados.
8. Quais métodos HTTP serão utilizados.

Não gere código ainda. Primeiro quero entender e planejar a solução.
```

### Prompt 02 --- Definindo a arquitetura

``` text
Com base no projeto que planejamos, quero definir uma arquitetura
para nossa API REST utilizando Node.js e Express.js.

Sugira uma estrutura de diretórios organizada, separando
responsabilidades como:
- Rotas (routes).
- Controladores (controllers).
- Conexão com banco de dados.
- Serviços (services), se necessário.
- Middlewares.
- Configurações.
- Arquivo principal do servidor.

Explique a responsabilidade de cada diretório e arquivo.

Quero uma arquitetura organizada, mas sem complexidade
desnecessária para um projeto acadêmico.

Não implemente tudo ainda. Primeiro apresente a estrutura
e explique as decisões.
```

## Etapa 2 --- Criando o projeto

### Prompt 03 --- Inicializando o Node.js

``` text
Vamos iniciar o projeto utilizando Node.js e Express.js.

Preciso que você me oriente na configuração inicial.

Quero:
1. Inicializar o projeto Node.js.
2. Configurar o package.json.
3. Instalar as dependências necessárias.
4. Criar o servidor Express.
5. Configurar a porta de execução.
6. Criar uma rota inicial GET / para verificar se o servidor
   está funcionando.

Explique cada comando utilizado e a finalidade de cada
dependência instalada.

Não instale bibliotecas sem necessidade. Apresente primeiro
os comandos e depois a implementação.
```

### Prompt 04 --- Configurando o banco de dados

``` text
Agora precisamos conectar nossa API ao banco de dados.

Utilizaremos [POSTGRESQL OU MYSQL].

Quero que você:
1. Explique como instalar e configurar a conexão.
2. Crie o arquivo responsável pela conexão.
3. Utilize variáveis de ambiente para as credenciais.
4. Configure o acesso ao banco utilizando uma biblioteca apropriada.
5. Implemente uma forma de verificar se a conexão está funcionando.
6. Explique como tratar possíveis falhas de conexão.

Apresente exemplos e explique o funcionamento de cada etapa.

Não utilize dados fictícios de conexão como se fossem
credenciais reais. Utilize variáveis de ambiente.
```

## Etapa 3 --- Implementando as funcionalidades

### Prompt 05 --- Criando a primeira rota GET

``` text
Quero implementar a primeira funcionalidade da minha API:
listar todos os registros de [NOME DA ENTIDADE].

Crie um endpoint GET /[NOME DA ROTA] que consulte os registros
no banco de dados.

Explique:
1. Como a requisição chega ao Express.
2. Como a rota é identificada.
3. Como o controlador é executado.
4. Como a consulta SQL é realizada.
5. Como os resultados são retornados em JSON.
6. Qual status HTTP deve ser utilizado.

Implemente seguindo a arquitetura que definimos anteriormente.
```

### Prompt 06 --- Implementando o POST

``` text
Agora quero implementar o cadastro de novos registros
na minha API.

Crie um endpoint POST /[NOME DA ROTA].

O endpoint deverá:
1. Receber os dados no formato JSON.
2. Validar os campos obrigatórios.
3. Verificar se os dados possuem formato adequado.
4. Inserir as informações no banco de dados.
5. Retornar uma resposta informando o resultado da operação.

Explique o funcionamento de req.body, como o Express interpreta
o JSON e como os dados chegam à consulta SQL.

Utilize consultas parametrizadas para evitar SQL Injection.

Explique também por que utilizamos POST em vez de GET
para essa operação.
```

### Prompt 07 --- Implementando PUT e PATCH

``` text
Quero implementar a atualização de registros da minha API.

Crie os endpoints PUT /[NOME DA ROTA]/:id e
PATCH /[NOME DA ROTA]/:id.

Explique detalhadamente:
1. A diferença entre PUT e PATCH.
2. O que significa o parâmetro :id.
3. Como acessar parâmetros utilizando req.params.
4. Como receber os dados utilizando req.body.
5. Como localizar o registro no banco.
6. Como atualizar os dados.
7. Como responder quando o registro não existe.

Demonstre a diferença prática entre uma atualização completa
e uma atualização parcial.

Utilize consultas parametrizadas.
```

### Prompt 08 --- Implementando DELETE

``` text
Quero implementar a exclusão de registros da minha API.

Crie um endpoint DELETE /[NOME DA ROTA]/:id.

O endpoint deverá:
1. Receber o identificador do registro.
2. Verificar se o registro existe.
3. Executar a exclusão no banco de dados.
4. Retornar uma resposta adequada.
5. Tratar situações em que o registro não existe.

Explique o funcionamento do método DELETE, do req.params
e da consulta SQL utilizada.

Utilize consultas parametrizadas.
```

## Etapa 4 --- Melhorando a qualidade da API

### Prompt 09 --- Tratamento de erros

``` text
Quero melhorar o tratamento de erros da minha API.

Analise os endpoints existentes e identifique possíveis
situações problemáticas.

Implemente tratamentos para:
- Dados obrigatórios não informados.
- Identificadores inválidos.
- Registros inexistentes.
- Erros de banco de dados.
- Requisições malformadas.
- Erros inesperados no servidor.

Explique a diferença entre os principais códigos HTTP utilizados,
especialmente 200, 201, 204, 400, 404, 409 e 500.

Quero que as respostas da API sejam claras e consistentes.
```

### Prompt 10 --- Criando um middleware

``` text
Quero compreender e implementar middlewares na minha API Express.

Primeiro, explique:
1. O que é um middleware?
2. Em que momento ele é executado?
3. O que são req, res e next?
4. Qual a diferença entre um middleware e um controlador?

Depois, implemente um middleware de registro de requisições
(logging), que registre:
- Método HTTP.
- Endpoint acessado.
- Data e horário.
- Status da resposta.

Explique como ele se integra às rotas da aplicação.
```

### Prompt 11 --- Segurança básica

``` text
Faça uma análise de segurança básica da minha API Node.js.

Verifique:
- Possibilidade de SQL Injection.
- Uso de consultas parametrizadas.
- Exposição de credenciais.
- Utilização de variáveis de ambiente.
- Validação dos dados recebidos.
- Exposição desnecessária de informações nos erros.
- Possíveis problemas na conexão com o banco.

Apresente os problemas encontrados, explique os riscos
e sugira correções.

Não altere o projeto automaticamente sem antes explicar
o que precisa ser corrigido.
```

## Etapa 5 --- Testando e documentando

### Prompt 12 --- Criando testes no Postman

``` text
Analise os endpoints implementados na minha API e monte
um roteiro de testes para o Postman.

Para cada endpoint, apresente:
1. Método HTTP.
2. URL.
3. Headers necessários.
4. Body JSON, quando necessário.
5. Resultado esperado.
6. Status HTTP esperado.

Inclua testes de sucesso e de falha.

Quero verificar se todas as operações CRUD estão funcionando
corretamente e se os dados realmente estão sendo persistidos
no banco de dados.

Não invente rotas. Utilize apenas as rotas existentes no projeto.
```

### Prompt 13 --- Gerando documentação da API

``` text
Quero criar uma documentação técnica da minha API REST.

Analise a implementação existente e gere uma documentação
em Markdown contendo:

1. Nome e objetivo da aplicação.
2. Tecnologias utilizadas.
3. Instruções de instalação.
4. Como configurar as variáveis de ambiente.
5. Como executar o projeto.
6. Como configurar o banco de dados.
7. Lista de todos os endpoints.
8. Métodos HTTP de cada endpoint.
9. Parâmetros necessários.
10. Exemplos de requisições JSON.
11. Exemplos de respostas JSON.
12. Códigos HTTP retornados.
13. Possíveis erros.

A documentação deve refletir o código realmente implementado.
Não invente funcionalidades que não existem.
```

## Etapa 6 --- Preparando a apresentação

### Prompt 14 --- Professor particular para entender o código

``` text
Quero que você atue como um professor de desenvolvimento
de software.

Estou desenvolvendo uma API REST utilizando Node.js,
Express.js e banco de dados.

Vou fornecer os arquivos do meu projeto e quero que você
me ensine como ele funciona.

Não quero apenas um resumo do código.

Quero compreender:
1. A arquitetura geral do projeto.
2. O fluxo de execução da aplicação.
3. Como uma requisição HTTP é recebida.
4. Como as rotas são processadas.
5. Como os controladores funcionam.
6. Como ocorre a comunicação com o banco de dados.
7. Como os resultados são retornados ao cliente.
8. O papel de cada biblioteca utilizada.

Explique os conceitos relacionando-os diretamente aos arquivos
do meu projeto.

Ao final, faça perguntas técnicas sobre a implementação,
uma por vez, como se estivesse me avaliando em uma
apresentação acadêmica.

Não entregue a resposta imediatamente. Aguarde minha tentativa
e depois corrija minhas respostas, explicando o que preciso melhorar.
```

### Prompt 15 --- Simulação de banca avaliadora

``` text
Quero que você simule uma banca avaliadora de um projeto
acadêmico de desenvolvimento de API REST.

Considere que desenvolvi uma API utilizando Node.js,
Express.js e banco de dados relacional.

Faça perguntas técnicas que poderiam ser realizadas
durante uma apresentação.

Inclua perguntas sobre:
- Arquitetura REST.
- Métodos HTTP.
- Endpoints.
- Requisições e respostas.
- JSON.
- Express.
- Middlewares.
- Async/Await.
- Conexão com banco de dados.
- SQL.
- Tratamento de erros.
- Segurança.

Faça uma pergunta por vez.

Após minha resposta, avalie se demonstrei compreensão real
do conceito, corrija eventuais equívocos e apresente
uma explicação técnica.

Aumente gradualmente a dificuldade das perguntas.
```

### Prompt 16 --- Quando a IA faz algo que você não entende

``` text
Você acabou de implementar uma funcionalidade no meu projeto,
mas eu não compreendi completamente o código gerado.

Quero que você explique a implementação como se estivesse
ensinando um desenvolvedor iniciante.

Para cada parte:
1. Explique o que ela faz.
2. Explique por que ela é necessária.
3. Explique o que aconteceria se ela fosse removida.
4. Explique como ela se comunica com as outras partes do sistema.
5. Apresente um exemplo prático de execução.

Não simplifique excessivamente os conceitos técnicos.

Meu objetivo é conseguir explicar essa implementação para
outra pessoa sem depender da IA.
```

# 11. Exemplo de fluxo de uma requisição

Para compreender como as partes de uma API se comunicam, observem o
exemplo abaixo. Ele representa o cadastro de uma tarefa por meio de uma
requisição POST.

``` text
┌─────────────────────────────┐
│       Cliente / Postman     │
│                             │
│ Envia POST /tarefas         │
│ com os dados em JSON        │
└──────────────┬──────────────┘
               │
               ▼
┌─────────────────────────────┐
│    Servidor Node.js +       │
│          Express            │
│                             │
│ Recebe e interpreta         │
│ a requisição                │
└──────────────┬──────────────┘
               │
               ▼
┌─────────────────────────────┐
│       Rota / Controller     │
│                             │
│ Valida e processa os dados  │
└──────────────┬──────────────┘
               │
               ▼
┌─────────────────────────────┐
│        Banco de dados       │
│                             │
│ Executa INSERT e armazena   │
│ o registro                  │
└──────────────┬──────────────┘
               │
               ▼
┌─────────────────────────────┐
│        Resposta HTTP        │
│                             │
│ Retorna status 201 e JSON   │
│ ao cliente                  │
└─────────────────────────────┘
```

Durante a apresentação, vocês deverão conseguir explicar cada uma dessas
etapas e relacioná-las com os arquivos e funções existentes no projeto.

# 12. Desafio surpresa --- alteração durante a apresentação

Depois que a equipe demonstrar que sua API está funcionando, o professor
poderá solicitar uma pequena alteração.

Exemplos: - Adicionar um novo campo à entidade. - Criar um filtro por
status. - Criar uma rota para buscar registros por nome. - Impedir o
cadastro de e-mails duplicados. - Alterar a resposta de uma
requisição. - Criar uma validação adicional.

Vocês poderão utilizar IA para implementar a alteração, mas precisarão
explicar o que foi modificado e por quê.

O objetivo é verificar se sabem conduzir a IA e compreender o impacto
das alterações, em vez de apenas apresentar um projeto pronto.

# 13. Regras de ouro do Vibe Coding

1.  **Não peça tudo de uma vez.** Divida o desenvolvimento em etapas.
2.  **Não aceite tudo que a IA gerar.** Analise, execute e teste.
3.  **Peça explicações.** Se não entendeu uma função, pergunte antes de
    continuar.
4.  **Valide o resultado.** Código gerado não significa código correto.
5.  **Não confie cegamente nos testes da IA.** Faça suas próprias
    requisições no Postman ou Insomnia.
6.  **Não compartilhe credenciais reais.** Utilize variáveis de ambiente
    e dados fictícios.
7.  **Conheça o que será apresentado.** Qualquer integrante poderá ser
    questionado sobre qualquer parte do projeto.
8.  **Registre as decisões.** Saibam explicar quais ferramentas foram
    utilizadas, quais sugestões foram aceitas e o que precisou ser
    corrigido.

# 14. Perguntas que vocês devem saber responder

Utilizem estas perguntas para verificar se realmente compreenderam a
aplicação:

-   Se eu alterar GET para POST nessa rota, o que muda?
-   Qual a diferença entre uma rota e um método HTTP?
-   O que acontece se o servidor receber um JSON inválido?
-   Por que precisamos de um banco de dados se já temos as informações
    no Node.js?
-   O que é `async/await`?
-   Se desligarmos o servidor e ligarmos novamente, os dados continuam
    existindo? Por quê?
-   Qual é a função do Express nessa aplicação?
-   Como a API identifica qual registro deverá ser atualizado?
-   O que acontece quando uma consulta SQL falha?
-   Como vocês verificaram que a API realmente está salvando os dados?

# 15. Reflexão final

Durante o desenvolvimento de software, utilizar ferramentas para
acelerar o trabalho é uma habilidade importante. Entretanto, um
profissional de desenvolvimento precisa compreender as soluções que
utiliza.

Imagine que você foi contratado para desenvolver uma API e, durante uma
reunião, alguém pergunta:

-   Por que você utilizou POST em vez de GET?
-   Como essa requisição chega ao servidor?
-   Como os dados são inseridos no banco?
-   O que acontece se o banco de dados estiver indisponível?
-   Como você sabe que a operação foi executada corretamente?

Você precisa ser capaz de responder a essas perguntas.

**O objetivo deste desafio é justamente desenvolver essa capacidade:
utilizar as ferramentas disponíveis, construir soluções e,
principalmente, compreender a tecnologia por trás delas.**

Não estamos avaliando quem consegue escrever mais código ou quem utiliza
a IA mais sofisticada. Estamos avaliando quem consegue utilizar
ferramentas modernas para construir, testar, explicar e justificar uma
solução de software.
