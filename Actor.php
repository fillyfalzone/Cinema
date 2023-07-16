<?php
    //class acteur
    class Actor extends Person {
        private array $_castings; // Clé étrangère de la Class assosiative Casting

        
        //fct° constructeur 
        public function  __construct($firstName, $lastName, $birthDate, $gender){
            parent::__construct($firstName, $lastName, $birthDate, $gender);
            $this->_castings = array(); // liste de Casting lié à l'acteur
        }
        
        // recupérer les castings de l'acteur
        public function getCastings(){
            return $this->_castings;
        }
        // fct° d'ajout de casting
        public function addCasting($casting){
            $this->_castings[] = $casting;
        }
        // function toString
        public function __toString(){
            return '- Metier : Acteur. <br> - Nom : '. $this->_lastName.'<br> - Prénom : '. $this->_firstName.'<br> - Date de naissance : '. $this->_birthDate->format('d-m-Y').'<br> - Genre : '. $this->_gender.'<br>';
        }
        // la méthodes filmographie   d'un acteur
        public function filmographie(){
            echo $this->_firstName.' '.$this->_lastName.' a joué(e) dans :<br>';
            foreach($this->_castings as $casting){
                echo '- '.$casting->getMovie()->getTitle().'<br>';
            }
        }
        
    }
?>