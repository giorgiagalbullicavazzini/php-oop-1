<?php

class Movie {
    public $title;
    public $year;
    public $length;
    public $genre;

    function __construct($title, $year, $length, $genre) {
        $this -> title = $title;
        $this -> year = $year;
        $this -> length = $length;
        $this -> genre = $genre;
    }
}