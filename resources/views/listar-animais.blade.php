<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animais para Adoção - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #D6D58E; /* Cor de fundo suave */
            color: #042940; /* Cor do texto principal */
        }
        .navbar, .footer {
            background-color: #005C53; /* Cor de fundo da navegação e rodapé */
        }
        .btn-primary {
            background-color: #9FC131; /* Cor dos botões principais */
            border-color: #9FC131;
        }
        .btn-primary:hover {
            background-color: #DBF227; /* Cor dos botões ao passar o mouse */
            border-color: #DBF227;
        }
        .animal-card {
            margin-bottom: 1.5rem;
        }
        .animal-card img {
            border-radius: 10px 10px 0 0;
        }
        .animal-card .card-body {
            background-color: #FFFFFF; /* Fundo branco para o card */
            border-radius: 0 0 10px 10px;
            padding: 1.5rem;
        }
        .animal-card h5 {
            color: #042940; /* Cor do título do card */
        }
        .animal-card p {
            color: #005C53; /* Cor do texto do card */
        }
    </style>
</head>
<body>

    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Adote um Amigo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Animais para Adoção</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Animais Disponíveis para Adoção</h1>
        <div class="row">
            <!-- Card do Animal 1 -->
            <div class="col-md-4">
                <div class="card animal-card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Rex">
                    <div class="card-body">
                        <h5 class="card-title">Rex</h5>
                        <p class="card-text">Rex é um cachorro brincalhão e cheio de energia. Adora passeios e é muito carinhoso.</p>
                        <a href="#" class="btn btn-primary">Adotar</a>
                    </div>
                </div>
            </div>
            <!-- Card do Animal 2 -->
            <div class="col-md-4">
                <div class="card animal-card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Luna">
                    <div class="card-body">
                        <h5 class="card-title">Luna</h5>
                        <p class="card-text">Luna é uma gata tranquila e carinhosa. Perfeita para quem busca um companheiro calmo.</p>
                        <a href="#" class="btn btn-primary">Adotar</a>
                    </div>
                </div>
            </div>
            <!-- Card do Animal 3 -->
            <div class="col-md-4">
                <div class="card animal-card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Max">
                    <div class="card-body">
                        <h5 class="card-title">Max</h5>
                        <p class="card-text">Max é um cachorro leal e protetor. Ideal para famílias que buscam um guardião.</p>
                        <a href="#" class="btn btn-primary">Adotar</a>
                    </div>
                </div>
            </div>
            <!-- Adicione mais cards conforme necessário -->
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <span class="text-white">© 2023 Adote um Amigo. Todos os direitos reservados.</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>