<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" rev="stylesheet" href="style.css" type="text/css" />
    <title>Registration</title>
</head>

<body>
    <?php
    var_dump($_SESSION['loggedIn']);
    include("Navigation.php");
    if(isset($_SESSION['loggedIn'])) {

            require_once("PDO.DB.class.php");
            include("ButtonForm.php");

            echo navigation("Welcome to the registration page {$_SESSION['name']}.", "active", "", "");
            echo "<h2>Events</h2>";
            $db = new DB();

            $data = $db->getEvents();

            $bigString = "<table border='1' class='styled-table'>\n
                                    <thead><tr><th>ID</th><th>NAME</th><th>START DATE</th><th>END DATE</th><th>NUMBER ALLOWED</th><th>VENUE</th></tr></thead>\n";

            foreach($data as $event) {
                $bigString .= $event->eventTable();
            }
            $bigString .="</table>\n";
            echo $bigString;

        //----------------------------
        echo "<br/><h2>Attendees</h2>";
        $data = $db->getAttendee();

            $bigString = "<table border='1' class='styled-table'>\n
                                    <thead><tr><th>ID</th><th>NAME</th><th>ROLE</th></tr></thead>\n";

            foreach($data as $attendee) {
                $bigString .= $attendee->attendeeTable();
            }
            $bigString .="</table>\n";
            echo $bigString;
    }
        ?>
    <!--Attendees for events and sessions-->

</body>

</html>