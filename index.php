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
<body>
    <div class="container">
        <div class="row">
            <div class="modal d-block d-flex align-items-center" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content p-5">
                        <?php include __DIR__ . '/header.php';?>
                        <div class="modal-body">
                            <form action="" method="POST" class="d-flex flex-column">
                                <label for="name">Name</label>
                                <input class="mb-3" type="text" name="name">

                                <label for="name">Surname</label>
                                <input class="mb-3" type="text" name="surname">

                                <label for="email">E-mail</label>
                                <input class="mb-3" type="text" name="email">

                                <button class="btn btn-primary mt-4 mb-3">SUBSCRIBE</button>
                            </form>
                        </div>
                        <?php include __DIR__ . '/footer.php';?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>