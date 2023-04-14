<?php

class Movie
{
    // Class Attributes
    public $title;
    public $year;
    public $length;
    public $genre;
    public $vote;

    // Class Methods
    public function setVote()
    {
        $this->vote = rand(80, 100);
    }

    // Class Constructs
    function __construct($title, $year, $length, array $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->length = $length;
        $this->genre = $genre;
        $this->setVote();
    }
}

// Class instances creation
$sette_anime = new Movie('Sette anime', '2008', '1h 55min', ['Drammatico']);
$miglio_verde = new Movie('Il miglio verde', '1999', '3h 09min', ['Poliziesco', 'Drammatico', 'Fantastico']);
$spotlight = new Movie('Il caso Spotlight', '2015', '2h 09min', ['Biografico', 'Poliziesco', 'Drammatico']);
$shutter_island = new Movie('Shutter Island', '2010', '2h 18min', ['Giallo', 'Thriller']);

// Insert movies into an array
$movies = [$sette_anime, $miglio_verde, $spotlight, $shutter_island];

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
            <?php
                // Print all movies
                foreach ($movies as $movie) {
                    // Print all movie keys
                    foreach ($movie as $key => $value) {
                        if ($key == 'genre') {
                            foreach ($value as $genre) {
                                echo $genre, ' - ';
                            };
                        } elseif ($key == 'vote') {
                            echo $value;
                        } else {
                            echo $value, ' - ';
                        }
                    }

                    // Break line after each movie
                    echo nl2br("\n");
                }
            ?>
        </div>
    </div>
</body>

</html>