<?php
    // classe producteur
    // class fille de person
    class Director extends Person {
        private array $_movies; // propriété Tableau qui contiendra la liste des movies du director 
        //fct° construc
        public function  __construct($firstName, $lastName, $birthDate, $gender){
            parent::__construct($firstName, $lastName, $birthDate, $gender); // Propiété de la class mère
            $this->_movies = array(); // array de movie
        }
        // recupérer le flim 
        public function getMovie(){
            return $this->_movies;
        }
        // ajouter de films
        public function addMovie($movie){
            $this->_movies[] = $movie; 
        }
        // Méthode pour lister les movies du director
        public function filmographie(){
            echo $this->_firstName.' '.$this->_lastName.' a réalisé  :<br>';
            foreach($this->_movies as $movie){
                echo '- '.$movie->getTitle().'<br>';
            }
        }
    }
?>