<?php 
    // Definisco la classe
    class Movie {
        public $titolo;
        public $genere;
        public $anno;

        // Uso il construct per poter aggiungere i dati in maniera più semplice
        function __construct($titolo , $genere , $anno){
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->anno = $anno;
        }
    }

    // Creo e popolo il nuovo film
    $v_per_vendetta = new Movie("V per Vendetta" , "azione" , "2005" );

    // Prova per vedere se funziona
    echo $v_per_vendetta->titolo ."<br>";
    echo $v_per_vendetta->anno ."<br>";
    echo $v_per_vendetta->genere ."<br>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-oop</title>
</head>
<body>

</body>
</html>