<?php
require_once("./include/db.php");
$checked = $_POST['service_check'];
foreach ($checked as $key => $id) {
    $check_delete_query = "UPDATE services SET delete_status = 'yes' WHERE id = $id";
    mysqli_query($db_connect, $check_delete_query);
}
header("location: service_list.php");