<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tattos da luiza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container">
                <a class="navbar-brand" href="index.php?param=home">
                    <img src="imgs/1.png" alt="Aziul Tattoo" class="img-fluid" style="max-height: 100px; width: auto;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="home">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="galeria">Galeria</a></li>
                        <li class="nav-item"><a class="nav-link" href="contato">Contato</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobre-nos">Sobre nós</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <?php
        $pagina = $_GET['param'] ?? 'home';

        //$pagina = pagina que se deseja abrir
        $pagina = "paginas/{$pagina}.php";

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include 'paginas/erro.php';
        }
        ?>

    </main>
    <footer class="site-footer p-1">
        <div class="container text-center py-4">
            <p>&copy; 2025 Tattos da Luiza. Todos os direitos reservados.</p>
            <p>Desenvolvido por [Arthur Oliveira Iori]</p>
        </div>
    </footer>
    <script src="js/jquery-3.7.1.js"></script>
</body>

</html>