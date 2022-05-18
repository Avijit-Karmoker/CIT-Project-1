<?php 
session_start();
include "./include/db.php";
foreach ($_POST as $settings_name => $settings_value) {
    $value = htmlentities($settings_value, ENT_QUOTES);
    $settings_update_query = "UPDATE settings SET settings_value ='$value' WHERE settings_name = '$settings_name'";
    mysqli_query($db_connect, $settings_update_query);
}
$_SESSION['settings_update_success_sms'] = "Settings updated successfully";
header("location: settings.php");