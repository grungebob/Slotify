<?php

    function sanitizeFormUsername($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        return $inputText;
    }

    function sanitizeFormString($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        $inputText = ucfirst(strtolower($inputText));
        return $inputText;
    }
    function sanitizeFormPassword($inputText){
        $inputText = strip_tags($inputText);
        return $inputText;
    }



    if(isset($_POST['registerButton'])){
        //register button was pressed
        //echo "register button was pressed";
        // $username = $_POST['username'];
        // // echo $username;
        // $username = strip_tags($username);
        // $username = str_repalce(" ", "", $username);

        // $firstName = $_POST['firstName'];
        // $firstName = strip_tags($firstName);
        // $firstName = str_repalce(" ", "", $firstName);
        // $firstName = ucfirst(strtolower($firstName));

        $username = sanitizeFormUsername($_POST['username']);
        $firstName = sanitizeFormString($_POST['firstName']);
        $lastName = sanitizeFormString($_POST['lastName']);
        $email = sanitizeFormString($_POST['email']);
        $email2 = sanitizeFormString($_POST['email2']);

        $password = sanitizeFormString($_POST['password']);
        $password2 = sanitizeFormString($_POST['password2']);

        $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

        if($wasSuccessful == true) {
            header("Location: index.php");
        }
    }

?>