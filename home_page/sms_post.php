<?php
session_start();
require_once("../dashboard/include/db.php");
// print_r($_POST);
$customer_name = $_POST['customer_name'];
$subject = $_POST['subject'];
$customer_email = $_POST['customer_email'];
$customer_message = $_POST['customer_message'];

$db_customer_sms_insert_query = "INSERT INTO customer_contact (customer_name, subject, customer_email, customer_message) VALUES ('$customer_name', '$subject', '$customer_email','$customer_message')";
mysqli_query($db_connect, $db_customer_sms_insert_query);
$_SESSION["sms_sent"] = "Your sms sent successfully";
header("Location: index.php");