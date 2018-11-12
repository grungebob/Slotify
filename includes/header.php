<?php
    include("includes/config.php");
    include("includes/classes/Artist.php");

    //Logs Out: session_destroy();

    if(isset($_SESSION['userLoggedIn'])) {
        $userLoggedIn = $_SESSION['userLoggedIn'];
    } else {
        header("Location: register.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to slotify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <script src="main.js"></script>
</head>
<body>
    HellO!

    <div id = "mainContainer">
        <div id="topContainer">
            <?php include("includes/navBarContainer.php"); ?>

            <div id="mainViewContainer">
                <div id="mainContent">