<?php 
session_start();

$_SESSION["newEmail"]=$input_email;
$input_email = $_POST ['email'] ?? '';
if($input_email) {

    if(str_contains($input_email, '@') && str_contains($input_email, '.')) {
        echo '<div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
      </div>';
      header('Location: thankyou.php');
    
    } else {
        echo '<div class="alert alert-danger" role="alert">
        A simple danger alert—check it out!
      </div>';
    } }
?>