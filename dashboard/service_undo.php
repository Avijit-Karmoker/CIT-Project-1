<?php
$id = $_GET['id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'hw_7');

$db_update_delete_status = "UPDATE services SET delete_status = 'no' WHERE id = $id";
mysqli_query($db_connect, $db_update_delete_status);
// echo "done";
header("location: service_list.php");