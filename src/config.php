<?php

/**
 * Dit bestand bevat de databaseverbinding.
 *
 * @category   Database
 * @package    Connection
 * @author     Daniel Dammers
 */


$servername = "mariadb";
$username = "db_user"; 
$password = "mijn_p@ss#"; 
$dbname = "producten"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
