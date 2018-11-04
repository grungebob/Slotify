<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");

    $account = new Account($con);

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function getInputValue($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Slotify</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. drizzyDrake" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="yourpassword" required>
            </p>

            <button type="submit" name="loginButton">Log In</button>

        </form>

        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
               <?php echo $account->getError(Constants::$userNameCharacters); ?>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. drizzyDrake" value="<?php getInputValue('username') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                <label for="firstname">First Name</label>
                <input id="firstname" name="firstName" type="text" placeholder="e.g. Aubrey" value="<?php getInputValue('firstname') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                <label for="lastName">last Name</label>
                <input id="lastName" name="lastName" type="text" placeholder="e.g. Graham" value="<?php getInputValue('lastname') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                <?php echo $account->getError(Constants::$emailInvalid); ?>
                <label for="email">email</label>
                <input id="email" name="email" type="email" placeholder="e.g. champagnepapi@gmail.com" value="<?php getInputValue('email') ?>" required>
            </p>
            <p>
                <label for="email2">email confirm</label>
                <input id="email2" name="email2" type="email" placeholder="e.g. champagnepapi@gmail.com"   value="<?php getInputValue('email2') ?>" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
                <?php echo $account->getError(Constants::$passwordNotAlphaNumeric); ?>
                <?php echo $account->getError(Constants::$passwordCharacters); ?>

                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="yourpassword" required>
            </p>
            <p>
                <label for="password2">confirm password</label>
                <input id="password2" name="password2" type="password" placeholder="yourpassword" required>
            </p>

            <button type="submit" name="registerButton">Sign Up</button>

        </form>
    </div>
</body>
</html>