<?php
require_once('./include/db.php');
// print_r($_POST);

$service_name = $_POST['new_service_name'];
$service_details = $_POST['new_service_details'];
$service_icon = $_POST['new_service_icon'];
$id = $_POST['service_id'];
$status = $_POST['new_status'];
$edit_service_submit = $_POST['edit_service_submit'];

if (isset($edit_service_submit)) {
    $db_service_update = "UPDATE services SET service_name = '$service_name', service_details ='$service_details', icon = '$service_icon', status ='$status' WHERE id = $id";
    mysqli_query($db_connect, $db_service_update);
    echo "done";
}