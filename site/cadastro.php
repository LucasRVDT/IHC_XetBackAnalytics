<?php
include "dbconnect.php";

if (isset($_POST['but_submit'])) {

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //var_dump($nome, $idade, $email, $senha);

    if ($email != "" && $senha != "" && $nome != "") {

        $sql = "INSERT INTO `usuario` (`senha`, `email`, `nome`, `idade`) VALUES ('$senha','$email', '$nome',' $idade')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Data inserted successfully";
            header('location:login.php');
        } else {
            echo "Deu ruim menó";

            die("Connection failed: " . $conn->connect_error);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XetBack Analytics</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="style.css">

    <style>
        /* Estilos personalizados adicionados ao arquivo styles.css */
        .navbar {
            background-color: #232526;
        }

        .sidenav .offcanvas-header {
            background-color: #232526;
        }

        .container {
            margin-top: 4rem;

            .logo {
                display: flex;
                justify-self: center;
                margin-top: 15px;
                width: 30%;
                height: 30%;
            }
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Garante que o conteúdo ocupe pelo menos toda a altura da janela visível */
        }

        .footer {
            margin-top: auto;
            /* Coloca o rodapé no final da página */
        }

        @media only screen and (max-width: 600px) {
            .carousel-container {
                background-color: #bacbd9;
                height: 500px;

                .logo {
                    margin-top: 15px;
                    width: 50%;
                    height: 50%;
                }
            }
        }
    </style>
</head>

<body>
    <!-- Sticky Header -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <span class="material-symbols-outlined" style="color: aliceblue;" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                menu
            </span>
            <a class="navbar-brand" href="#">XetBack Analytics</a>
            <!-- Adicione itens de navegação aqui, se necessário -->
        </div>
    </nav>

    <!-- Side Canvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header row mx-0 px-0">
            <div class="col-10">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"> Menu</h5>
            </div>

            <div class="col-2">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body mx-0 px-0">
                <div class="list-group list-group-flush">
                    <a type="button" class="list-group-item list-group-item-action" href="index.php">Home</a>
                    <a type="button" class="list-group-item list-group-item-action" href="cadastro.php">Cadastro</a>
                    <a type="button" class="list-group-item list-group-item-action" href="login.php">Login</a>
                    <a type="button" class="list-group-item list-group-item-action" href="usuario.php">Avaliação</a>
                    <a type="button" class="list-group-item list-group-item-action" disabled>Sobre</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Cadastro -->
    <div class="container d-flex justify-content-center mb-4">
        <div class="card" style="width: 30rem;">
            <!-- <img src="https://cdn.pixabay.com/photo/2021/06/07/13/46/user-6318008_960_720.png" class="card-img-top rounded mx-auto d-block logo" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title">Cadastro</h5>
                <form method="post" action="">
                    <div class="form-group mb-2">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu nome">
                    </div>
                    <div class="form-group mb-2">
                        <label for="idade">Idade</label>
                        <input type="number" class="form-control" id="idade" name="idade" placeholder="Informe sua idade">
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailInfo" placeholder="Informe seu email">
                        <small id="emailInfo" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
                    </div>
                    <div class="form-group mb-2">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" name="but_submit" id="but_submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Sticky Footer -->
    <footer class="footer py-3 bg-light">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <a style="text-decoration: none; color:#232526" href="https://openai.com/chatgpt">ChatGPT</a>
                </div>
            </div>
            <span class="text-muted">© 2024 XetBack Analytics. Todos os direitos reservados.</span>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>