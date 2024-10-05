<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
}
$hostname = "localhost";
$user = "root";
$pass = "12345";
$dbname = "grocerydb";
global $ERRTXT;
$connection = mysqli_connect($hostname, $user, $pass, $dbname) or die("Error while connecting MySQL server.");

