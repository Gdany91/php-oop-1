
<?php

class Movie {

    public $title;
    public $director;
    public $length;

    public array $genre;

    public function __construct($title, $director, $length, array $genre){
        $this -> title = $title;
        $this -> director = $director;
        $this -> length = $length;
        $this -> genre = $genre;
    }
    public function getMovieData(){

        return 'title : ' . $this->title .
            '<br> directort : ' . $this->director .
            '<br> lenght : ' . $this->length . '<br><br>' .
            'genres : ' . $this -> GetMovieGenres();

    }

    public function GetMovieGenres(){
        
        $str = '';
        foreach ( $this -> genre as $genre ) {

            $str .= $genre -> GetMovieGenres() ;
        }
            return $str;

        
    }
}

$genre1 = ['dramma', 'splutter'];

$movie1 = new Movie('Arancia meccanica', 'Stanley Kubrick', '138 min', $genre1);

$movie2 = new Movie('Le iene', 'Quentin Tarantino', '130 min', $genre1);


echo "<h1>";
echo $movie1 -> getMovieData();

echo $movie2 -> getMovieData();

echo "</h1>";