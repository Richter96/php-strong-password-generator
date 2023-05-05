<?php

$permitted_chars  =  '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

$passwordLength = $_GET["lengthPw"] ?? '';


echo "<pev>";
var_dump($passwordLength);

echo "</pev>";

function generate_password($chars, $lenght)
{

    $random_password = "";
    var_dump($lenght);
    var_dump($chars);

    for ($i = 0; $i < $lenght; $i++) {
        $character_random = $chars[mt_rand(0, strlen($chars) - 1)];
        $random_password .= $character_random;
    }
    return $random_password;
}


$password = generate_password($permitted_chars, $passwordLength);

var_dump($password);






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
            <div class="justify-content-center align-items-center g-2 flex-column">
                <!-- input form -->
                <div class="col">
                    <div class="input">
                        <form class="col-8 m-auto d-flex gap-3" action="" method="GET">
                            <label for="lengthPw">Inserisci la lunghezza della password</label>
                            <div class="input-group mb-3 w-25">
                                <input type="number" name="lengthPw" class="form-control" required>
                                <button class="btn btn-outline-secondary">Button</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-start shadow">
                        <div class="card-body">
                            <h4 class="card-title">Password Sigura</h4>
                            <?php if (!empty($passwordLength)) : ?>
                                <p class="card-text">
                                    <?php echo $password ?>
                                </p>
                            <?php endif ?>
                        </div>
                    </div>
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