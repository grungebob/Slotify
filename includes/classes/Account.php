<?php
    class Account {

        private $errorArray;

        public function __construct() {
            $this->errorArray = array();
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastname($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);
        }

        private function validateUsername($un) {
            
            if(strlen($un)> 25 || strlen($un) <5) {
                array_push($this->errorArray, "Your username must be between five and 25 characters");
                return;
            }           
        }
        private function validateFirstName($fn) {
    
        }
        private function validateLastName($ln) {
    
        }
        private function validateEmails($em, $em2) {
    
        }
    
        private function validatePasswords($pw, $pw2) {
    
        }
    }
?>