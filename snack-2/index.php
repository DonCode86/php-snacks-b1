<?php
    $mail = $_GET['mail'];
    
    $name = $_GET['name'];

    $age = $_GET['age'];

    if (strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
        echo "Accesso riuscito";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
    }
    else {
        echo "Accesso negato";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email validity check</title>
</head>
<body>
  
</body>
</html>