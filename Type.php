<?php
    // classe genre
    class Type {
        private string $_typeName;
        private array $_movies;
    
        public function __construct(string $typeName) {
            $this->_typeName = $typeName;
            $this->_movies = array();

        }
    
        //getters 
        public function getTypeName(){
            return $this->_typeName;
        }
        public function getMovie(){
            return $this->_movies;
        }

        // setter et add movies
        public function setTypeName($typeName){
            $this->_typeName = $typeName;
        }
        public function addMovie($movie){
            $this->_movies[] = $movie;
        }
        // Les méthodes
        // Lister les films par genre
        public function movieByType(){
            echo '<br> Genre de film : '.$this->_typeName.'<br> Exemple : ';
            foreach($this->_movies as $movie){
                echo ' / '.$movie->getTitle();
            }
        }

    }
?>