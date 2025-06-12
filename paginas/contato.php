<!-- Página de Contato - Usando a paleta de cores:
    Marrom claro: #b2875f - Elementos de destaque e hover
    Bege claro: #ecdcc4 - Backgrounds suaves
    Marrom escuro: #59412b - Textos principais e botões
    Verde acinzentado: #707c6e - Elementos secundários
    Bege médio: #d4ccb4 - Bordas e elementos decorativos
-->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #ecdcc4; border: 1px solid #b2875f; box-shadow: 0 4px 6px rgba(89, 65, 43, 0.1);">
                <div class="card-header" style="background-color: #59412b; color: #ecdcc4; border-bottom: 2px solid #b2875f;">
                    <h2 class="mb-0">Entre em Contato</h2>
                </div>
                <div class="card-body" style="color: #59412b;">
                    <form id="contactForm" novalidate>
                        <!-- Nome -->
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Nome Completo *</label>
                            <input type="text" class="form-control" id="name" required
                                placeholder="Digite seu nome completo"
                                style="border-color: #d4ccb4; background-color: #ecdcc4;">
                            <div class="invalid-feedback" style="color: #b2875f;"></div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">E-mail *</label>
                            <input type="email" class="form-control" id="email" required
                                placeholder="seu.email@exemplo.com"
                                style="border-color: #d4ccb4; background-color: #ecdcc4;">
                            <div class="invalid-feedback" style="color: #b2875f;"></div>
                        </div>

                        <!-- Telefone -->
                        <div class="mb-3">
                            <label for="phone" class="form-label fw-bold">Telefone *</label>
                            <input type="tel" class="form-control" id="phone" required
                                placeholder="(11) 98765-4321"
                                style="border-color: #d4ccb4; background-color: #ecdcc4;">
                            <div class="invalid-feedback" style="color: #b2875f;"></div>
                        </div>

                        <!-- Data de Nascimento -->
                        <div class="mb-3">
                            <label for="datanascimento" class="form-label fw-bold">Data de Nascimento *</label>
                            <input type="date" class="form-control" id="datanascimento" required
                                style="border-color: #d4ccb4; background-color: #ecdcc4;">
                            <div class="invalid-feedback" style="color: #b2875f;"></div>
                        </div>

                        <!-- Como nos encontrou -->
                        <div class="mb-3">
                            <label for="NosEncontrouPorOn" class="form-label fw-bold">Como nos encontrou? *</label>
                            <select class="form-select" id="NosEncontrouPorOn" required
                                style="border-color: #d4ccb4; background-color: #ecdcc4;">
                                <option value="">Selecione uma opção</option>
                                <option value="instagram">Instagram</option>
                                <option value="facebook">Facebook</option>
                                <option value="google">Google</option>
                                <option value="indicacao">Indicação de amigos</option>
                                <option value="outros">Outros</option>
                            </select>
                            <div class="invalid-feedback" style="color: #b2875f;"></div>
                        </div>

                        <!-- Mensagem -->
                        <div class="mb-3">
                            <label for="message" class="form-label fw-bold">Sua Mensagem *</label>
                            <textarea class="form-control" id="message" rows="4" required
                                placeholder="Digite sua mensagem aqui..."
                                style="border-color: #d4ccb4; background-color: #ecdcc4;"></textarea>
                            <div class="invalid-feedback" style="color: #b2875f;"></div>
                        </div>

                        <!-- Botões -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="reset" class="btn me-md-2"
                                style="background-color: #707c6e; color: #ecdcc4; border: none; transition: all 0.3s ease;">Limpar</button>
                            <button type="submit" class="btn"
                                style="background-color: #59412b; color: #ecdcc4; border: none; transition: all 0.3s ease;">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estilos personalizados para interatividade -->
<style>
    /* Estilo hover para inputs */
    .form-control:focus,
    .form-select:focus {
        border-color: #b2875f !important;
        box-shadow: 0 0 0 0.25rem rgba(178, 135, 95, 0.25) !important;
        background-color: #ecdcc4 !important;
    }

    /* Estilo hover para botões */
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(89, 65, 43, 0.2);
    }

    /* Estilo para placeholder */
    ::placeholder {
        color: #707c6e !important;
        opacity: 0.7;
    }

    /* Estilo para labels obrigatórios */
    .form-label::after {
        content: " *";
        color: #b2875f;
    }
</style>

<!-- Script de validação -->
<script src="js/validation.js"></script>