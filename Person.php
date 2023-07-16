<?php
    // Class Mère Person de Director et Actor
    class Person {
        protected $_firstName;
        protected $_lastName;
        protected DateTime $_birthDate;
        protected $_gender;
        // fct° constructeur
        public function __construct(string $firstName, string $lastName, string $birthDate, string $gender){
            $this->_firstName = $firstName;
            $this->_lastName = $lastName;
            $this->_birthDate = new DateTime ($birthDate);
            $this->_gender = $gender;
        }
         //getters
         public function getFirstName(){
            return $this->_firstName;
        }
        public function getLastName(){
            return $this->_lastName;
        }
        public function getBirthDate(){
            return $this->_birthDate;
        }
        public function getGender(){
            return $this->_gender;
        }
        //Setters
        public function setFirstName($firstName){
            $this->_firstName = $firstName;
        }
        public function setLastName($lastName){
            $this->_lastName = $lastName;
        }
        public function setBirthDate($birthDate){
            $this->_birthDate = $birthDate;
        }
        public function setGender($gender){
            $this->_gender = $gender;
        }
        //fonction toString
        public function __toString(){
            return '- Metier : Acteur. <br> - Nom : '. $this->_lastName.'<br> - Prénom : '. $this->_firstName.'<br> - Date de naissance : '. $this->_birthDate->format('d-m-Y').'<br> - Genre : '. $this->_gender.'<br>';
        }
    }
?>