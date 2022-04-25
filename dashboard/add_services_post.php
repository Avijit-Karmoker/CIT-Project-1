<?php
session_start();
// print_r($_POST);
$service_name = $_POST['service_name'];
$service_details = $_POST['service_details'];
$service_icon = $_POST['service_icon'];
$status = ucfirst($_POST['status']);
$db_connect = mysqli_connect('localhost', 'root', '', 'hw_7');

if (isset($_POST['service_submit'])) {
    $insert_services_into_db = "INSERT INTO services (service_name, service_details, icon, status) VALUES ('$service_name','$service_details','$service_icon','$status')";
    mysqli_query($db_connect, $insert_services_into_db);
    $_SESSION['service_add_success_sms'] = "Your service add successfully";
    header("location: service_list.php");
}
