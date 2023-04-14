<?php

class Movie {
    // Class Attributes
    public $title;
    public $year;
    public $length;
    public $genre;
    public $vote;

    // Class methods
    public function setVote() {
        $this -> vote = rand(0, 100);
    }

    // Class Constructs
    function __construct($title, $year, $length, $genre) {
        $this -> title = $title;
        $this -> year = $year;
        $this -> length = $length;
        $this -> genre = $genre;
    }
}