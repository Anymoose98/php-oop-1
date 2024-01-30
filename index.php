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

        // Metodo per sottrarre 2024 dall'anno di uscita
        public function sottraiAnno() {
            $this->anno =  2024 - $this->anno;
    }
    }
    

    // Creo e popolo i film
    $v_per_vendetta = new Movie("V per Vendetta" , "Azione" , 2005 );
    $the_wolf_of_wall_street = new Movie("the wolf of wall street" , "Commedia" , 2013 );
    $La_grande_scommessa = new Movie("La grande scommessa" , "Documentario" , 2015);
    $the_Batman = new Movie("The Batman", "Azione", 2022)
    


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