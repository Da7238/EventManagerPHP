<?php

class Session {
    private $idsession;
    private $name;
    private $numberallowed;
    private $event;
    private $startdate;
    private $enddate;

    public function sessionTable() {
        return "             <tr><td>{$this->idsession}</a></td>
                                 <td>{$this->name}</td><td>{$this->numberallowed}</td><td>{$this->event}</td>
                                 <td>{$this->startdate}</td><td>{$this->enddate}</td></tr>\n";
    }//sessionTable
    // public function sessionHeader() {
    //     $db = new DB();
    //     $data = $db->getSessions();
    //     $bigString = "<table border='1'>\n
    //                         <tr><th>ID</th><th>NAME</th><th>NUMBER ALLOWED</th><th>EVENT</th><th>START DATE</th><th>END DATE</th></tr>\n";
        
    //     foreach($data as $session) {
    //         $bigString .= $session->sessionTable();
    //     }
    //     $bigString .= "</table?\n";
    //     echo $bigString;
    // }//sessionHeader
}