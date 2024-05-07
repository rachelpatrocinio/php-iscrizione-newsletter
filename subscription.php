<?php
session_start();
$validation = $_SESSION["validation"];
// var_dump($validation);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>validation</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <p>
                <?php if($validation === false){echo '<div class="alert alert-danger" role="alert">La mail non è corretta</div>';}
                      if($validation === true){echo '<div class="alert alert-success" role="alert">La mail è corretta!</div>';}
                ?>
            </p>
        </div>
    </div>
    
</body>
</html>
