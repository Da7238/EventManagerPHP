<?php

class Venue {
    private $idvenue;
    private $name;
    private $capacity;

    public function venueTable() {
        return "             <tr><td>{$this->idvenue}</a></td>
                                 <td>{$this->name}</td><td>{$this->capacity}</td></tr>\n";
    }//venueTable
    // public function venueHeader() {
    //     $db = new DB();
    //     $data = $db->getVenue();
    //     $bigString = "<table border='1'>\n
    //                         <tr><th>ID</th><th>NAME</th><th>CAPACITY</th></tr>\n";
        
    //     foreach($data as $venue) {
    //         $bigString .= $venue->eventTable();
    //     }
    //     $bigString .= "</table?\n";
    //     echo $bigString;
    // }//venueHeader
}