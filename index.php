<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gen Passw</title>
</head>

<body>
    <form style="padding: 100px; font-size: 25px; background-color: violet; text-align: center; height: 100vh; ">
        <label for="">Inserisci numero di caratteri:</label>
        <input type="number" value="num" name="num">
        <input type="submit" value="Invia" style="border-radius: 15px; padding: 10px; width: 100px; background-color: yellow; border: 0px solid;" ;>
    </form>


    <?php
    session_start();

    include 'functions.php';
    $passwordGenerata = generatePassword($numScelto);

    $_SESSION['passwordGen'] = $passwordGenerata;
    if ($numScelto) {
        header('Location: yourpassw.php');
        // echo generatePassword($numScelto);
    }

    ?>
</body>

</html>