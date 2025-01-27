document.getElementById('formulario').addEventListener('submit', function(event) {
    event.preventDefault(); // Previne o envio padrão do formulário

    // Captura os dados do formulário
    const fullname = document.getElementById('fullname').value;
    const nickname = document.getElementById('nickname').value;
    const cpf = document.getElementById('cpf').value;
    const rg = document.getElementById('rg').value;
    const país = document.getElementById('país').value;
    // Exibe os dados no console (pode ser alterado para outra ação)
    console.log('Full-name:', fullname);
    console.log('Nickname', nickname);
    console.log('CPF:', cpf);
    console.log('RG:', rg);
    console.log('País:', país);

    // Exemplo de ação após o envio (pode ser substituído por uma requisição AJAX)
    alert('Formulário enviado com sucesso!');

    // Limpar o formulário após o envio
    document.getElementById('contactForm').reset();
});
