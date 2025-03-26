@extends('_partials/main')

@section('conteudo')


    <!-- Container de Registro -->
    <div class="register-container">
        <h2>Registro</h2>
        <form action="{{route('registro}}" method="POST">
            @csrf
            <!-- Campo de Nome -->
            <div class="mb-3">
                <label for="name" class="form-label">Nome Completo</label>
                <input name="nome_completo" type="text" class="form-control" id="name" placeholder="Digite seu nome completo" required>
            </div>
            <!-- Campo de Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu email" required>
            </div>
            <!-- Campo de Senha -->
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input name="senha" type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
            </div>
            <!-- Campo de Confirmação de Senha -->
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirme sua senha</label>
                <input name="confirmar_senha" type="password" class="form-control" id="confirm-password" placeholder="Confirme sua senha" required>
            </div>
            <!-- Botão de Registro -->
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        <!-- Link para Login -->
        <div class="login-link">
            <p>Já tem uma conta? <a href="#">Faça login aqui</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection