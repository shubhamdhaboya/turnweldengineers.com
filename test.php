<?php
$mysqli = new mysqli("127.0.0.1", "root", "root", "turnweldengineers", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
$mysqli->close();
