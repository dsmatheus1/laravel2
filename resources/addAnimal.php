@extends('_partials/main')

@section('conteudo')

    <!-- Container de Registro -->
    <div class="register-container">
        <h2>Registro</h2>
        <form action="{{ route('addAnimal') }}" method="POST">
            @csrf
            <!-- Campo de Nome -->
            <div class="mb-3">
                <label for="name" class="form-label">Nome </label>
                <input name="nome" type="text" class="form-control" id="name" placeholder="Digite seu nome completo" required>
            </div>
            <!-- Campo de Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Raça</label>
                <input name="cor" type="email" class="form-control" id="email" placeholder="Digite seu email" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nome </label>
                <input name="peso" type="text" class="form-control" id="name" placeholder="Digite seu nome completo" required>
            </div>
            <!-- Campo de Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Raça</label>
                <input name="idade" type="email" class="form-control" id="email" placeholder="Digite seu email" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nome </label>
                <input name="especie" type="text" class="form-control" id="name" placeholder="Digite seu nome completo" required>
            </div>
            <!-- Campo de Email -->
            <div class="mb-3">
                <label for="especie" class="form-label">Raça</label>
                <input name="raca" type="email" class="form-control" id="email" placeholder="Digite seu email" required>
            </div>
          
            <!-- Botão de Registro -->
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        <!-- Link para Login -->
        <div class="login-link">
            <p>Já tem uma conta? <a href="#">Faça login aqui</a></p>
        </div>
    </div>

@endsection