<?php
session_start();
require_once("./include/db.php");

if (isset($_POST['brand_image_submit'])) {
    $brand_photo_status_insert_query = "INSERT INTO brand_image (status) VALUES ('active')";
    mysqli_query($db_connect, $brand_photo_status_insert_query);
    $id = mysqli_insert_id($db_connect);

    //file name
    $file_name = $_FILES['brand_photo']['name'];
    $file_name_after_explode = explode('.', $file_name);
    $file_extention = end($file_name_after_explode);
    $new_file_name = $id . '.' . $file_extention;
    // $_SESSION['new_file_name'] = $new_file_name;

    //code for uploaded image location
    $temp_location = $_FILES['brand_photo']['tmp_name'];
    $target_location = "../uploads/brand_image/" . $new_file_name;
    move_uploaded_file($temp_location, $target_location);
    //update brand photo name in database
    $brand_image_update_query = "UPDATE brand_image SET brand_image_name = '$new_file_name' WHERE id = $id";
    mysqli_query($db_connect, $brand_image_update_query);
    $_SESSION['photo_update_sms'] = "Your brand photo updated successfully";
    header("location: brand_image.php");
}