<?php
    class Account {

        private $errorArray;

        public function __construct() {
            $this->errorArray = array();
        }

        public function register($username, $firstName, $lastName, $email, $email2, $password, $password2) {
            $this->validateUsername($username);
			$this->validateFirstName($firstName);
			$this->validateLastName($lastName);
			$this->validateEmails($email, $email2);
            $this->validatePasswords($password, $password2);
            
            if(empty($this->errorArray)) {
                //Insert into db
                return true;

            } else {
                return false;
            }
        }

        public function getError($error) {
            if (!in_array($error, $this->errorArray)) {
                $error = "";
            }
            return "<span class = 'errorMessage'>$error</span>";
        }

        private function validateUsername($un) {
            
            if(strlen($un)> 25 || strlen($un) <5) {
                array_push($this->errorArray, "Your username must be between five and 25 characters");
                return;
            }
            
            //TODO: check if username exists
        }
        private function validateFirstName($fn) {
            if(strlen($fn)> 25 || strlen($fn) <2) {
                array_push($this->errorArray, "Your first name must be between 2 and 25 characters");
                return;
            }
    
        }
        private function validateLastName($ln) {
            if(strlen($ln)> 25 || strlen($ln) <2) {
                array_push($this->errorArray, "Your last name must be between 2 and 25 characters");
                return;
            }
    
        }
        private function validateEmails($em, $em2) {
            if($em != $em2) {
                array_push($this->errorArray, "Your emails don't match");
                return;
            }
            if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorArray, "Email invalid yo");
                return;
            }

            //TODO: Check that username hasn't already been used
    
        }
    
        private function validatePasswords($pw, $pw2) {
            if($pw != $pw2) {
                array_push($this->errorArray, "your passwords don't match silly");
                return;
            }
            if (preg_match('/[^A-Za-z0-9]/', $pw)) {
                array_push($this->errorArray, "your password gotta be alphanumeric b");
                return;
            }

            if(strlen($pw)> 25 || strlen($pw) <5) {
                array_push($this->errorArray, "Your password must be between five and 25 characters");
                return;
            }
    
        }
    }
?>