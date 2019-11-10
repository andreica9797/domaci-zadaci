<?php

session_start();

if(isset($_SESSION['login']) && $_SESSION ['login'] === true) {
    

    header("Location: /sestidomaci/welcomewel.php");
    exit;
}


if($_SERVER["REQUEST_METHOD"] === "POST") {

    if($_POST['username'] === 'admin' && $_POST["password"] === '123') {
        $_SESSION['login'] = true;
        header("Location: /sedmopredavanje/home.php");
        exit;
    }
    else {
        $loginError = "Wrong username or password";
    }
}







?>

<!doctype html>


<html>
<head>
<title>Login Page </title>

<h1>Welcome to Harry Potter Quiz!</h1>

<form action="login.php" method="post">
<?php if(isset ($loginError)) { ?>
<div>
<?= $loginError ?>


<?php } ?>
<div>

<label for="usernameInput">Please enter your name</label>
</div>
<div>

<input type="text" id="usernameInput" name="username">
</div>
</tr>

<A HREF=house.php>Continue</A>

</form>

