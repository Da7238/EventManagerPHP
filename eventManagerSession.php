<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" rev="stylesheet" href="style/style.css" type="text/css" />
    <title>EventManager</title>
</head>

<body>
    <?php
    include("Navigation.php");
    echo navigation("Admin", "", "", "active");

        require_once("PDO.DB.class.php");
        include("ButtonForm.php");
        //require_once("Event.class.php");
        // require_once("Session.class.php");
        // require_once("Venue.class.php");

        // $eventTable = $event->eventHeader();
        // echo "<br/>";
        // $sessionTable = $session->sessionHeader();
        // echo "<br/>";
        // $venueTable = $venue->venueHeader();

        echo "Events";
        $db = new DB();

        $data = $db->getEvents();

        $bigString = "<table border='1' class='styled-table'>\n
                                <thead><tr><th>ID</th><th>NAME</th><th>START DATE</th><th>END DATE</th><th>NUMBER ALLOWED</th><th>VENUE</th></tr></thead>\n";

        foreach($data as $event) {
            $bigString .= $event->eventTable();
        }
        $bigString .="</table>\n";
        echo $bigString;
        echo "<br>";
        echo '<div class="flex-container">';
        echo addEventButton();
        echo deleteEventButton();
        echo updateEventButton();
        echo "</div>";
        echo "<hr>";
    //----------------------------
        echo "<br/>Sessions";
        $data = $db->getSessions();

        $bigString = "<table border='1' class='styled-table'>\n
                                <thead><tr><th>ID</th><th>NAME</th><th>NUMBER ALLOWED</th><th>EVENT</th><th>START DATE</th><th>END DATE</th></tr></thead>\n";

        foreach($data as $session) {
            $bigString .= $session->sessionTable();
        }
        $bigString .="</table>\n";
        echo $bigString;

    //----------------------------
    echo "<br/>Venues";
    $data = $db->getVenue();

        $bigString = "<table border='1' class='styled-table'>\n
                                <thead><tr><th>ID</th><th>NAME</th><th>CAPACITY</th></tr></thead>\n";

        foreach($data as $venue) {
            $bigString .= $venue->venueTable();
        }
        $bigString .="</table>\n";
        echo $bigString;
    //-----------------------------
    echo "<br/>Attendees";
    $data = $db->getAttendee();

        $bigString = "<table border='1' class='styled-table'>\n
                                <thead><tr><th>ID</th><th>NAME</th><th>PASSWORD</th><th>ROLE</th></tr></thead>\n";

        foreach($data as $attendee) {
            $bigString .= $attendee->attendeeTable();
        }
        $bigString .="</table>\n";
        echo $bigString;
    ?>

</body>

</html>