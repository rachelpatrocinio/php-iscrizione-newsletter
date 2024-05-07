<?php
session_start();
$validation = $_SESSION["validation"] ?? '';
$name = $_SESSION["name"];
$surname = $_SESSION["surname"];

if($validation === ''){
    header('Location: ./index.php');
}

session_unset();
session_destroy();

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
        <div class="row p-5">
            <h5>Hello, 
                <span class="<?php if($validation === true){echo "text-success";}else{echo "text-danger";}?>">
                    <?php echo $name?> <?php echo $surname?>
                </span>!
                <?php 
                if($validation === true){
                ?> 
                Than you for the subscription!
                <?php
                }
                ?>
            </h5>

            <?php 
            if($validation === true){
            ?>   

            <div class="alert alert-success text-success" role="alert">La mail è corretta!</div>

            <?php
            }
            else{
            ?>

            <div class="alert alert-danger text-danger" role="alert">La mail non è corretta</div>

            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>
