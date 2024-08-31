<!-- templates/home.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Анализатор страниц</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body class="min-vh-100 d-flex flex-column">

    <header class="flex-shrink-0">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark px-2">
            <div class="container-fluid d-flex justify-content-start px-2">
                <a class="navbar-brand" href="#">Анализатор страниц</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Сайты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow-1">
        <div>
            <div class="container-lg mt-3">
                <h1></h1>
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-8 mx-auto border rounded bg-light p-5">
                        <h1 class="display-3">Анализатор страниц</h1>
                        <p class="lead">Бесплатно проверяйте сайты на SEO пригодность</p>
                        <form action="" method="post" class="row" required>
                            <div class="col-8">
                                <input type="text"
                                       name="url[name]"
                                       value=""
                                       placeholder="https://www.example.com"
                                       class="form-control form-control-lg">
                            </div>
                            <div class="col-2">
                                <input class="btn btn-primary btn-lg ms-3 px-5 text-uppercase mx-3"
                                       type="submit"
                                       value="Проверить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="border-top py-3 mt-5 flex-shrink-0">
        <div class="container-lg">
            <div class="text-center">
                <a href="https://hexlet.io/pages/about" target="_blank">Hexlet</a>
            </div>
        </div>
    </footer>

</body>

</html>