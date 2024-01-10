<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Welcome-page</title>
</head>

<body>
    <div class="container d-flex justify-content-center py-5">
        <div class="rounded-3 bg-dark p-4 d-flex align-items-center">
            <p class="text-light">Thanks for subscribing with email address: <?php echo $_SESSION['email'] ?></p>
        </div>
    </div>
</body>

</html>