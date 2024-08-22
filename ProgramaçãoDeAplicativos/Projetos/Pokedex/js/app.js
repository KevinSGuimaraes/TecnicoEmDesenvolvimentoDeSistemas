// Declaração de variáveis
const pokedexElement = document.querySelector('.pokedex'); // Elemento onde os Pokémons serão exibidos

// Função para carregar e exibir os Pokémons no DOM
function loadPokedex(pokedex) {
  // Cria o HTML para cada Pokémon e junta em uma única string
  const view = pokedex
    .map(p => pokemonCard(p))
    .join('');
  
  // Atualiza o conteúdo do elemento pokédex com os cards dos Pokémons
  pokedexElement.innerHTML = view;
}

// Função para criar o HTML para o card de um Pokémon
function pokemonCard(pokemon) {
  const types = pokemon.type
    .map(t => `<span class="pokemon-type background-${t}">${t}</span>`) // Cria a representação HTML para os tipos do Pokémon
    .join(''); // Junta todos os tipos em uma única string
  
  const img = pokemon.name.replace(/['\.]/g, '').replace(/\s/g, '-'); // Formata o nome do Pokémon para o nome do arquivo da imagem
  
  // Retorna o HTML para o card do Pokémon
  return `<div class="pokemon" data-name="${pokemon.name}" data-type="${pokemon.type}" tabindex="${pokemon.id}">
      <figure class="pokemon-figure">
        <img src="img/${img.toLowerCase()}.png" alt="${pokemon.name}">
      </figure>
      <section class="pokemon-description">
        <span class="pokemon-id">#${Number(pokemon.id).toString().padStart(3, '0')}</span>
        <h1 class="pokemon-name">${pokemon.name}</h1>
        <div class="pokemon-types">${types}</div>
      </section>
      <section class="pokemon-stats">${loadStats(pokemon.stats)}</section>
    </div>`;
}

// Função para criar a representação HTML das estatísticas de um Pokémon
function loadStats(stats) {
  return Object.entries(stats)
    .filter(([name, value]) => !['total'].includes(name)) // Exclui estatísticas com o nome 'total'
    .map(([name, value]) =>
      `<div class="stat-row">
        <div>${name}</div>
        <div class="stat-bar">
          <div class="stat-bar-bg" style="width: ${100*value/250}%">${value}</div>
        </div>
      </div>`
    )
    .join(''); // Junta todas as estatísticas em uma única string
}

// Exemplo de como carregar os dados dos Pokémons
fetch('data/pokedex.json')
  .then(res => res.json()) // Converte a resposta em JSON
  .then(json => loadPokedex(json)) // Carrega e exibe os Pokémons
  .catch(error => console.error('Erro ao carregar o arquivo JSON:', error)); // Exibe erro se a requisição falhar
