<?php

$email = $_POST["email"] ?? null;
// var_dump($email);

function isCorrect($email){
    if(str_contains($email,"@") && str_contains($email,".")){
        return '<div class="alert alert-success" role="alert">La mail è corretta!</div>';
    } else{
        return '<div class="alert alert-danger" role="alert">La mail non è corretta</div>';
    }
}
$validation = isCorrect($email);

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
        <div class="row p-5">
            <form action="" method="POST">
                <label for="email">E-mail</label>
                <input type="text" name="email">

                <button class="btn btn-primary">SEND</button>
            </form>
            <p><?= $validation;?></p>
        </div>
    </div>
    
</body>
</html>