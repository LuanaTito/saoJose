// Menu Hamburguer
function clickMenu(){
    if(itens.style.display == 'block'){
        itens.style.display = 'none'
    }else{
        itens.style.display = 'block'
    }
}

// Validação do formulário
document.addEventListener('DOMContentLoaded', function() {
    const formContato = document.getElementById('form-contato');
    if (formContato) {
        formContato.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validações básicas
            const nome = document.getElementById('nome').value;
            const email = document.getElementById('email').value;
            const telefone = document.getElementById('telefone').value;
            const mensagem = document.getElementById('mensagem').value;
            
            if (!nome || !email || !telefone) {
                alert('Por favor, preencha todos os campos obrigatórios.');
                return;
            }
            
            // Simulação de envio
            alert('Obrigado pelo seu contato! Retornaremos em breve.');
            formContato.reset();
        });
    }
    
    // Máscara para telefone
    const telefoneInput = document.getElementById('telefone');
    if (telefoneInput) {
        telefoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 11) value = value.slice(0, 11);
            
            if (value.length > 0) {
                value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
                if (value.length > 10) {
                    value = value.replace(/(\d{5})(\d)/, '$1-$2');
                } else {
                    value = value.replace(/(\d{4})(\d)/, '$1-$2');
                }
            }
            
            e.target.value = value;
        });
    }
});