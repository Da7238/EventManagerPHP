<?php

class Event {
    private $idevent;
    private $name;
    private $datestart;
    private $dateend;
    private $numberallowed;
    private $venue;

    public function eventTable() {
        return "             <tr><td>{$this->idevent}</a></td>
                                 <td>{$this->name}</td><td>{$this->datestart}</td><td>{$this->dateend}</td>
                                 <td>{$this->numberallowed}</td><td>{$this->venue}</td></tr>\n";
    }//venueTable

    // public function eventHeader() {
    //     $db = new DB();
    //     $data = $db->getEvents();
    //     $bigString = "<table border='1'>\n
    //                         <tr><th>ID</th><th>NAME</th><th>START DATE</th><th>END DATE</th><th>NUMBER ALLOWED</th><th>VENUE</th></tr>\n";
        
    //     foreach($data as $event) {
    //         $bigString .= $event->eventTable();
    //     }
    //     $bigString .= "</table?\n";
    //     echo $bigString;
    // }//eventHeader
}