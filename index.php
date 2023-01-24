
<?php

class Movie {

    public $title;
    public $director;
    public $length;

    public function __construct($title, $director, $length ){
        $this -> title = $title;
        $this -> director = $director;
        $this -> length = $length;
    }
    public function getMovieData(){

        return 'title : ' . $this -> title .
            '<br> directort : ' . $this -> director .
            '<br> lenght : ' . $this -> length . '<br><br>';

    }
}

$movie1 = new Movie('Arancia meccanica', 'Stanley Kubrick', '138 min');

$movie2 = new Movie('Le iene', 'Quentin Tarantino', '130 min');

echo "<h1>";
echo $movie1 -> getMovieData();

echo $movie2 -> getMovieData();

echo "</h1>";