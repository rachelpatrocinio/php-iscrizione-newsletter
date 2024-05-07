<?php

$email = $_POST["email"] ?? '';
// var_dump($email);

require_once __DIR__ . '/utilities.php';

$validation = isCorrect($email);
session_start();
$_SESSION["validation"] = $validation;

if($email){
    header('Location: ./subscription.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-iscrizione-newsletter</title>
</head>
<body class="p-5">

    <?php
    include './header.php';
    ?>

    <div class="container">
        <div class="row">
            <form action="" method="POST">
                <label for="email">E-mail</label>
                <input type="text" name="email">

                <button class="btn btn-primary">SEND</button>
            </form>
            <p><?php if($email !== ''){echo $validation;}?></p>
        </div>
    </div>

    <?php
    include './footer.php';
    ?>
    
</body>
</html>