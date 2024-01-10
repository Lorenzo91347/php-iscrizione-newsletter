<?php
session_start();

$input_email = $_POST ['email'];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Iscrizione Newsletter</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">My Newsletter</h1>
    <?php if(preg_match('(@|.)',$input_email) ):
        echo '<div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
      </div>';
    
    else:
        echo '<div class="alert alert-danger" role="alert">
        A simple danger alert—check it out!
      </div>'
    endif;?>

<form action="index.php" method="POST" id="email" name="email">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    

    
</body>
</html>