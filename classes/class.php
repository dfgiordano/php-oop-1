<?php  
//classe
    class Movie {
        public $title;
        public $genre;
        public $year;
        public $language = " ";
        public $runtime;

        //costruttore

        function __construct($title,$genre,$year,$runtime) {
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
            $this->runtime = $runtime;
        }

        // metodi

        public function getLanguage() {
            if ($language = "en") {
                return $this -> language = "Inglese";
            }
        }

    };
?>

