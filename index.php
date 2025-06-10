<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tattos da Luiza - Estúdio de tatuagem profissional">
    <meta name="theme-color" content="#59412b">
    <title>Tattos da Luiza</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="?param=home">
                    <img src="imgs/1.png" alt="Aziul Tattoo" class="i">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="?param=home">
                                <i class="fas fa-home"></i> Início
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?param=galeria">
                                <i class="fas fa-images"></i> Galeria
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?param=contato">
                                <i class="fas fa-envelope"></i> Contato
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?param=SobreNos">
                                <i class="fas fa-info-circle"></i> Sobre nós
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-4">
        <?php
        $pagina = $_GET['param'] ?? 'home';
        $pagina = "paginas/{$pagina}.php";

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include 'paginas/erro.php';
        }
        ?>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 Tattos da Luiza. Todos os direitos reservados.</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <p class="mb-0 text-muted">Desenvolvido por Arthur Oliveira Iori</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/validation.js"></script>
</body>

</html>