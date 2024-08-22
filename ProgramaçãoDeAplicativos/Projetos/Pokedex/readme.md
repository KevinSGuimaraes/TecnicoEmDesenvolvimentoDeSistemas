# Título: Desenvolvimento de uma Pokédex com HTML5, CSS3, JavaScript e JSON

## Objetivo
Criar uma Pokédex interativa utilizando HTML5, CSS3 e JavaScript, com dados armazenados em um arquivo JSON. A aplicação deve permitir visualizar informações sobre Pokémon e incluir efeitos visuais.

## Descrição do Trabalho
Você deverá desenvolver uma Pokédex que atenda aos seguintes requisitos:

1. **Estrutura HTML5:**
   - Criação de uma página HTML que exiba uma lista de Pokémon utilizando os dados provenientes de um arquivo JSON.
   ```
   Exemplo de HTML para montar a Section:
   
   <section class="pokemon-description">
        <span class="pokemon-id">#001</span>
        <h1 class="pokemon-name">Bulbasaur</h1>
        <div class="pokemon-types"><span class="pokemon-type background-grass">grass</span><span class="pokemon-type background-poison">poison</span></div>
      </section>
      <section class="pokemon-stats"><div class="stat-row">
        <div>hp</div>
        <div class="stat-bar">
          <div class="stat-bar-bg" style="width: 18%">45</div>
        </div>
      </div><div class="stat-row">
        <div>attack</div>
        <div class="stat-bar">
          <div class="stat-bar-bg" style="width: 19.6%">49</div>
        </div>
      </div><div class="stat-row">
        <div>defense</div>
        <div class="stat-bar">
          <div class="stat-bar-bg" style="width: 19.6%">49</div>
        </div>
      </div><div class="stat-row">
        <div>sp-atk</div>
        <div class="stat-bar">
          <div class="stat-bar-bg" style="width: 26%">65</div>
        </div>
      </div><div class="stat-row">
        <div>sp-def</div>
        <div class="stat-bar">
          <div class="stat-bar-bg" style="width: 26%">65</div>
        </div>
      </div><div class="stat-row">
        <div>speed</div>
        <div class="stat-bar">
          <div class="stat-bar-bg" style="width: 18%">45</div>
        </div>
      </div>
	</section>
    </div>

   ```

2. **Estilização com CSS3:**
   - Utilização de CSS para estilizar a página de forma atraente, conforme o layout mostrado na imagem de exemplo.
   ![Exemplo](images/Exemplo.png)
   - Implementação de efeitos de hover e ou focus para mudar a imagem do Pokémon quando o usuário passar o mouse sobre ela.
   - Criação de animações simples para dar feedback visual ao usuário ao interagir com a Pokédex.

3. **Interatividade com JavaScript:**
   - Leitura dos dados dos Pokémon a partir de um arquivo JSON e exibição dinâmica na página.
   - Implementação de JavaScript para manipular o DOM e atualizar a lista de Pokémon conforme necessário.
   - Modularização do código JavaScript, organizando-o em arquivos separados e utilizando boas práticas de programação (funções bem definidas, uso de variáveis locais, etc.).

## Requisitos Adicionais
- **Documentação do Código:** Todos os arquivos JavaScript devem conter comentários explicativos para cada função e bloco de código importante.
- **Estrutura de Pastas:** O projeto deve estar organizado em pastas, sendo que a estrutura mínima deve incluir diretórios para `css`, `js`, `images` e `data`.
- **Boas Práticas:** A implementação deve seguir as boas práticas de codificação, incluindo nomes de variáveis e funções claros, uso de indentação adequada e comentários explicativos.

## Entrega
1. **GitHub:** Crie um repositório no GitHub com o nome `ProjetoPokedex` e configure um diretório para o trabalho, onde todos os arquivos devem ser armazenados.
2. **Readme:** Inclua um arquivo `README.md` no repositório com instruções de uso, descrição do projeto e um breve relato sobre as decisões de design e implementação.
3. **Prazo:** O trabalho deve ser concluído e enviado até o final da quarta hora de aula. Certifique-se de fazer o commit e push de todas as alterações antes do prazo.

## Avaliação
O trabalho será avaliado com base nos seguintes critérios:
- Correção e completude das funcionalidades implementadas.
- Estruturação e organização do código.
- Uso apropriado de HTML5, CSS3, JavaScript e JSON.
- Implementação dos efeitos visuais e interatividade.
- Modularização e boas práticas de programação.
- Qualidade dos comentários e documentação.

## Observação
A responsividade não será um critério de avaliação neste trabalho, mas a aplicação deve ser funcional e visualmente agradável.

Boa sorte!
