/* =====================================================
   OCEANE PRATA — script.js (Atualização Responsiva)
   Adicionado: toggle do menu hambúrguer, trava de scroll, clique fora
   ===================================================== */

/* ---- Botões de filtro de produtos ---- */
function marcarDestaque(button) {
  const buttons = document.querySelectorAll('.Botoesdedestaques button');
  buttons.forEach((btn) => btn.classList.remove('ativo'));
  button.classList.add('ativo');

  const categoriaSelecionada = button.textContent.trim();
  const cards = document.querySelectorAll('.cards');

  cards.forEach(function (card) {
    if (categoriaSelecionada === 'TODOS') {
      card.style.display = '';
    } else {
      card.style.display =
        card.getAttribute('data-categoria') === categoriaSelecionada
          ? ''
          : 'none';
    }
  });
}

/* ---- Feedback do botão adicionar ao carrinho ---- */
function alterarBotao(elementoClicado) {
  if (elementoClicado.classList.contains('adicionado')) return;
  elementoClicado.textContent = '✓';
  elementoClicado.classList.add('adicionado');
  setTimeout(() => {
    elementoClicado.textContent = 'Adicionar';
    elementoClicado.classList.remove('adicionado');
  }, 1000);
}

/* ---- Página esqueci a senha (esqueci.html) ---- */
function entrar() {
  const campo = document.getElementById('email_esqueci');
  if (!campo) return;
  const valor = campo.value;
  const checkbox = document.querySelector('#meuCheckbox input[type="checkbox"]');
  if (valor !== '' && checkbox && checkbox.checked) {
    alert('Email enviado, siga as instruções a seguir enviadas');
  } else {
    alert('Erro, verifique o e-mail ou marque o campo obrigatório');
  }
}

/* ---- Auxiliar do formulário de contato WhatsApp ---- */
function AjudaEnviarMensagem() {
  const nome = document.getElementById('NomeCompleto').value;
  const assunto = document.getElementById('Assunto').value;
  const resultado = document.getElementById('resultadoprecisadeajuda');

  if (nome === '' || assunto === '') {
    resultado.textContent = 'Preencha todos os campos.';
    resultado.style.color = 'red';
  } else {
    resultado.textContent = 'Obrigado! Sua mensagem foi enviada com sucesso.';
    resultado.style.color = 'green';
  }
}

/* ====================================================
   NAVEGAÇÃO HAMBÚRGUER — responsiva para celular
   ==================================================== */
document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.getElementById('navToggle');
  const nav = document.getElementById('mainNav');
  const overlay = document.getElementById('navOverlay');

  if (!toggle || !nav) return; // elementos só existem quando header.php está incluído

  function openNav() {
    toggle.classList.add('aberto');
    nav.classList.add('aberta');
    if (overlay) overlay.classList.add('visivel');
    document.body.style.overflow = 'hidden'; // evitar scroll do fundo
    toggle.setAttribute('aria-expanded', 'true');
  }

  function closeNav() {
    toggle.classList.remove('aberto');
    nav.classList.remove('aberta');
    if (overlay) overlay.classList.remove('visivel');
    document.body.style.overflow = '';
    toggle.setAttribute('aria-expanded', 'false');
  }

  toggle.addEventListener('click', function () {
    const isOpen = nav.classList.contains('aberta');
    isOpen ? closeNav() : openNav();
  });

  // Fechar nav quando o overlay (fundo) é clicado
  if (overlay) {
    overlay.addEventListener('click', closeNav);
  }

  // Fechar nav ao clicar em link interno (âncoras de página única)
  nav.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', closeNav);
  });

  // Fechar nav com tecla Escape
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeNav();
  });

  // Fechar nav se a janela for redimensionada para largura desktop
  window.addEventListener('resize', function () {
    if (window.innerWidth >= 768) closeNav();
  });
});
