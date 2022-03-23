<?php

function navigation ($title, $reg, $events, $admin) {
   return <<<HTML
    <div class="nav">
        <a class="{$reg}" href="registrations.php">Registration</a>
        <a class="{$events}" href="events.php">Events</a>
        <a class="{$admin}" href="admin.php">Admin</a>
        <a class="logout" href="logout.php">Logout</a>
    </div>
    <h1>{$title}</h1>
HTML;
}
?>