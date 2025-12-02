<?php include("../functions/conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <title>Loja do Brasil - iPhone 16 PRO MAX 128GB</title>
</head>

<body>
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <form class="d-flex" role="search">
                <img id="logo" src="../img/logo.png" class="img-fluid" alt="..." style="width: 40px; margin-right: 15px;">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                        aria-describedby="basic-addon1">
                </div>
                <button id="carrinho" style="margin-left: 10px;" type="button" class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-cart" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>
                </button>
                <button id="entrar" type="button" class="btn btn-primary"
                    style=" display: flex; align-items: center; margin-left: 10px;">
                    <svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    Entrar
                </button>
            </form>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 100px; width: 800px;">
                    <div class="card-body">
                        <?php
                        //iPhone
                        $sql = "SELECT * FROM produto WHERE id = 1";
                        $result = $conexao->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<img style='width: 400px' class='img-thumbnail' src='../img/produtos/{$row["imagem"]}.png'>";
                                echo "<h1>{$row["nome"]}</h1>";
                                echo "<h3 style='color: green; font-weight: bold;'>{$row["preco"]}</h3>";
                            }
                        }
                        ?>
                        <h6 style="color: green;">ou 12x de R$ 750,00 sem juros</h6>
                        <h6 style="color: royalblue;">Entregue até terça feira</h6><br>
                        <p> <img src="https://logospng.org/download/visa/logo-visa-256.png" alt="" style="width: 20px;"> <img
                                src="https://logospng.org/download/mastercard/logo-mastercard-256.png" alt=""
                                style="width: 20px;"> Cartões de Crédito</p>
                        <p><img src="https://logospng.org/download/sicredi/logo-sicredi-icon-256.png" alt=""
                                style="width: 20px;"> Cartão de Debito</p>
                        <p><img src="https://logospng.org/download/pix/logo-pix-icone-256.png" alt="" style="width: 20px;"> PIX
                        </p>
                        <p><img src="img/tag.png" alt="" style="width: 20px;"> Boleto Bancario</p><br>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="quantidade" placeholder="Quantidade"
                                style="width: 150px;" value="1">
                            <label for="floatingInput">Quantidade</label>
                        </div>
                        <div class="d-grid gap-2">
                            <button id="carrinho2" class="btn btn-primary" type="button" style="font-weight: bold;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                </svg>
                                Adicionar ao Carrinho
                            </button>
                            <button class="btn btn-success" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
                                </svg>
                                Comprar Agora
                            </button>
                        </div><br>
                        <?php
                        //iPhone
                        $sql = "SELECT * FROM produto WHERE id = 1";
                        $result = $conexao->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<p>{$row["descricao"]}</p>";
                            }
                        }
                        ?>
                        </section>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Digite aqui sua avaliação</label>
                        </div>
                        <button type="button" class="btn btn-primary" style="margin-bottom: 40px; margin-top: 10px;">Publicar</button>
                        <div class="avaliacoes overflow-auto" style="height: 200px;">
                            <div class="avaliacao">
                                00/00/0000 ⭐ ⭐ ⭐ ⭐ ⭐
                                <p>Melhor produto do mundo!</p>
                            </div><br>
                            <div class="avaliacao">
                                00/00/0000 ⭐ ⭐ ⭐ ⭐
                                <p>Melhor produto do mundo!</p>
                            </div><br>
                            <div class="avaliacao">
                                00/00/0000 ⭐ ⭐ ⭐
                                <p>Melhor produto do mundo!</p>
                            </div><br>
                            <div class="avaliacao">
                                00/00/0000 ⭐ ⭐
                                <p>Melhor produto do mundo!</p>
                            </div><br>
                            <div class="avaliacao">
                                00/00/0000 ⭐
                                <p>Melhor produto do mundo!</p>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    const entrar = document.getElementById("entrar")

    function login() {
        window.open("login.php", '_self')
    }

    entrar.addEventListener("click", login)
</script>

<script>
    const cart = document.getElementById("carrinho")

    function car_buy() {
        window.open("carrinho.php", '_self')
    }

    cart.addEventListener("click", car_buy)
</script>

<script>
    const index = document.getElementById("logo")

    function home() {
        window.open("../index.php", '_self')
    }

    index.addEventListener("click", home)
</script>

<script>
    const valor = document.getElementById("valor")
    const quantidade = document.getElementById("quantidade")
    const precoUnitario = 9000

    function preco_quantidade() {
        const qtd = parseInt(quantidade.value) || 1
        const total = precoUnitario * qtd
        valor.textContent = `R$ ${total.toLocaleString('pt-BR', { minimumFractionDigits: 2 })}`
    }

    quantidade.addEventListener('input', preco_quantidade)
</script>

</html>