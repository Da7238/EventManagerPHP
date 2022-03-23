<?php
// attempt to make table headings functions; did not work out
require("PDO.DB.class.php");
require("ButtonForm.php");


function displayAdminEventTable() {
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
    echo "<br>";
    echo '<div class="flex-container">';
    echo addEventButton();
    echo deleteEventButton();
    echo updateEventButton();
    echo "</div>";
    echo "<hr>";
}//displayAdminEventTable

function displayAdminVenueTable() {
    $db = new DB();
    echo "<br/>Venues";
    $data = $db->getVenue();

    $bigString = "<table border='1' class='styled-table'>\n
                <thead><tr><th>ID</th><th>NAME</th><th>CAPACITY</th></tr></thead>\n";

    foreach($data as $venue) {
        $bigString .= $venue->venueTable();
    }
    $bigString .="</table>\n";
    echo $bigString;

}//displayAdminVenueTable

function displayAdminSessionTable() {
    $db = new DB();
    echo "<br/>Sessions";
    $data = $db->getSessions();

    $bigString = "<table border='1' class='styled-table'>\n
                <thead><tr><th>ID</th><th>NAME</th><th>NUMBER ALLOWED</th><th>EVENT</th><th>START DATE</th><th>END DATE</th></tr></thead>\n";

    foreach($data as $session) {
        $bigString .= $session->sessionTable();
    }
    $bigString .="</table>\n";
    echo $bigString;

}//displayAdminSessionTable

function displayAdminAttendeeTable() {
    $db = new DB();
    echo "<br/>Attendees";
    $data = $db->getAttendee();

    $bigString = "<table border='1' class='styled-table'>\n
                <thead><tr><th>ID</th><th>NAME</th><th>PASSWORD</th><th>ROLE</th></tr></thead>\n";

    foreach($data as $attendee) {
        $bigString .= $attendee->attendeeTable();
    }
    $bigString .="</table>\n";
    echo $bigString;
    
}//displayAdminAttendeeTable

?>