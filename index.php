<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <?php

    $numScelto = $_GET["num"];
    var_dump($numScelto);

    ?>
</head>

<body>
    <form>
        <label for="">Inserisci numero di caratteri:</label>
        <input type="number" value="num" name="num">
        <input type="submit" value="Invia">
    </form>


    <?php

    //funzione generatePassword() richiede un parametro $length, che rappresenta la lunghezza desiderata per la password da generare.
    function generatePassword($length)
    {
        // $chars contiene una stringa che rappresenta il set di caratteri validi da cui la password può essere composta.
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?.-_,;@/\&%$()';

        //calcola la lunghezza della stringa $chars 
        $count = mb_strlen($chars);

        for ($i = 0, $result = ''; $i < $length; $i++) {

            //rappresenta un indice casuale che corrisponde alla posizione di un carattere nella stringa $chars.
            $index = rand(0, $count - 1);


            /*
            con la funzione mb_substr(), viene estratto il carattere nella posizione indicata dall'indice $index dalla stringa $chars.

            Il carattere estratto viene concatenato al risultato parziale della password, rappresentato dalla variabile $result.

            */
            $result .= mb_substr($chars, $index, 1);
        }

        return $result;
    }

    echo generatePassword($numScelto);
    ?>
</body>

</html>