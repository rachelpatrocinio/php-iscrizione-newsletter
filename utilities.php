<?php
function isCorrect($email){
    if(str_contains($email,"@") && str_contains($email,".")){
        return '<div class="alert alert-success" role="alert">La mail è corretta!</div>';
    } else{
        return '<div class="alert alert-danger" role="alert">La mail non è corretta</div>';
    }
}
?>