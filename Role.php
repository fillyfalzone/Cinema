<?php
    //Classe role hérite de acteur
    class Role {
        private string $_playerName;
        private array $_castings;
       
        
        //fct° constructeur
        public function __construct(string $playerName){
            $this->_playerName = $playerName; 
            $this->_castings = array();            
        }
        //getters
        public function getPlayerName(){
            return $this->_playerName;
        }
        public function  getCasting(){
            return $this->_castings;
        }
      
        //setters
        public function setPlayerFirstName($playerFirstName){
            $this->_playerFirstName = $playerName;
        }
        // 
        public function addCasting($casting){
            $this->_castings[] = $casting;
        }
        
        // Les méthodes
        public function roleByActor(){
            echo '<br>Role : '.$this->_playerName.'  incarné par : <br>';
            foreach($this->_castings as $casting){
                echo '-'. $casting->getActor()->getFirstName().' '.$casting->getActor()->getLastName().' dans le film '.$casting->getMovie()->getTitle().'.<br>';
            }
        }
    }
?>