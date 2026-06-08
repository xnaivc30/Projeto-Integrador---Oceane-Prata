// Marca o botão ativo e filtra os cards por categoria
function marcarDestaque(botaoClicado) {
  // Remove a classe ativo de todos os botões
  const botoes = document.querySelectorAll('.Botoesdedestaques button');
  botoes.forEach(btn => btn.classList.remove('ativo'));

  // Adiciona a classe ativo no botão clicado
  botaoClicado.classList.add('ativo');

  // Pega a categoria do botão (normaliza o texto)
  const categoria = botaoClicado.textContent.trim().toUpperCase();

  // Filtra os cards
  const cards = document.querySelectorAll('.cards');
  cards.forEach(card => {
    const cardCategoria = (card.dataset.categoria || '').toUpperCase();

    if (categoria === 'TODOS' || cardCategoria === categoria) {
      card.style.display = '';
      // Animação suave ao aparecer
      card.style.opacity = '0';
      card.style.transform = 'translateY(12px)';
      setTimeout(() => {
        card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
      }, 10);
    } else {
      card.style.display = 'none';
    }
  });
}

// Alterna o botão entre "Adicionar" e "Adicionado ✓"
function alterarBotao(botao) {
  if (botao.classList.contains('adicionado')) {
    botao.classList.remove('adicionado');
    botao.textContent = 'Adicionar';
  } else {
    botao.classList.add('adicionado');
    botao.textContent = 'Adicionado ✓';
  }
}

// Função do formulário de contato (WhatsApp)
function AjudaEnviarMensagem() {
  const nome = document.getElementById('NomeCompleto').value.trim();
  if (!nome) {
    alert('Por favor, preencha seu nome.');
    return;
  }
  const numero = '5511987654321'; // Substitua pelo número real
  const mensagem = encodeURIComponent(`Olá! Meu nome é ${nome}. Gostaria de mais informações.`);
  window.open(`https://wa.me/${numero}?text=${mensagem}`, '_blank');
}
