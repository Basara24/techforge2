<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stem - Sua página de Games</title>
    <meta name="description" content="Sua página de Games, com lançamentos e jogos pagos e gratuitos">
    <meta name="keywords" content="games, jogos, lançamentos">

   

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Jersey+25&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="scss/styles.css">

    <link rel="shortcut icon" href="#">
</head>

<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="imagens/logo.png.jpg" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?pagina=home">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="?pagina=suporte">Suporte</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Jogos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?pagina=agente">Parabellum</a></li>
                            <li><a class="dropdown-item" href="?pagina=enemy">Enemy War</a></li>
                            <li><a class="dropdown-item" href="?pagina=labtask">Labtask</a></li>
                            <li><a class="dropdown-item" href="?pagina=minitauro">minitauro</a></li>
                            <li><a class="dropdown-item" href="?pagina=space">Space Soldier Survival</a></li>
                        </ul>
                    </li>
                </ul>
                    <a href="?pagina=login">
                    <button class="btn btn-outline-warning">login</button>
                    </a>
            </div>
        </div>
    </nav>

    </header>







    <?php
    $pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "home";
    $pagina = "paginas/{$pagina}.php";

    if (file_exists($pagina)) {
        include $pagina;
    } else {
        include "paginas/erro.php";
    }
    ?>


    <div class="modal fade" id="supportModal" tabindex="-1" aria-labelledby="supportModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="supportModalLabel">Suporte</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="supportForm" action="processa_suporte.php" method="POST">
                        <div class="mb-3">
                            <label for="user-email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="user-email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="problem-description" class="col-form-label">Descrição do Problema:</label>
                            <textarea class="form-control" id="problem-description" name="descricao" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['email']) && isset($_POST['descricao'])) {
            $email = $_POST['email'];
            $descricao = $_POST['descricao'];


            $email_destino = 'mayconpedroso2005@gmail.com.com';
            $assunto = "Novo Problema Reportado";
            $mensagem = $descricao;
            $cabecalhos = "From: $email";

            if (mail($email_destino, $assunto, $mensagem, $cabecalhos)) {
                echo "Obrigado por enviar sua solicitação de suporte. Nós entraremos em contato em breve.";
            } else {
                echo "Houve um problema ao enviar seu email. Por favor, tente novamente mais tarde.";
            }
        } else {

            echo "Por favor, preencha todos os campos do formulário.";
        }
    } else {

        "Método de requisição inválido.";
    }
    ?>


    <footer class="footer bg-dark text-light">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Todos os direitos reservados - Maycon Pedroso Macario©️</p>
                </div>
                <div class="col-md-6">
                    <div class="social-icons text-end">
                        <a href="https://wa.me/qr/UU2CPSXERKAZA1" class="social-icon">
                            <img src="imagens/Whatsapp.jpg" alt="WhatsApp">
                        </a>
                        <a href="https://www.instagram.com/_maycon24.p/=" class="social-icon">
                            <img src="imagens/Instagram.jpg" alt="Instagram">
                        </a>
                        <a href="https://discord.gg/ynWszwuA" class="social-icon">
                            <img src="imagens/Discord.jpg" alt="Discord">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
    </script>

</body>

</html>







































































































<!-- carrosel -->
<!-- <div class="carousel">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="imagens/jgcap.jpg" class="d-block w-100" alt="balde gay">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="imagens/jgdark.jpg" class="d-block w-100" alt="dark souls">
                </div>
                <div class="carousel-item">
                    <img src="imagens/jgelden.jpg" class="d-block w-100" alt="elden ring">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <br>
    começo das colunas de jogos 
    <H2>nossos jogos </H2>
    <br>

    <div class="card">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="a gente secreto/Capa.png" class="card-img-top" alt="agente segreto">
                    <div class="card-body">
                        <h5 class="card-title">Parabellum</h5>
                        <p class="card-text">um agente segreto da pessada que pretende recuperar uma joia perdida.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="jgmino/mino.png" class="card-img-top" alt="minotauro">
                    <div class="card-body">
                        <h5 class="card-title">Space Soldier Survival</h5>
                        <p class="card-text">em uma masmorra fuja do terrivel minotauro que o persegue .</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <br>
    <div class="card">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="meu jogo/labtask.png" class="card-img-top" alt="Labtask">
                    <div class="card-body">
                        <h5 class="card-title">Labtask</h5>
                        <p class="card-text">Labtask um jogo para se colocar ao extremo.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="jogo space/bannerjogo.PNG" class="card-img-top" alt="Space Soldier Survival">
                    <div class="card-body">
                        <h5 class="card-title">Space Soldier Survival</h5>
                        <p class="card-text">Ajude nosso viajante espacial a passar por divesos contratempo ate sua nave.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="enemy war/Screenshot_20240324_202646.png" class="card-img-top" alt="War">
                    <div class="card-body">
                        <h5 class="card-title">Enemy War</h5>
                        <p class="card-text">Enfente porcos com sua marrete e utrapase os obstaculos em Enemy War.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    </div>-->



<!-- <nav class="navbar navbar-expand-lg bg-body-primary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="cabecalho">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="pags/quem-somos.php">Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pags/suporte.php">Suporte</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Jogos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="login">
                    <a href="#">
                        <button type="button" class="btn btn-outline--warning">Login</button>
                    </a>
                </div>

            </div>
        </div>
    </nav> -->