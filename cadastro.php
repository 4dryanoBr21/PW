<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("functions/conexao.php");

if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $usuario = $_POST['username'];
    $senha = $_POST['password'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data'];
    $email = $_POST['email'];

    // Gera hash seguro da senha
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Prepared statement para segurança
    $stmt = $conexao->prepare("INSERT INTO usuario (nome, usuario, senha, cpf, data_nascimento, email) VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssss", $nome, $usuario, $senhaHash, $cpf, $data_nascimento, $email);

    if ($stmt->execute()) {
        //header("Location: login.php");
        echo "Cadastro realizado com sucesso.";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
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
    <title>Loja do Brasil - Cadastro</title>
</head>

<body>
    <div class="container-fluid" style="display: flex; flex-direction: column; flex-wrap: nowrap; align-items: center;">
        <img id="logo" src="img/loja_do_brasil_com_texto.png" alt="" style="width: 200px;">
        <div class="card" style="width: 300px;">
            <div class="card-body">
                <form action="" method="post" id="form">
                    <div class="mb-3">
                        <label for="">Nome Completo</label>
                        <input name="nome" id="nome" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Usuário</label>
                        <input name="username" id="username" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Senha</label>
                        <input name="password" id="password" type="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">CPF</label>
                        <input name="cpf" id="cpf" type="number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Data de Nascimento</label>
                        <input name="data" id="data" type="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input name="email" id="email" type="email" class="form-control" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button id="registrar" name="submit" class="btn btn-primary" type="submit">Registrar</button>
                    </div><br>
                    <div id="alert">

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script>
    var index = document.getElementById("logo")

    function home() {
        window.open("index.html", '_self')
    }

    index.addEventListener("click", home)
</script>

<script>

    const nome = document.getElementById("nome");
    const username = document.getElementById("username");
    const password = document.getElementById("password");
    const cpf = document.getElementById("cpf");
    const data = document.getElementById("data");
    const email = document.getElementById("email");
    const alerta = document.getElementById("alert");
    const form = document.getElementById("form");

    form.addEventListener("submit", (e) => {
        if (
            nome.value === "" ||
            username.value === "" ||
            password.value === "" ||
            cpf.value === "" ||
            data.value === "" ||
            email.value === ""
        ) {
            e.preventDefault();
            alerta.innerHTML = '<div class="alert alert-danger" role="alert">Preencha todos os campos!</div>';
        }
    });

</script>

</html>