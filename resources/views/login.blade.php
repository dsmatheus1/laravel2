<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #D6D58E; /* Cor de fundo suave */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #FFFFFF; /* Fundo branco para o formulário */
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-container h2 {
            color: #042940; /* Cor do título */
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .btn-primary {
            background-color: #9FC131; /* Cor do botão */
            border-color: #9FC131;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #DBF227; /* Cor do botão ao passar o mouse */
            border-color: #DBF227;
        }
        .form-control:focus {
            border-color: #005C53; /* Cor da borda ao focar */
            box-shadow: 0 0 5px rgba(0, 92, 83, 0.5);
        }
        .form-label {
            color: #005C53; /* Cor do texto dos labels */
        }
        .register-link {
            text-align: center;
            margin-top: 1rem;
        }
        .register-link a {
            color: #005C53; /* Cor do link de registro */
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Container do Login -->
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <!-- Campo de Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
            </div>
            <!-- Campo de Senha -->
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
            </div>
            <!-- Botão de Login -->
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <!-- Link para Registro -->
        <div class="register-link">
            <p>Não tem uma conta? <a href="#">Registre-se aqui</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>