<?php
//Freya superadmin
//Luke admin
//Marigold eventmanager
//Sarah attendee
//Logan attendee
//Fin attendee
//Tina attendee

    session_name("eventManager");
    session_start();
    $expire = time()+60*10;
    $path = "/~da7238/";
    $domain = "solace.ist.rit.edu";

    require_once("PDO.DB.class.php");

    $db = new DB();

    function showLogin($errorMsg=false, $errorTxt="") {
	if ($errorMsg) {
		echo '<div id="error">'.$errorTxt.'</div>';
	}

    echo '<form id="login" action="login.php" method="post">' .
		 '	<fieldset class="login"> '.
			'<label for=\"name\" class=\"required\">Name: </label>'.
			'<input class="required" name="name" id="name" type="text" size="30"/><br/>'.
			'<label for="password" class="required">Password: </label>'.
			'<input class="required" name="password" id="password" type="text" size="30"/><br/>'.
            '<input name="submit" id="submit" class="submit" type="submit" value="Log In" />'.
            '</fieldset>'.
            '</form>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" rev="stylesheet" href="style.css" type="text/css" />
    <title>Log In</title>
</head>

<body>
    <h1 class="login">Log In</h1>
    <?php
    showLogin();
    
        if(isset($_SESSION['loggedIn'])) {
            //check if they entered a user and password
            header("Location: registrations.php");
        } 
        if(!empty($_POST['name']) && !empty($_POST['password'])) {
                $user = $_POST['name'];
                $password = hash( "sha256", $_POST['password']);
                $attendee = $db->getUserCred($user, $password);
                if(count($attendee) == 1) {
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['role'] = $attendee[0]["role"];
                    $_SESSION['name'] = $attendee[0]["name"];
                    header("Location: registrations.php");
                } else {
                echo "<h2>Invalid login. Try again.</h2>";
                } 
        }
    ?>

</body>

</html>