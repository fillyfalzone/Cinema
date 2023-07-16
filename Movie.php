<?php
    //Class film
    class movie {
        private string $_title;
        private DateTime $_PublicationDate;
        private float $_duration;
        private Director $_director; // Clé étrangère de la class Director
        private Type $_type; // Clé étrangère de la class Type
        private string $_synopsis;
        private array $_castings; // Propiéte array of casting 

        public function __construct(string $title, string $publicationDate, int $duration, Director $director, Type $type, string $synopsis) {
            $this->_title = $title;
            $this->_publicationDate = new DateTime($publicationDate);
            $this->_duration = $duration;
            $this->_director = $director;
            $director->addMovie($this); //liaison de la class type à Director
            $this->_type = $type;
            $type->addMovie($this); //liaison de la class type à movie
            $this->_synopsis = $synopsis;
            $this->_castings = array(); //
        }

        // getters
        public function getTitle(){
            return $this->_title;
        }
        public function getPublicationDate(){
            return $this->_publicationDate;
        }
        public function getDuration(){
            return $this->_duration;
        }
        public function getDirector(){
            return $this->_director;
        }
        public function getType(){
            return $this->_type;
        }
        public function getSynopsis(){
            return $this->_synopsis;
        }
        public function getCasting(){
            return $this->_casting;
        }
        
        // setters
        public function setTitle($title){
            $this->_title = $title;
        }
        public function setPublicationDate($publicationDate){
            $this->_publicationDate = $publicationDate;
        }
        public function setDuration($duration){
            $this->_duration = $duration;
        }
        public function setDirector($director){
            $this->_director = $director;
        }
        public function setType($type){
            $this->_type = $type;
        }
        public function setSynopsis($synopsis){
            $this->_synopsis = $synopsis;
        }
        // l'ajout de casting
        public function addCasting($casting){
            $this->_castings[] = $casting;
        }

        // Les méthodes 
        // la fonction toString du film 
        public function __toString(){
            $publicationDate = $this->_publicationDate->format('d, F, Y');
            return '<br>Le film : '. $this->_title.'<br>- Sortie en France : '.$publicationDate. '<br>- Durée : '. $this->_duration.'<br>- Réalisé par : '. $this->_director->getFirstName().' '.$this->_director->getLastName().'<br>- Genre'.$this->_type->getTypeName().'<br>- Synopsis : '. $this->_synopsis;
        }

        // le casting du film
        public function movieInfos(){
            
            echo '<br>Le film : '. $this->_title.'<br>- Sortie en France : '. $this->_publicationDate->format('d-m-Y'). '<br>- Durée : '. $this->_duration.' minutes <br>- Réalisé par : '. $this->_director->getFirstName().' '.$this->_director->getLastName().'.<br>- Genre : '.$this->_type->getTypeName().'.<br>- Synopsis : '. $this->_synopsis.'.<br>- Casting :';
            //Parcourir le tableau casting puor lui attribuer les propriété de la classe demandé.
            foreach($this->_castings as $casting){
                echo '<br>Le role de : '.$casting->getRole()->getPlayerName().' a été incarné par l\'acteur(trice) ---'.$casting->getActor()->getFirstName().' '.$casting->getActor()->getLastName();
            }
        }
       
    }
?>