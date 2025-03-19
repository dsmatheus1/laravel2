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
                        <a class="nav-link active" aria-current="page" href="#">Adicionar Animal</a>
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
        <div class="form-container">
            <h1 class="text-center mb-4">Adicionar Novo Animal para Adoção</h1>
            <form>
                <!-- Campo Nome -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do Animal</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome do animal" required>
                </div>
                <!-- Campo Espécie -->
                <div class="mb-3">
                    <label for="especie" class="form-label">Espécie</label>
                    <select class="form-select" id="especie" required>
                        <option value="">Selecione a espécie</option>
                        <option value="cachorro">Cachorro</option>
                        <option value="gato">Gato</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>
                <!-- Campo Raça -->
                <div class="mb-3">
                    <label for="raca" class="form-label">Raça</label>
                    <input type="text" class="form-control" id="raca" placeholder="Digite a raça do animal">
                </div>
                <!-- Campo Idade -->
                <div class="mb-3">
                    <label for="idade" class="form-label">Idade</label>
                    <input type="number" class="form-control" id="idade" placeholder="Digite a idade do animal" required>
                </div>
                <!-- Campo Porte -->
                <div class="mb-3">
                    <label for="porte" class="form-label">Porte</label>
                    <select class="form-select" id="porte" required>
                        <option value="">Selecione o porte</option>
                        <option value="pequeno">Pequeno</option>
                        <option value="medio">Médio</option>
                        <option value="grande">Grande</option>
                    </select>
                </div>
                <!-- Campo Temperamento -->
                <div class="mb-3">
                    <label for="temperamento" class="form-label">Temperamento</label>
                    <input type="text" class="form-control" id="temperamento" placeholder="Digite o temperamento do animal" required>
                </div>
                <!-- Campo Descrição -->
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descricao" rows="4" placeholder="Descreva o animal" required></textarea>
                </div>
                <!-- Campo Upload de Foto -->
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto do Animal</label>
                    <input type="file" class="form-control" id="foto" accept="image/*" required>
                </div>
                <!-- Botão de Envio -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Adicionar Animal</button>
                </div>
            </form>
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
    <title>Adicionar Animal - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       
    </style>
</head>
<body>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>