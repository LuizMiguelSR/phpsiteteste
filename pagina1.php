<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="wdith=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <title>Teste PHP</title>
        </head> 
        <body>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="pagina1.php">Página 01</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php">Início</a>
                        <a class="nav-link active" aria-current="page" href="pagina1.php">Página 01</a>
                    </div>
                    </div>
                </div>
            </nav>
            <h2 class="container-fluid">Implementação em php</h2><br>
            <h3 class="container-fluid">Teste de entrada de Dados</h3>
            <div class="container-fluid">
                <form class="row row-cols-lg-auto g-3 align-items-center" method="post">
                    <div class="col-12">
                        <label class="visually-hidden" for="nome">Digite seu nome</label>
                        <div class="input-group">
                        <div class="input-group-text">Nome</div>
                        <input type="text" name="nome" class="form-control" id="nome">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Diga olá</button>
                    </div>
                </form>
            </div>
            <?php
                if(isset($_POST['nome'])){
                    $nome = $_POST['nome'];
                    echo "<p class='container-fluid'> Olá " . $nome . " bem vindo ao teste de implementação em PHP na Azure </p>";
                }               
            ?>
        </body>
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Início</a></li>
            <li class="nav-item"><a href="pagina1.php" class="nav-link px-2 text-muted">Página 01</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 Teste PHP, Inc</p>
        </footer>
    </html>