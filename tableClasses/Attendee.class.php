<?php

class Attendee {
    private $idattendee;
    private $name;
    private $role;

    public function attendeeTable() {
        return "             <tr><td>{$this->idattendee}</a></td>
                                 <td>{$this->name}</td><td>{$this->role}</td></tr>\n";
    }
    //getRole
}