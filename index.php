<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tattos da luiza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>
    <header class="site-header" align="center">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php?param=home">
                    <img src="imgs/1.png" alt="Aziul Tattoo" class="i">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="home">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="galeria">Galeria</a></li>
                        <li class="nav-item"><a class="nav-link" href="contato">Contato</a></li>
                        <li class="nav-item"><a class="nav-link" href="SobreNos">Sobre nós</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</body>

</html>