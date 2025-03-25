<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="cssindex.php/style.css">
</head>
<body>
    <div class="container">
        <form action="processa.php" method="POST">
            <h2 class="titulo-formulario">Login do Aluno</h2>
        <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="email"/>
                <label class="form-label" for="form2Example1">E-mail</label>
            </div>

        <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" name="senha"/>
                <label class="form-label" for="form2Example2">Senha</label>
            </div>

        <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
            <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                <label class="form-check-label" for="form2Example34"> Me lembre </label>
            </div>
        </div>

            <div class="col">
        <!-- Simple link -->
                <a href="#!">Esqueceu a senha?</a>
            </div>
        </div>

        <!-- Submit button -->
        <!--button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Sign in</button> -->
        <div class="d-flex justify-content-center mb-4">
            <input type="submit" class="btn btn-primary btn-block mb-4" value="Entrar">
        </div>
        <!-- Register buttons -->
            <div class="text-center">
                <p>Não tem uma conta? <a href="#!">Clique aqui</a></p>
                <p>ou faça login com:</p>

            <div class="icons">
            <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-google"></i>
            </button>

            <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
            </button>

            <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-github"></i>
            </button>
            </div>
            </div>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>