<?php
include_once("conSettings.php");

function startRegister($con, $name, $mail, $phone_number,$password) {
    $query = "SELECT * FROM customers ORDER BY ID DESC LIMIT 1";
    $queryResult = mysqli_query($con, $query);
    if($queryResult->fetch_array() != null) {
        $LastID = $queryResult->fetch_array()['ID'];
    }
    else {
        $LastID = 0;
    }
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $NewID = $LastID + 1;

    $query = "INSERT INTO customers (ID, full_name, phone_number, mail, passw, is_active) VALUES ($NewID, '$name', '$phone_number' ,'$mail', '$password_hash', 1)";
    $queryResult = mysqli_query($con, $query);
    if (!$queryResult) {
        die("Connection error!" . mysqli_error($con));
    }
    if ($queryResult) {
        //TODO: INVOKE USER SUCCESS FIELD
    }
}

if (isset($_POST['register'])) {
    //GET DATA FROM POST;
    $mail_input = $_POST['email'];
    $password_input = $_POST['password'];
    $name_input = $_POST['Name'];
    $phone_number = $_POST['phone'];

    $mail_sanitized = filter_var($mail_input, FILTER_SANITIZE_EMAIL);
    $name_sanitized = filter_var($name_input, FILTER_SANITIZE_SPECIAL_CHARS);
    $password_clear = mysqli_real_escape_string($connection, $password_input);
    $phone_number_sanitized = preg_replace('/[^0-9]/', '', $phone_number);

    $query = "SELECT * FROM customers WHERE mail = '$mail_sanitized'";
    $queryResult = mysqli_query($connection, $query);
    if(!$queryResult) {
        $queryErr = die("Connection error!");
    }
    $queryRowCount = mysqli_num_rows($queryResult);
    if ($queryRowCount >= 1) {
        $ERRTXT = " That mail already exists! ";
    }

    $query = "SELECT * FROM customers WHERE phone_number = '$phone_number_sanitized'";
    $queryResult = mysqli_query($connection, $query);
    if(!$queryResult) {
        $queryErr = die("Connection error!");
    }
    $queryRowCount = mysqli_num_rows($queryResult);
    if ($queryRowCount >= 1) {
        $ERRTXT = " That phone number already exists! ";
    }

    if (preg_match("/^[a-zA-Z ]*$/", $name_sanitized) && preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $password_input) && $ERRTXT == ""){
        startRegister($connection, $name_sanitized, $mail_sanitized, $phone_number_sanitized, $password_clear);
    }

}