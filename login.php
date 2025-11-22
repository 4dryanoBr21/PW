<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include("functions/conexao.php");
    session_start();

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Proteção básica
        $username = mysqli_real_escape_string($conexao, $username);

        // Busca o usuário no banco
        $sql = "SELECT id, usuario, senha FROM usuarios WHERE usuario = '$username' LIMIT 1";
        $result = mysqli_query($conexao, $sql);

        if ($result && mysqli_num_rows($result) === 1) {
            $user = mysqli_fetch_assoc($result);

            // Verifica a senha (HASH)
            if (password_verify($password, $user["senha"])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["username"] = $user["username"];

                header("Location: index.php");
                exit;
            } else {
                $erro = "Senha incorreta.";
            }
        } else {
            $erro = "Usuário não encontrado.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Loja do Brasil - Login</title>
</head>

<body>
    <div class="container-fluid" style="display: flex; flex-direction: column; flex-wrap: nowrap; align-items: center;">
        <img id="logo" src="img/loja_do_brasil_com_texto.png" alt="" style="width: 200px;">
        <div class="card" style="width: 300px;">
            <div class="card-body">
                <form method="POST" action="">
                    <?php if (!empty($erro)) { ?>
                        <div class="alert alert-danger"><?php echo $erro; ?></div>
                    <?php } ?>
                    
                    <div class="mb-3">
                        <label>Usuário</label>
                        <input name="username" type="text" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label>Senha</label>
                        <input name="password" type="password" class="form-control" required>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Entrar</button>
                        <button id="cad" class="btn" type="button">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script>

    const cad = document.getElementById("cad")

    function login() {
        window.open("cadastro.php", '_self')
    }

    cad.addEventListener("click", login)

</script>

<script>

    const index = document.getElementById("logo")

    function home() {
        window.open("index.php", '_self')
    }

    index.addEventListener("click", home)

</script>

<script>

    const username = document.getElementById("username")
    const senha = document.getElementById("password")
    const entrar = document.getElementById("entrar")
    const alerta = document.getElementById("alert")

    function login(){
        if(username.value === "admin"){
            if(senha.value === "admin"){
                alerta.innerHTML = '<div class="alert alert-success" role="alert">Usuário Logado com Sucesso!</div>'
            } else {
                alerta.innerHTML = '<div class="alert alert-danger" role="alert">É necessário digitar sua senha para prosseguir!</div>'  
            }
        } else {
          alerta.innerHTML = '<div class="alert alert-danger" role="alert">É necessário digitar seu usuário e senha para prosseguir!</div>'
      }
    }

    entrar.addEventListener("click", login)

</script>

</html>