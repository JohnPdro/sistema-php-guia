<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success-subtle">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="60"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastro Animal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ongs.php">Ongs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2 class="display-6 text-center mt-4 mt-3">Sistema <span class="text-success-emphasis">Zoo</span></h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col m-5 border border-success-subtle rounded pt-3 pb-3 btn">
                <a href="cadastro.php" class="btn">
                    <img src="img/cadastro.png">
                    <br>
                    <strong>CADASTRO ANIMAL</strong>
                </a>
            </div>
            <div class="col m-5 border rounded border-success-subtle pt-3 pb-3 btn">
                <a href="ongs.php" class="btn">
                    <img src="img/ongs.png">
                    <br>
                    <strong>ONGS</strong>
                </a>
            </div>

        </div>

        <footer class="container-fluid g-0 bg-dark text-light">
            <div class="row p-3">
                <div class="col text-center">
                    &reg; Sistema Zoo - Desenvolvido por <a class="text-secondary" href="mailto:joao.pdrofs@gmail.com">João Pedro</a>
                </div>
            </div>
        </footer>
</body>

</html>