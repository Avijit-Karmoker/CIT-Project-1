<?php
session_start();
print_r($_POST);
require_once('./include/db.php');

$activity_name = $_POST['activity_name'];
$activity_count = $_POST['activity_count'];
$activity_icon = $_POST['activity_icon'];

if (isset($_POST['activity_submit'])) {
    $insert_activity_query = "INSERT INTO activities (activity_name, activity_count, activity_icon) VALUES ('$activity_name','$activity_count','$activity_icon')";
    mysqli_query($db_connect, $insert_activity_query);
    $_SESSION['success_sms'] = "Activity Insert Successfully";
    header('location: activity.php');
}