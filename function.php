<?php
session_start();
function generate_password($chars, $lenght)
{
    $password = '';

    if ($lenght != null) {
        $random_password = "";
        // var_dump($lenght);
        // var_dump($chars);

        for ($i = 0; $i < $lenght; $i++) {
            $character_random = $chars[mt_rand(0, strlen($chars) - 1)];
            $random_password .= $character_random;
        }

        $password = $random_password;
    }
    if ($password != '') {
        $_SESSION["passw"] = $password;
        header('Location: ./viewpassword.php');
    }
}
