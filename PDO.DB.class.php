<?php
class DB {

    private $dbh;

    function __construct() {
        try {
            $this->dbh = new PDO("mysql:host={$_SERVER['DB_SERVER']};dbname={$_SERVER['DB']}" ,$_SERVER['DB_USER'], $_SERVER['DB_PASSWORD']);
        } catch (PDOException $pe) {
            echo $pe->getMessage(); //in real life don't actually echo out the exact message
            die("Bad Database");
        }//catch
    }//contruct

//getUserCred

function getUserCred($user, $password) {
    try {
        $data = array();

        $stmt = $this->dbh->prepare("select role, name from attendee where name = :user and password = :password");
        $stmt->execute(array("user" =>$user, "password" =>$password));
        while ($row = $stmt->fetch()) {
            $data[] = $row;
        }
        return $data;
    } catch(PDOException $pe) {
        echo $pe->getMessage();
        return $data;
    }

}
//getEvents-----------------------------
function getEvents() {
        try {
            $data = array();
            include ("tableClasses/Event.class.php");
            $stmt = $this->dbh->prepare("select * from event");

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, "Event"); // returns a phonenumber object instead of an array

            while ($event = $stmt->fetch()) {
                $data[] = $event; //single dimension array
            }//while
            return $data;

        }catch(PDOException $pe) {
            echo $pe->getMessage();
            return array();
        }//catch
    }//getEvents

//getVenue-------------------------------
    function getVenue() {
        try {
            $data = array();
            include ("tableClasses/Venue.class.php");
            $stmt = $this->dbh->prepare("select * from venue");

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, "Venue");

            while ($venue = $stmt->fetch()) {
                $data[] = $venue; 
            }//while
            return $data;

        }catch(PDOException $pe) {
            echo $pe->getMessage();
            return array();
        }//catch
    }//getVenue

//getSession------------------------------
    function getSessions() {
        try {
            $data = array();
            include ("tableClasses/Session.class.php");
            $stmt = $this->dbh->prepare("select * from session");

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, "Session");

            while ($session = $stmt->fetch()) {
                $data[] = $session;
            }//while
            return $data;

        }catch(PDOException $pe) {
            echo $pe->getMessage();
            return array();
        }//catch
    }//getSession

//getAttendee-------------------------------
function getAttendee() {
        try {
            $data = array();
            include ("tableClasses/Attendee.class.php");
            $stmt = $this->dbh->prepare("select idattendee, name, role from attendee");

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, "Attendee");

            while ($session = $stmt->fetch()) {
                $data[] = $session;
            }//while
            return $data;

        }catch(PDOException $pe) {
            echo $pe->getMessage();
            return array();
        }//catch
    }//getAttendee

//getEventVenueSession----------------------------------
function getEventVenueSession() {
    $data = array();
    $stmt = $this->dbh->prepare("select e.idevent as 'EventID', e.name as 'Event', v.name as 'Venue', s.name as 'Session',
     e.datestart as 'Start Date', e.dateend as 'End Date', e.numberallowed as '# Of People Allowed'
    from event as e
    join venue as v
    on e.venue = v.idvenue
    join session as s
    on s.event = e.idevent;");
    $stmt->execute();

    while ($row = $stmt->fetch()) {
        $data[] = $row;       
    }
    return $data;

}//getEventVenueSession

//addUser-------------------------------------
function addUser($name, $password, $role) {
    try {
        $stmt = $this->dbh->prepare("insert into attendee (name, password, role) values (:name, :password, :role)");
        $stmt->execute(array(
            "name" => $name,
            "password" => $password,
            "role" => $role
        ));
        return $this->dbh->lastInsertId();
    }catch(PDOException $pe) {
        echo $pe->getMessage();
        return -1;
    }//catch
}//adduser
//addVenue
//addEvent
//addSession
//addAttendee

//deleteUser

function deleteUser($id) {
    try{
        $stmt = $this->dbh->prepare("delete from attendee where id=?");
        $stmt->execute([$id]);

        return $this->dbh->lastInsertId();

    }catch(PDOException $pe) {
        echo $pe->getMessage();
        return -1;
    }
}

//deleteVenue
//deleteEvent
//deleteSession
//deleteAttendee

//updateUser
//updateVenue
//updateEvent
//updateSession
//updateAttendee

}//DB