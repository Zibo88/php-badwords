<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Primo file PHP</title>
</head>
<body>
    
<!-- creo le variabili relative alla stringa e alla sua lunghezza -->
    <div class="container">
        <h2 class="blue">
            Stringa Normale
        </h2>
        <div class="normal-string">
            <?php
                $myString = 'Finché non diverranno coscienti della loro forza, non si ribelleranno e, finché non si ribelleranno, non diverranno coscienti della loro forza.';
                $myStringLength = strlen($myString);
                // parola da eleiminare dall'array
                $badWords = $_GET ['forza'];
                // elimino la parola utilizzando la funzione str_replace dando come parametri (la parola da eliminare, con cosa la voglio eliminare, la variabile interessata)
                $censuredString = str_replace('forza', '***', $myString);
                $censuredStringLength = strlen($censuredString);
            ?>
        
        
            <!-- stringa originale -->
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

        </div>
       
        <!-- stringa censurata -->
        <h2 class="red">
            Stringa Censurata
        </h2>
        <div class="censored-string">
            <p>
                <?php
                    // stampo la stringa censurata
                    echo "La stringa censurata è:  $censuredString"
                ?>
            </p>
            <!-- lunghezza stringa censurata -->
            <div >
                <!-- stmpo la lunghezza della stringa -->
                <?php
                    echo " La lunghezza della stringa censurata è di $censuredStringLength caratteri "
                ?>
            </div>
        </div>
       

        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-xvcESoQiTpfEyV1Ku3-XIKeSbaSFLhlT3A&usqp=CAU" alt="George Orwell - 1984 - img">
    </div>
   
</body>
</html>