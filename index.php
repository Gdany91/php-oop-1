
<?php

class Genre {

    public $nameGenre;

    public function __construct($nameGenre){

        $this->nameGenre = $nameGenre;


    }

    public function getMovieGenres(){

        return $this -> nameGenre;
    }
}
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
            '<br> lenght : ' . $this->length  .
            '<br> genres : ' . $this -> GetMovieGenres() . '<br><br>';

    }

    public function getMovieGenres(){
        
        $str = '';
        foreach ( $this -> genre as $genre ) {

            $str .= $genre -> getMovieGenres()   ;
        }
            return $str;

        
    }
}
$nameGenre1 = new Genre(' Drama');
$nameGenre2 = new Genre(' Splutter');
$nameGenre3 = new Genre(' Comedy');

$genre1 = [$nameGenre1, $nameGenre2];
$genre2 = [$nameGenre2, $nameGenre3];

$movie1 = new Movie('Arancia meccanica', 'Stanley Kubrick', '138 min', $genre1);

$movie2 = new Movie('Le iene', 'Quentin Tarantino', '130 min', $genre2);


echo "<h1>";
echo $movie1 -> getMovieData();

echo $movie2 -> getMovieData();

echo "</h1>";