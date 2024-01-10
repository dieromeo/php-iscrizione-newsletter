<?php

// echo "Indirizzo email ricevuto: " . $email . "<br>";

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


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Newsletter</title>
</head>

<body>
    <h1 class="text-center py-5">Iscrizione alla newsletter</h1>
    <div class="container">
        <h4>Please insert an email with '.' and '@' .</h4>
        <form action="index.php" method="GET">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <label for="email"></label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <button class="btn btn-primary mb-3">Subscribe</button>
        </form>
        <div class="banners">
            <?php
            if ($check_email) : ?>
                <?php if (verifyEmail($email, '@', '.')) : ?>
                    <div class="alert alert-success" role="alert">
                        Subscribe Succesfully!!
                    </div>
                <?php
                else : ?>
                    <div class="alert alert-danger" role="alert">
                        Please insert a valid email!
                    </div>
                <?php endif ?>
            <?php endif ?>
        </div>
    </div>
</body>

</html>