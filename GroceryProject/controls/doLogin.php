<?php
include_once("conSettings.php");

function startLogin($con, $mail, $passwrd) {
    $SQL = "SELECT * FROM customers WHERE mail = '$mail'";
    $queryRes = mysqli_query($con ,$SQL);
    $rowCount = mysqli_num_rows($queryRes);
    if (!$queryRes) {
        $queryErr = die("Couldn't find any data");
    }
    if ($rowCount <= 0) {
        //TODO: Invoke user error field: ACCOUNT NOT FOUND
        $ERRTXT = "User not found";
    }
    while($row = mysqli_fetch_array($queryRes)) {
        $id = $row['ID'];
        $fullname = $row['full_name'];
        $phone_number = $row['phone_number'];
        $mail = $row['mail'];
        $birth_date = $row['birth_date'];
        $pwrd = $row['passw'];
        $is_active = $row['is_active'];
    }
    $password = password_verify($passwrd, $pwrd);
    echo $password;
    if ($is_active == '1') {
        if($mail == $mail && $passwrd == $password) {
            header("Location: ./main.php");
            $_SESSION['id'] = $id;
            $_SESSION['full_name'] = $fullname;
            $_SESSION['mail'] = $mail;
            //TODO: SESSION TOKEN;
        }
        else {
            //TODO: INVOKE USER ERROR FIELD: ERROR WRONG PASS
        }
    }
}

if (isset($_POST['login'])) {
    $email_log = $_POST['email'];
    $pass_log = $_POST['password'];

    $user_email = filter_var($email_log, FILTER_SANITIZE_EMAIL);
    $pswd = mysqli_real_escape_string($connection, $pass_log);

    if (preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $pswd)){
        //TODO: Invoke user error field: PASSWORD DOESN'T QUALIFY REQUIREMENTS
        startLogin($connection, $user_email, $pswd);
    }
    $ERRTXT = "Password doesn't qualify requirements.";

}

