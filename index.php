<?php

$permitted_chars  =  '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

$passwordLength = $_GET["lengthPw"] ?? 'nobody';


echo "<pev>";
var_dump($passwordLength);
echo "</pev>";

include __DIR__ . '/function.php';

$password = '';

if ($passwordLength != 'nobody') {
    $password = generate_password($permitted_chars, $passwordLength);
}


// var_dump($password);

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
        <div class="container text-center my-4 p-5">
            <h1>Generatore di password "sicure"</h1>
        </div>
    </header>
    <!-- /header -->
    <main>
        <div class=" container-md mt-5 p-5 shadow ">
            <div class="justify-content-center align-items-center g-2 flex-column">
                <!-- input form -->
                <div class="col d-flex flex-column">
                    <div class="input length_password">
                        <form class="col-8 m-auto d-flex gap-3 justify-content-center align-items-baseline" action="" method="GET">
                            <label for="lengthPw">Inserisci la lunghezza della password</label>
                            <div class="input-group mb-3 w-25">
                                <input type="number" name="lengthPw" class="form-control">
                                <button class="btn btn-outline-secondary">Button</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <?php if (!empty($passwordLength)) : ?>
                        <?php if (!empty($password)) : ?>
                            <div class="card text-start shadow">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Password Sigura</h4>
                                    <p class="card-text">
                                        <?php echo $password ?>
                                    </p>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php else : ?>
                        <div class="alert alert-warning justify-content-center d-flex align-items-center" role="alert">
                            <p class="m-0">Inserire un valore nel campo lunghezza password per generare la password</p>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </main>
    <!-- /main -->

    <footer class="mt-5">
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

<style>
    body {
        background-color: lightblue;
    }
</style>