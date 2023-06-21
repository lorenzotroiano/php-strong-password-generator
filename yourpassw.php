<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



</head>
<style>

</style>

<body>





    <?php
    include 'functions.php';
    session_start();
    if (!empty($_SESSION['passwordGen'])) {
        echo "<h1 style='color: red; font-size: 30px;'>La passw è: " . $_SESSION['passwordGen'] . "</h1>";
    }
    // include 'functions.php';
    // echo generatePassword($numScelto);
    ?>


    <a href="index.php">Clicca qui per generare una nuova password</a>
</body>

</html>