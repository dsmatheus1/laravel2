@extends('_partials/main')

@section('conteudo')

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
                        <a class="nav-link" href="#">Animais para Adoção</a>
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
        <div class="animal-details">
            <div class="row">
                <!-- Imagem do Animal -->
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x300" alt="Rex" class="img-fluid">
                </div>
                <!-- Detalhes do Animal -->
                <div class="col-md-6">
                    <h2>Rex</h2>
                    <p><strong>Idade:</strong> 2 anos</p>
                    <p><strong>Porte:</strong> Médio</p>
                    <p><strong>Temperamento:</strong> Brincalhão, energético e carinhoso</p>
                    <p><strong>Descrição:</strong> Rex é um cachorro muito ativo e adora brincar ao ar livre. Ele é extremamente carinhoso e se dá bem com crianças e outros animais. Rex está procurando um lar onde possa gastar sua energia e receber muito amor.</p>
                    <a href="#" class="btn btn-primary btn-lg">Quero Adotar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <span class="text-white">© 2023 Adote um Amigo. Todos os direitos reservados.</span>
        </div>
    </footer>

@endsection
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Animal - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       
    </style>
</head>
<body>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>