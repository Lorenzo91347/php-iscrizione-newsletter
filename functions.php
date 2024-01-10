<?php 
session_start();


$input_email = $_POST ['email'] ?? '';
if($input_email) {

    if(str_contains($input_email, '@') && str_contains($input_email, '.')) {
        $_SESSION["newEmail"]=$input_email;
      header('Location: thankyou.php');
    
    } else {
        echo '<div class="alert alert-danger" role="alert">
        A simple danger alert—check it out!
      </div>';
    } }
?>