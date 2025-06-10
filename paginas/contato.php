<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h2 class="mb-0">Entre em Contato</h2>
                </div>
                <div class="card-body">
                    <form id="contactForm" novalidate>
                        <!-- Nome -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome Completo *</label>
                            <input type="text" class="form-control" id="name" required
                                placeholder="Digite seu nome completo">
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail *</label>
                            <input type="email" class="form-control" id="email" required
                                placeholder="seu.email@exemplo.com">
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Telefone -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefone *</label>
                            <input type="tel" class="form-control" id="phone" required
                                placeholder="(11) 98765-4321">
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Data de Nascimento -->
                        <div class="mb-3">
                            <label for="datanascimento" class="form-label">Data de Nascimento *</label>
                            <input type="date" class="form-control" id="datanascimento" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Como nos encontrou -->
                        <div class="mb-3">
                            <label for="NosEncontrouPorOn" class="form-label">Como nos encontrou? *</label>
                            <select class="form-select" id="NosEncontrouPorOn" required>
                                <option value="">Selecione uma opção</option>
                                <option value="instagram">Instagram</option>
                                <option value="facebook">Facebook</option>
                                <option value="google">Google</option>
                                <option value="indicacao">Indicação de amigos</option>
                                <option value="outros">Outros</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Mensagem -->
                        <div class="mb-3">
                            <label for="message" class="form-label">Sua Mensagem *</label>
                            <textarea class="form-control" id="message" rows="4" required
                                placeholder="Digite sua mensagem aqui..."></textarea>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Botões -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="reset" class="btn btn-secondary me-md-2">Limpar</button>
                            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Adicione este script após o jQuery e o Bootstrap -->
<script src="js/validation.js"></script>