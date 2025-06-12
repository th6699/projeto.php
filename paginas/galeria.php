<?php
include_once "arrayGaleria.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <style>
        .galeria-container {
            padding: 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            background-color: #ecdcc4;
        }

        .galeria-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.5s ease, box-shadow 0.5s ease;
            box-shadow: 0 4px 6px rgba(89, 65, 43, 0.1);
        }

        .galeria-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(89, 65, 43, 0.2);
        }

        .galeria-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }

        .galeria-item-titulo {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(89, 65, 43, 0.9);
            color: #ecdcc4;
            padding: 1rem;
            text-align: center;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(89, 65, 43, 0.95);
            z-index: 1000;
        }

        .modal-content {
            position: relative;
            width: 80%;
            max-width: 1200px;
            margin: 2rem auto;
            background: #ecdcc4;
            padding: 2rem;
            border-radius: 15px;
            color: #59412b;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .modal-close {
            font-size: 2rem;
            cursor: pointer;
            color: #59412b;
            background: none;
            border: none;
            padding: 0.5rem;
        }

        .modal-image {
            width: 100%;
            max-height: 500px;
            object-fit: contain;
            margin-bottom: 1rem;
            border-radius: 10px;
            border: 3px solid #b2875f;
        }

        .modal-info {
            padding: 1rem;
            background: #b2875f;
            border-radius: 10px;
            color: #ecdcc4;
        }

        .modal-titulo {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #59412b;
        }

        .modal-categoria {
            display: inline-block;
            background: #707c6e;
            color: #ecdcc4;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            margin-bottom: 1rem;
        }

        .modal-descricao {
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .galeria-container {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1rem;
                padding: 1rem;
            }

            .modal-content {
                width: 95%;
                margin: 1rem auto;
                padding: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="galeria-container">
        <?php foreach ($galeria as $item): ?>
            <div class="galeria-item" onclick="abrirModal(<?php echo htmlspecialchars(json_encode($item)); ?>)">
                <img src="<?php echo $item['imagem']; ?>" alt="<?php echo htmlspecialchars($item['titulo']); ?>">
                <div class="galeria-item-titulo"><?php echo htmlspecialchars($item['titulo']); ?></div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-titulo" id="modal-titulo"></h2>
                <button class="modal-close" onclick="fecharModal()">&times;</button>
            </div>
            <img id="modal-image" class="modal-image" src="" alt="">
            <div class="modal-info">
                <div class="modal-categoria" id="modal-categoria"></div>
                <p class="modal-descricao" id="modal-descricao"></p>
            </div>
        </div>
    </div>

    <script>
        function abrirModal(item) {
            const modal = document.getElementById('modal');
            const modalTitulo = document.getElementById('modal-titulo');
            const modalImage = document.getElementById('modal-image');
            const modalCategoria = document.getElementById('modal-categoria');
            const modalDescricao = document.getElementById('modal-descricao');

            modalTitulo.textContent = item.titulo;
            modalImage.src = item.imagem;
            modalImage.alt = item.titulo;
            modalCategoria.textContent = item.categoria;
            modalDescricao.textContent = item.descricao;

            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function fecharModal() {
            const modal = document.getElementById('modal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Fechar modal ao clicar fora dele
        window.onclick = function(event) {
            const modal = document.getElementById('modal');
            if (event.target == modal) {
                fecharModal();
            }
        }

        // Fechar modal com tecla ESC
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                fecharModal();
            }
        });
    </script>
</body>

</html>