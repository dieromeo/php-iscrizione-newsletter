<?php

function verifyEmail($get_value, $char1, $char2)
{
    $first_check = str_contains($get_value, $char1);
    $second_check = str_contains($get_value, $char2);
    if ($first_check && $second_check) {
        return true;
    }
};

$check_email = (count($_GET) != 0);

if ($check_email) {
    $email = $_GET["email"];
}
