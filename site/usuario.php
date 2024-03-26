<?php
session_start();
include "dbconnect.php";

// Verifica se o usuário está logado
if (!isset($_SESSION['email'])) {
    header('Location: login.php'); // Redireciona para a página de login se não estiver logado
    exit();
}

// Recupera os dados do usuário da sessão
$email = $_SESSION['email'];

// Consulta o banco de dados para obter os dados do usuário
$sql_query = "SELECT * FROM usuario WHERE email = '$email'";
$result = mysqli_query($conn, $sql_query);
$row = mysqli_fetch_assoc($result);

// Exibe os dados do usuário no HTML
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
    <!-- User page -->
    <div class="container d-flex justify-content-center mb-4">

        <div class="card">
            <h5 class="card-header">Olá, <td><?php echo $row['nome']; ?></td> !</h5>
            <div class="card-body">
                <!-- <h5 class="card-title">Special title treatment</h5> -->
                <!-- <p>Email: <?php echo $row['email']; ?> </p> -->
                <p>Idade: <?php echo $row['idade']; ?> </p>
                <p class="card-text">Queremos aprimorar sua experiência com o ChatGPT e precisamos da sua ajuda! Por favor,
                    tire um momento para compartilhar seus pensamentos e sugestões respondendo ao nosso formulário de avaliação.
                    Clique no botão abaixo para participar. Agradecemos imensamente pela sua contribuição em tornar o ChatGPT ainda melhor!</p>
                <a href="#" class="btn btn-primary">Formulário de avaliação</a>
            </div>
        </div>
    </div>

    <!-- Sticky Footer -->
    <footer class="footer mt-auto py-3 bg-light fixed-bottom">
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