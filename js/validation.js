document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.getElementById('name');
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