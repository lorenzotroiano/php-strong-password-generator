<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



</head>

<body>
    <?php
    include 'functions.php';
    session_start();
    if (!empty($_SESSION['passwordGen'])) {
        echo "Ecco la tua passw: " . $_SESSION['passwordGen'];
    }
    // include 'functions.php';
    // echo generatePassword($numScelto);
    ?>

</body>

</html>