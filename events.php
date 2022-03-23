<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" rev="stylesheet" href="style.css" type="text/css" />
    <title>Events</title>
</head>

<body>
    <?php
    include("Navigation.php");
    echo navigation("Events", "", "active", "");
  
        require_once("PDO.DB.class.php");
        include("ButtonForm.php");

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
        echo "<br/><h2>Sessions</h2>";
        $data = $db->getSessions();

        $bigString = "<table border='1' class='styled-table'>\n
                                <thead><tr><th>ID</th><th>NAME</th><th>NUMBER ALLOWED</th><th>EVENT</th><th>START DATE</th><th>END DATE</th></tr></thead>\n";

        foreach($data as $session) {
            $bigString .= $session->sessionTable();
        }
        $bigString .="</table>\n";
        echo $bigString;

    //----------------------------
    echo "<br/><h2>Venues</h2>";
    $data = $db->getVenue();

        $bigString = "<table border='1' class='styled-table'>\n
                                <thead><tr><th>ID</th><th>NAME</th><th>CAPACITY</th></tr></thead>\n";

        foreach($data as $venue) {
            $bigString .= $venue->venueTable();
        }
        $bigString .="</table>\n";
        echo $bigString;
    //-----------------------------
        ?>
    <!--listing of events with session schedule and venue location-->

</body>

</html>