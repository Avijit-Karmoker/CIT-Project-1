<?php
require_once("./include/db.php");

$customer_name = $_POST['customer_name'];
$review_details = htmlentities($_POST['review_details'], ENT_QUOTES);
$customer_position = $_POST['customer_position'];
$service_submit = $_POST['service_submit'];
$id = date("Y") . time() . rand(1, 1000);

if (isset($service_submit)) {
    // file name
    $file_name = $_FILES['customer_image']['name'];
    $file_name_after_explode = explode('.', $file_name);
    $file_extention = end($file_name_after_explode);
    $new_file_name = $id . '.' . $file_extention;

    //code for uploaded image location
    $temp_location = $_FILES['customer_image']['tmp_name'];
    $target_location = "../uploads/customer_photo/" . $new_file_name;
    move_uploaded_file($temp_location, $target_location);
    //insert customer photo name in database
    $customer_review_insert_query = "INSERT INTO customer_reviews (customer_name, review_details, customer_position, customer_image) VALUES ('$customer_name','$review_details','$customer_position','$new_file_name')";
    mysqli_query($db_connect, $customer_review_insert_query);
    //end photo add
    $_SESSION['customer_review_add_success_sms'] = "Your review add successfully";
    header("location: customer_review.php");
}