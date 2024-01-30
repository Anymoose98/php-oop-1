<?php 
    // Definisco la classe generi
    class genere{
        public $genere1;
        public $genere2;
        
        function __construct($genere1 , $genere2){
            $this->genere1 = $genere1;
            $this->genere2 = $genere2;
        }
    }
    // Creo e popolo i generi
    $v_per_vendetta_genere = new genere("Azione" , "Sci-fi");
    $the_wolf_of_wall_street_genere = new genere("Giallo" , "Commedia");
    $La_grande_scommessa_genere = new genere("Commedia" , "Documentario");
    $the_Batman_genere = new genere("Azione" , "Giallo");


    // Definisco la classe film
    class Movie {
        public $titolo;
        public $genere;
        public $anno;

        // Uso il construct per poter aggiungere i dati in maniera più semplice
        function __construct($titolo , genere $genere , $anno){
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->anno = $anno;
        }

        // Metodo per sottrarre 2024 dall'anno di uscita
        public function sottraiAnno() {

            $this->anno =  2024 - $this->anno;
            return $this->anno;
    }
    };


    // Creo e popolo i film
    $v_per_vendetta = new Movie("V per Vendetta" , $v_per_vendetta_genere , 2005 );
    $the_wolf_of_wall_street = new Movie("the wolf of wall street" , $the_wolf_of_wall_street_genere , 2013 );
    $La_grande_scommessa = new Movie("La grande scommessa" , $La_grande_scommessa_genere , 2015);
    $the_Batman = new Movie("The Batman", $the_Batman_genere, 2022);

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-oop</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <h1 class="text-center">Film</h1>
            </div>

            <div class="col-3 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $v_per_vendetta->titolo?></h5>
                            <img src="https://www.cinefacts.it/foto/h!v-per-for-vendetta-poster-locandina-cinefacts.jpg" class="card-img-top" alt="...">
                            <p class="text-center">Il film è uscito <?php echo $v_per_vendetta->sottraiAnno() ?> anni fa</p>
                            <p class="text-center">Il genere è <?php echo $v_per_vendetta->genere->genere1." & ".$v_per_vendetta->genere->genere2  ?></p>
                           
                        </div>
                    </div>
            </div>
            <div class="col-3 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $the_wolf_of_wall_street->titolo?></h5>
                        <img src="https://www.cinefacts.it/foto/h!the-wolf-of-wall-street-locandina-poster-cinefacts.jpg" class="card-img-top" alt="...">
                        <p class="text-center">Il film è uscito <?php echo $the_wolf_of_wall_street->sottraiAnno() ?> anni fa</p>
                        <p class="text-center">Il genere è <?php echo $the_wolf_of_wall_street->genere->genere1." & ".$the_wolf_of_wall_street->genere->genere2  ?></p>
                       
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $La_grande_scommessa->titolo?></h5>
                        <img src="https://pad.mymovies.it/filmclub/2015/09/162/locandinapg1.jpg" class="card-img-top" alt="...">
                        <p class="text-center">Il film è uscito <?php echo $La_grande_scommessa->sottraiAnno() ?> anni fa</p>
                        <p class="text-center">Il genere è <?php echo $La_grande_scommessa->genere->genere1." & ".$La_grande_scommessa->genere->genere2  ?></p>
                       
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $the_Batman->titolo?></h5>
                        <img src="https://pad.mymovies.it/filmclub/2016/04/093/locandinapg1.jpg" class="card-img-top" alt="...">
                        <p class="text-center">Il film è uscito <?php echo $the_Batman->sottraiAnno() ?> anni fa</p>
                        <p class="text-center">Il genere è <?php echo $the_Batman->genere->genere1." & ".$the_Batman->genere->genere2  ?></p>
                       
                    </div>
                </div>
            </div>
                

        </div>
    </div>
</body>
</html>
