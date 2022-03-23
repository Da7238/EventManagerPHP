<?php

//EVENTS--------------------
function addEventButton() {
    return <<<HTML
        <!-- <button onclick="toggleForm()" type="button" id="formButton">Add Event</button> -->
        <form id="addEvent">
            <b>Name:</b> <input type="text" name="name">
            <br>
            <b>Start Date: </b><input type="text" name="startDate">
            <br>
            <b>End Date: </b><input type="text" name="endDate">
            <br>
            <b>Number Allowed: </b><input type="text" name="numAllowed">
            <br>
            <b>Venue: </b><input type="text" name="venue">
            <br><br>
            <button type="button" id="submit">Add Event</button>
        </form>
        <!-- <script>
            function toggleForm() {
                var x = document.getElementById("addEvent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }//toggleForm
        </script> -->
HTML;
}//addEventButton
//-------------------------------------------------------------------
function deleteEventButton() {
    return <<<HTML
        <!-- <button onclick="toggleForm()" type="button" id="formButton">Delete Event</button> -->
        <form id="deleteEvent">
            <b>ID:</b> <input type="text" eventID="eventID">
            <br><br>
            <button type="button" id="submit">Delete Event</button>
        </form>
        <!-- <script>
            function toggleForm() {
                var x = document.getElementById("deleteEvent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }//toggleForm
        </script> -->
HTML;

}//deleteEventButton
//-------------------------------------------------------------------

function updateEventButton() {
    return <<<HTML
        <!-- <button onclick="toggleForm()" type="button" id="formButton">Edit Event</button> -->
        <form id="updateEvent">
            <b>Name:</b> <input type="text" name="name">
            <br>
            <b>Start Date: </b><input type="text" name="startDate">
            <br>
            <b>End Date: </b><input type="text" name="endDate">
            <br>
            <b>Number Allowed: </b><input type="text" name="numAllowed">
            <br>
            <b>Venue: </b><input type="text" name="venue">
            <br><br>
            <button type="button" id="submit">Edit Event</button>
        </form>
        <!-- <script>
            function toggleForm() {
                var x = document.getElementById("updateEvent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }//toggleForm
        </script> -->
    
HTML;
}//updateEventButton
//-------------------------------------------------------------------

function displayEventForms() {
    echo "<br>";
        echo '<div class="flex-container">';
        echo addEventButton();
        echo deleteEventButton();
        echo updateEventButton();
        echo "</div>";
        echo "<hr>";
}//displayEventForms

//------------------------------------------------------------------------------------------------

//SESIIONS-------------------
function addSessionsButton() {
    return <<<HTML
        <!-- <button onclick="toggleForm()" type="button" id="formButton">Add Event</button> -->
        <form id="addSession">
            <b>Name:</b> <input type="text" name="name">
            <br>
            <b>Number Allowed: </b><input type="text" name="numAllowed">
            <br>
            <b>Event: </b><input type="text" name="event">
            <br>
            <b>Start Date: </b><input type="text" name="startDate">
            <br>
            <b>End Date: </b><input type="text" name="endDate">
            <br><br>
            <button type="button" id="submit">Add Session</button>
        </form>
        <!-- <script>
            function toggleForm() {
                var x = document.getElementById("addEvent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }//toggleForm
        </script> -->
HTML;
}//addSessionsButton
//-------------------------------------------------------------------
function deleteSessionsButton() {
    return <<<HTML
        <!-- <button onclick="toggleForm()" type="button" id="formButton">Delete Event</button> -->
        <form id="deleteSession">
            <b>ID:</b> <input type="text" sessionID="sessionID">
            <br><br>
            <button type="button" id="submit">Delete Session</button>
        </form>
        <!-- <script>
            function toggleForm() {
                var x = document.getElementById("deleteEvent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }//toggleForm
        </script> -->
HTML;

}//deleteSessionsButton
//-------------------------------------------------------------------

function updateSessionsButton() {
    return <<<HTML
        <!-- <button onclick="toggleForm()" type="button" id="formButton">Edit Session</button> -->
        <form id="updateSession">
            <b>Name:</b> <input type="text" name="name">
            <br>
            <b>Number Allowed: </b><input type="text" name="numAllowed">
            <br>
            <b>Event: </b><input type="text" name="event">
            <br>
            <b>Start Date: </b><input type="text" name="startDate">
            <br>
            <b>End Date: </b><input type="text" name="endDate">
            <br><br>
            <button type="button" id="submit">Edit Session</button>
        </form>
        <!-- <script>
            function toggleForm() {
                var x = document.getElementById("updateEvent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }//toggleForm
        </script> -->
    
HTML;
}//updateSessionsButton
//-------------------------------------------------------------------

function displaySessionsForms() {
    echo "<br>";
        echo '<div class="flex-container">';
        echo addSessionsButton();
        echo deleteSessionsButton();
        echo updateSessionsButton();
        echo "</div>";
        echo "<hr>";
}//displaySessionsForms

//------------------------------------------------------------------------------------------------

//Venues-------------------
function addVenuesButton() {
    return <<<HTML
        <!-- <button onclick="toggleForm()" type="button" id="formButton">Add Event</button> -->
        <form id="addSession">
            <b>Name:</b> <input type="text" name="name">
            <br>
            <b>Capacity: </b><input type="text" name="capacity">
            <br><br>
            <button type="button" id="submit">Add Venue</button>
        </form>
        <!-- <script>
            function toggleForm() {
                var x = document.getElementById("addEvent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }//toggleForm
        </script> -->
HTML;
}//addVenueButton
//-------------------------------------------------------------------
function deleteVenuesButton() {
    return <<<HTML
        <!-- <button onclick="toggleForm()" type="button" id="formButton">Delete Event</button> -->
        <form id="deleteVenue">
            <b>ID:</b> <input type="text" venueID="venueID">
            <br><br>
            <button type="button" id="submit">Delete Venue</button>
        </form>
        <!-- <script>
            function toggleForm() {
                var x = document.getElementById("deleteEvent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }//toggleForm
        </script> -->
HTML;

}//deleteVenueButton
//-------------------------------------------------------------------

function updateVenuesButton() {
    return <<<HTML
        <!-- <button onclick="toggleForm()" type="button" id="formButton">Edit Session</button> -->
        <form id="updateVenue">
            <b>Name:</b> <input type="text" name="name">
            <br>
            <b>Capacity: </b><input type="text" name="capacity">
            <br><br>
            <button type="button" id="submit">Edit Venue</button>
        </form>
        <!-- <script>
            function toggleForm() {
                var x = document.getElementById("updateEvent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }//toggleForm
        </script> -->
    
HTML;
}//updateVenuesButton
//-------------------------------------------------------------------

function displayVenuesForms() {
    echo "<br>";
        echo '<div class="flex-container">';
        echo addVenuesButton();
        echo deleteVenuesButton();
        echo updateVenuesButton();
        echo "</div>";
        echo "<hr>";
}//displayVenuesForms

//------------------------------------------------------------------------------------------------

//SESIIONS-------------------
function addAttendeesButton() {
    return <<<HTML
        <!-- <button onclick="toggleForm()" type="button" id="formButton">Add Event</button> -->
        <form id="addSession">
            <b>Name:</b> <input type="text" name="name">
            <br>
            <b>Role: </b><input type="text" name="role">
            <br><br>
            <button type="button" id="submit">Add Attendee</button>
        </form>
        <!-- <script>
            function toggleForm() {
                var x = document.getElementById("addEvent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }//toggleForm
        </script> -->
HTML;
}//addAttendeesButton
//-------------------------------------------------------------------
function deleteAttendeesButton() {
    return <<<HTML
        <!-- <button onclick="toggleForm()" type="button" id="formButton">Delete Event</button> -->
        <form id="deleteAttendee">
            <b>ID:</b> <input type="text" attendeeID="attendeeID">
            <br><br>
            <button type="button" id="submit">Delete Attendee</button>
        </form>
        <!-- <script>
            function toggleForm() {
                var x = document.getElementById("deleteEvent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }//toggleForm
        </script> -->
HTML;

}//deleteAttendeesButton
//-------------------------------------------------------------------

function updateAttendeesButton() {
    return <<<HTML
        <!-- <button onclick="toggleForm()" type="button" id="formButton">Edit Session</button> -->
        <form id="updateAttendee">
            <b>Name:</b> <input type="text" name="name">
            <br>
            <b>Role: </b><input type="text" name="role">
            <br><br>
            <button type="button" id="submit">Edit Attendee</button>
        </form>
        <!-- <script>
            function toggleForm() {
                var x = document.getElementById("updateEvent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }//toggleForm
        </script> -->
    
HTML;
}//updateAttendeesButton
//-------------------------------------------------------------------

function displayAttendeesForms() {
    echo "<br>";
        echo '<div class="flex-container">';
        echo addAttendeesButton();
        echo deleteAttendeesButton();
        echo updateAttendeesButton();
        echo "</div>";
}//displayAttendeesForms