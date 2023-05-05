<?php

$passwordLength = $_GET["lenghtPw"];

var_dump($passwordLength);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <div class="container text-center">
            <h1>Generatore di password "sicure"</h1>
        </div>
    </header>
    <!-- /header -->
    <main>
        <div class="container">
            <div class="justify-content-center align-items-center g-2 flex-colums">
                <div class="col">
                    <div class="row">
                        <!-- buttom send length password -->
                        <form class="col-8 m-auto" action="" method="GET">
                            <div class="input-group mb-3">
                                <input type="number" name="lenghtPw" class="form-control" placeholder="Inserisci la lunghezza della password da generare">
                                <button class="btn btn-outline-secondary" type="button" id="">Button</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /main -->

    <footer>
        <p class="copy">Copyright © Boolean 2023 / Riccardo Castiglione</p>
    </footer>
    <!-- /footer -->





    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>