function marcarDestaque(button) {
    const buttons = document.querySelectorAll('.Botoesdedestaques button');
    buttons.forEach((btn) => btn.classList.remove('ativo'));
    button.classList.add('ativo');
    const categoriaSelecionada = button.textContent.trim();
    const cards = document.querySelectorAll('.cards');
    cards.forEach(function(card) {
        if (categoriaSelecionada === 'TODOS') {
            card.style.display = 'block';
        } else {
            if (card.getAttribute('data-categoria') === categoriaSelecionada) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        }
    });
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

function entrar(){
    const campo_de_recuperação = document.getElementById("email_esqueci").value;
    const checkbox = document.querySelector('#meuCheckbox input[type="checkbox"]');
    if (campo_de_recuperação !== "" && checkbox.checked){
        alert ("Email enviado, siga as instruções a seguir enviadas")
    }
    else{
        alert ("Erro, verifique o e-mail ou marque o campo obrigatório")
    }
}

function AjudaEnviarMensagem(){
    let nome = document.getElementById("NomeCompleto").value;
    let Assunto = document.getElementById("Assunto").value;
    let Resultado = document.getElementById("resultadoprecisadeajuda");
    if(nome == "" || Assunto == ""){
    Resultado.textContent = "Preencha todos os campos.";
    Resultado.style.color = "red"
    }else{
        Resultado.textContent = "Obrigado! Sua mensagem foi enviado com sucesso."
        Resultado.style.color = "green"
    }
}