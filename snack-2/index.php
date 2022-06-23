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