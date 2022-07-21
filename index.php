<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- creo le variabili relative alla stringa e alla sua lunghezza -->
    <?php
        $myString = 'Finché non diverranno coscienti della loro forza, non si ribelleranno e, finché non si ribelleranno, non diverranno coscienti della loro forza.';
        $myStringLength = strlen($myString);
        // parola da eleiminare dall'array
        $badWords = $_GET ['forza'];
        // elimino la parola utilizzando la funzione str_replace dando come parametri (la parola da eliminare, con cosa la voglio eliminare, la variabile interessata)
        $censuredString = str_replace('forza', '***', $myString);
        $censuredStringLength = strlen($censuredString);

    ?>
    <!-- stampo la stringa -->
    <p>
        <!-- stampo la stringa originale -->
        <?php
            echo $myString;
        ?>
    </p>
    <!-- valuto la lunghezza della stringa -->
    <div>
        <?php
        // stampo la lunghezza della stringa originale
           echo "La lunghezza della tua stringa è di $myStringLength caratteri";
        ?>
    </div>

    <!-- stringa censurata -->
    <p>
        <?php
            // stampo la stringa censurata
            echo "La stringa censurata è:  $censuredString"
        ?>
    </p>

    <div>
        <?php
            echo " La lunghezza della stringa censurata è di $censuredStringLength caratteri "
        ?>
    </div>
</body>
</html>