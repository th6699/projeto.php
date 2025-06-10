<div class="header-hero mb-4">
    <div class="row align-items-center">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold mb-3">Bem-vindo à Tattos da Luiza</h1>
            <p class="lead fs-5 mb-4">Arte única e personalizada para sua história</p>
            <div class="header-buttons">
                <a href="?param=galeria" class="btn btn-lg btn-primary me-3">
                    <i class="fas fa-images me-2"></i>Ver Galeria
                </a>
                <a href="?param=contato" class="btn btn-lg btn-outline-primary">
                    <i class="fas fa-calendar-alt me-2"></i>Agendar Sessão
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .header-hero {
        padding: 3rem 0;
        background: linear-gradient(45deg, rgba(236, 220, 196, 0.5) 0%, rgba(178, 135, 95, 0.1) 100%);
        border-radius: 15px;
        margin: 1rem 0 2rem;
        border: 1px solid rgba(89, 65, 43, 0.1);
    }

    .header-hero h1 {
        color: #59412b;
        font-size: 2.8rem;
    }

    .header-hero .lead {
        color: #707c6e;
        max-width: 700px;
        margin: 0 auto;
    }

    .header-buttons {
        margin-top: 1.8rem;
    }

    .header-buttons .btn {
        min-width: 180px;
    }

    .header-buttons .btn i {
        font-size: 0.9em;
    }

    @media (max-width: 768px) {
        .header-hero {
            padding: 2rem 0;
        }

        .header-hero h1 {
            font-size: 2rem;
        }

        .header-buttons .btn {
            min-width: auto;
            display: block;
            margin: 0.5rem auto;
            width: 80%;
        }
    }

    /* Card de características */
    .card {
        background-color: #ecdcc4;
        border: 1px solid #b2875f;
        border-radius: 12px;
        box-shadow: 0 2px 4px rgba(89, 65, 43, 0.1);
    }

    .card-title {
        color: #59412b;
        font-weight: 600;
        text-align: center;
    }

    .feature-card {
        padding: 1.5rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        background-color: rgba(178, 135, 95, 0.1);
    }

    .feature-card i {
        color: #b2875f;
        margin-bottom: 1rem;
    }

    .feature-card h3 {
        color: #59412b;
        margin-bottom: 0.5rem;
        font-weight: 600;
    }

    .feature-card p {
        color: #707c6e;
        margin-bottom: 0;
    }

    @media (max-width: 768px) {
        .feature-card {
            padding: 1rem;
            margin-bottom: 1rem;
        }
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title mb-4 text-primary">Por que nos escolher?</h2>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="text-center feature-card">
                            <i class="fas fa-shield-alt fa-3x mb-3"></i>
                            <h3 class="h5">Biossegurança</h3>
                            <p>Materiais esterilizados e descartáveis</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="text-center feature-card">
                            <i class="fas fa-star fa-3x mb-3"></i>
                            <h3 class="h5">Experiência</h3>
                            <p>Anos de experiência em tatuagem</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="text-center feature-card">
                            <i class="fas fa-heart fa-3x mb-3"></i>
                            <h3 class="h5">Personalização</h3>
                            <p>Designs únicos e exclusivos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>