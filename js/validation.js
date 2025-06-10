document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.getElementById('name');
            const phone = document.getElementById('phone');
            const datanascimento = document.getElementById('datanascimento');
            const NosEncontrouPorOn = document.getElementById('NosEncontrouPorOn');
            const email = document.getElementById('email');
            const message = document.getElementById('message');

            // Reset error states
            clearErrors();

            let isValid = true;

            // Name validation
            if (name.value.trim().length < 2) {
                showError(name, 'Nome deve ter pelo menos 2 caracteres');
                isValid = false;
            }

            // Phone validation
            const phoneRegex = /^\(?[1-9]{2}\)? ?(?:[2-8]|9[1-9])[0-9]{3}\-?[0-9]{4}$/;
            if (!phoneRegex.test(phone.value.trim())) {
                showError(phone, 'Por favor, insira um telefone válido (ex: (11) 98765-4321)');
                isValid = false;
            }

            // Data de nascimento validation
            const hoje = new Date();
            const dataNasc = new Date(datanascimento.value);
            const idade = hoje.getFullYear() - dataNasc.getFullYear();

            if (!datanascimento.value) {
                showError(datanascimento, 'Por favor, insira sua data de nascimento');
                isValid = false;
            } else if (idade < 18 || idade > 100 || isNaN(idade)) {
                showError(datanascimento, 'Você deve ter entre 18 e 100 anos');
                isValid = false;
            }

            // Como nos encontrou validation
            if (!NosEncontrouPorOn.value || NosEncontrouPorOn.value === "Selecione uma opção") {
                showError(NosEncontrouPorOn, 'Por favor, selecione como nos encontrou');
                isValid = false;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value)) {
                showError(email, 'Por favor, insira um email válido');
                isValid = false;
            }

            // Message validation
            if (message.value.trim().length < 10) {
                showError(message, 'Mensagem deve ter pelo menos 10 caracteres');
                isValid = false;
            }

            if (isValid) {
                // Here you would typically send the form data to your server
                alert('Formulário enviado com sucesso!');
                form.reset();
            }
        });
    }
});

function showError(element, message) {
    const formGroup = element.parentElement;
    const errorDiv = document.createElement('div');
    errorDiv.className = 'invalid-feedback';
    errorDiv.textContent = message;
    element.classList.add('is-invalid');
    formGroup.appendChild(errorDiv);
}

function clearErrors() {
    document.querySelectorAll('.is-invalid').forEach(element => {
        element.classList.remove('is-invalid');
    });
    document.querySelectorAll('.invalid-feedback').forEach(element => {
        element.remove();
    });
} 