<?php include("functions/conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Loja do Brasil</title>
</head>

<body>
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <form class="d-flex" role="search">
                <img id="logo" src="img/logo.png" class="img-fluid" alt="..." style="width: 40px; margin-right: 15px;">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 15 15">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                        aria-describedby="basic-addon1">
                </div>
                <button id="carrinho" style="margin-left: 10px;" type="button" class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                        class="bi bi-cart" viewBox="0 0 15 15">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>
                </button>
                <button id="entrar" type="button" class="btn btn-primary"
                    style=" display: flex; align-items: center; margin-left: 10px;">
                    <svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 15 15">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 15 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    Entrar
                </button>
            </form>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-4">
                <div id="prod" class="card text-center">
                    <div class="card-body">
                        <?php
                        //iPhone
                        $sql = "SELECT * FROM produto WHERE id = 1";
                        $result = $conexao->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<img src='img/produtos/{$row["imagem"]}.png' style='width: 300px;'>";
                                echo "<p>{$row["nome"]}</p>";
                                echo "<h3 style='color: green;'>{$row["preco"]}</h3>";
                            }
                        }
                        ?>
                    </div>
                </div><br>
                <div class="card text-center">
                    <div class="card-body">
                        <?php
                        //Maquina de Lavar Roupa
                        $sql = "SELECT * FROM produto WHERE id = 2";
                        $result = $conexao->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<img src='img/produtos/{$row["imagem"]}.png' style='width: 300px;'>";
                                echo "<p>{$row["nome"]}</p>";
                                echo "<h3 style='color: green;'>{$row["preco"]}</h3>";
                            }
                        }
                        ?>
                    </div>
                </div><br>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <?php
                        //Adobe Premiere
                        $sql = "SELECT * FROM produto WHERE id = 3";
                        $result = $conexao->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<img src='img/produtos/{$row["imagem"]}.png' style='width: 300px;'>";
                                echo "<p>{$row["nome"]}</p>";
                                echo "<h3 style='color: green;'>{$row["preco"]}</h3>";
                            }
                        }
                        ?>
                    </div>
                </div><br>
                <div class="card text-center">
                    <div class="card-body">
                        <?php
                        //Notebook Lenovo
                        $sql = "SELECT * FROM produto WHERE id = 4";
                        $result = $conexao->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<img src='img/produtos/{$row["imagem"]}.png' style='width: 300px;'>";
                                echo "<p>{$row["nome"]}</p>";
                                echo "<h3 style='color: green;'>{$row["preco"]}</h3>";
                            }
                        }
                        ?>
                    </div>
                </div><br>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <?php
                        //Ração de Gato
                        $sql = "SELECT * FROM produto WHERE id = 5";
                        $result = $conexao->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<img src='img/produtos/{$row["imagem"]}.png' style='width: 300px;'>";
                                echo "<p>{$row["nome"]}</p>";
                                echo "<h3 style='color: green;'>{$row["preco"]}</h3>";
                            }
                        }
                        ?>
                    </div>
                </div><br>
                <div class="card text-center">
                    <div class="card-body">
                        <?php
                        //Chave do Windows 11
                        $sql = "SELECT * FROM produto WHERE id = 6";
                        $result = $conexao->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<img src='img/produtos/{$row["imagem"]}.png' style='width: 300px;'>";
                                echo "<p>{$row["nome"]}</p>";
                                echo "<h3 style='color: green;'>{$row["preco"]}</h3>";
                            }
                        }
                        ?>
                    </div>
                </div><br>
            </div>
        </div>
    </div>

    <script>
        const searchInput = document.querySelector('.form-control')
        const cards = document.querySelectorAll('.card')

        searchInput.addEventListener('keyup', function() {
            const termo = searchInput.value.toLowerCase()

            cards.forEach(card => {
                const texto = card.innerText.toLowerCase()
                if (texto.includes(termo)) {
                    card.style.display = "block"
                } else {
                    card.style.display = "none"
                }
            })
        })
    </script>

    <script>
        var entrar = document.getElementById("entrar")

        function login() {
            window.open("pages/login.php", '_self')
        }

        entrar.addEventListener("click", login)
    </script>

    <script>
        var p = document.getElementById("prod")

        function produto() {
            window.open("pages/produto.php", '_self')
        }

        p.addEventListener("click", produto)
    </script>

    <script>
        var cart = document.getElementById("carrinho")

        function car_buy() {
            window.open("pages/carrinho.php", '_self')
        }

        cart.addEventListener("click", car_buy)
    </script>

    <script>
        var index = document.getElementById("logo")

        function home() {
            window.open("index.php", '_self')
        }

        index.addEventListener("click", home)
    </script>

</body>

</html>