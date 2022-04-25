<?php
// print_r($_POST);
// post method delete
// $id = $_POST['id'];
// if (isset($_POST['delete'])) {
//     $db_data_delete_query = "DELETE FROM services WHERE id = $id";
//     mysqli_query($db_connect, $db_data_delete_query);
//     header("location: service_list.php");
// }

// link method delete
$id = $_GET['id'];
$db_connect = mysqli_connect('localhost', 'root', '', 'hw_7');

$db_data_delete_query = "DELETE FROM services WHERE id = $id";
mysqli_query($db_connect, $db_data_delete_query);
header("location: service_list.php");