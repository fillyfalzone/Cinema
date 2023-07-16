<?php
    // Class associative Casting qui relie Movie, Actor et Role 
    class Casting {
        private Movie $_movie;  // clé assiative movie
        private Actor $_actor;  // clé assiative actor
        private Role $_role; // clé assiative role
        //construct
        public function __construct(Movie $movie, Actor $actor, Role $role){
            $this->_movie = $movie;
            $movie->addCasting($this); // relier les paramètres de ce construc aux différentes class
            $this->_actor = $actor;
            $actor->addCasting($this);
            $this->_role = $role;  
            $role->addCasting($this);
        }  
        //getters
        public function getMovie(){
            return $this->_movie;
        }  
        public function getActor(){
            return $this->_actor;
        }
        public function  getRole(){
            return $this->_role;
        }
        //setters
        public function setMovie($movie){
            $this->_movie = $movie;
        }
        public function setActor($actor){
            $this->_actor = $actor;
        }
        public function setRole($role){
            $this->_role = $role;
        }

        // fuction toString pour afficher les casting
        public function __toString(){
            return '<br><strong>Casting Infos:</strong> <br>Dans le film : '.$this->_movie->getTitle().', le role de '.$this->_role->getPlayerName().' a été incarné par l\'acteur(trice) '.$this->_actor->getFirstName().' '.$this->_actor->getLastName() ;
        } 
        
    }
?>