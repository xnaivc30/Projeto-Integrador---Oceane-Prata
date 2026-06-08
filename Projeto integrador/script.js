function marcarDestaque(button) {
  const buttons = document.querySelectorAll('.Botoesdedestaques button');
  buttons.forEach((btn) => btn.classList.remove('ativo'));
  button.classList.add('ativo');
}

function alterarBotao(elementoClicado) {
    if (elementoClicado.classList.contains("adicionado")) return;
    elementoClicado.textContent = "✓";
    elementoClicado.classList.add("adicionado");
    setTimeout(() => {
        elementoClicado.textContent = "Adicionar";
        elementoClicado.classList.remove("adicionado");
        return; 
    }, 1000);
}

