<?php

function generate_password($chars, $lenght)
{
    if (!$lenght == "") {
        $random_password = "";
        // var_dump($lenght);
        // var_dump($chars);

        for ($i = 0; $i < $lenght; $i++) {
            $character_random = $chars[mt_rand(0, strlen($chars) - 1)];
            $random_password .= $character_random;
        }
        return $random_password;
    }
}
