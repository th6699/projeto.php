<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tattos da luiza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Tattos da Luiza</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="home">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="galeria">Galeria</a></li>
                        <li class="nav-item"><a class="nav-link" href="contato">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php
        //mostrar o GET
        //print_r($_GET)

        $param = $_GET["param"] ?? "home";

        $pagina = "paginas/{$param}.php";
        //verificar se este arquivo existe
        if (file_exists($pagina))
            include $pagina;
        ?>
    </main>
    <footer class="site-footer ">
        <div class="container text-center py-4">
            <p>&copy; 2025 Tattos da Luiza. Todos os direitos reservados.</p>
            <p>Desenvolvido por [Arthur Oliveira Iori]</p>
        </div>
    </footer>
</body>

</html>