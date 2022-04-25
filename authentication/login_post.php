<?php
session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);
$flag = false;
$db_connect = mysqli_connect('localhost', 'root', '', 'hw_7');
$database_query = "SELECT COUNT(*) AS 'result' FROM sign_in_users WHERE email='$email' AND password='$password'";
$from_db = mysqli_query($db_connect, $database_query);
// print_r(mysqli_fetch_assoc($from_db));

if (mysqli_fetch_assoc($from_db)['result'] == 0) {
    $flag = true;
    $_SESSION['login_error'] = "Your email or password dosen't match";
} else {
    // taking information from database
    $db_email_query = "SELECT id, name, email FROM sign_in_users WHERE email = '$email'";  //datase query by an email
    $from_db = mysqli_query($db_connect, $db_email_query);
    $after_assoc = mysqli_fetch_assoc($from_db);
    $_SESSION['s_id'] = $after_assoc['id'];
    $_SESSION['s_name'] = $after_assoc['name'];
    $_SESSION['s_email'] = $email;
    header("location: ../dashboard/dashboard.php");
}

if ($flag) {
    header("location: login.php");
}