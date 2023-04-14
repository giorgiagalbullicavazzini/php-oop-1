<?php

class Movie {
    // Class Attributes
    public $title;
    public $year;
    public $length;
    public $genre;
    public $vote;

    // Class Methods
    public function setVote() {
        $this -> vote = rand(80, 100);
    }

    // Class Constructs
    function __construct($title, $year, $length, $genre) {
        $this -> title = $title;
        $this -> year = $year;
        $this -> length = $length;
        $this -> genre = $genre;
        $this -> setVote();
    }
}

// Class instances creation
$sette_anime = new Movie('Sette anime', '2008', '1h 55min', 'Drammatico');
$miglio_verde = new Movie('Il miglio verde', '1999', '3h 09min', 'Drammatico');
$spotlight = new Movie('Il caso Spotlight', '2015', '2h 09min', 'Drammatico');
$shutter_island = new Movie('Shutter Island', '2010', '2h 18min', 'Thriller');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>
    <div class="container">
        <div class="movie">
            <?php echo $sette_anime -> title, ', ', $sette_anime -> year, ', ', $sette_anime -> length, ', ', $sette_anime -> genre, ', ', $sette_anime -> vote; ?>
        </div>
        <div class="movie">
            <?php echo $miglio_verde -> title, ', ', $miglio_verde -> year, ', ', $miglio_verde -> length, ', ', $miglio_verde -> genre, ', ', $miglio_verde -> vote; ?>
        </div>
        <div class="movie">
            <?php echo $spotlight -> title, ', ', $spotlight -> year, ', ', $spotlight -> length, ', ', $spotlight -> genre, ', ', $spotlight -> vote; ?>
        </div>
        <div class="movie">
            <?php echo $shutter_island -> title, ', ', $shutter_island -> year, ', ', $shutter_island -> length, ', ', $shutter_island -> genre, ', ', $shutter_island -> vote; ?>
        </div>
    </div>
</body>

</html>