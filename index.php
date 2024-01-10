<?php
include 'functions.php';
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
        <!-- form  -->
        <form action="index.php" method="GET">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <label for="email"></label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <button class="btn btn-primary mb-3">Subscribe</button>
        </form>
        <!-- /form  -->
        <div class="banners">
            <?php
            if ($check_email) : ?>
                <!-- alert di successo  -->
                <?php if (verifyEmail($email, '@', '.')) : ?>
                    <div class="alert alert-success" role="alert">
                        Subscribe Succesfully!!
                    </div>
                <?php
                else : ?>
                    <!-- alert di errore  -->
                    <div class="alert alert-danger" role="alert">
                        Please insert a valid email!
                    </div>
                <?php endif ?>
            <?php endif ?>
        </div>
    </div>
</body>

</html>