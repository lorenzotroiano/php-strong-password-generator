<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gen Passw</title>
</head>

<body>
    <form>
        <label for="">Inserisci numero di caratteri:</label>
        <input type="number" value="num" name="num">
        <input type="submit" value="Invia" ;>
    </form>


    <?php
    include 'functions.php';
    echo generatePassword($numScelto);

    // if ($numScelto) {
    //     header('Location: yourpassw.php');
    //     echo generatePassword($numScelto);
    // }

    ?>
</body>

</html>