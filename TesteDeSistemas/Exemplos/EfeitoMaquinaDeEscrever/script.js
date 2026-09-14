function typeWriter(element) {
    const textoArray = element.innerHTML.split('');
    element.innerHTML = ' ';
    textoArray.forEach((letra, index) => {
        setTimeout(() => element.innerHTML += letra, 80 * index);
    });
}

const frase = document.querySelector('h1');
typeWriter(frase);