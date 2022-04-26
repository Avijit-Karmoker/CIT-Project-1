<?php
require_once("./include/db.php");
// print_r($_POST);

$skill_name = $_POST['skill_name'];
$skill_details = $_POST['skill_details'];
$skill_percentage = $_POST['skill_percentage'];
$skill_submit = $_POST['skill_submit'];

if (isset($skill_submit)) {
    $db_skill_insert_query = "INSERT INTO skills (skill_name, skill_details, skill_percentage) VALUES ('$skill_name','$skill_details','$skill_percentage')";
    mysqli_query($db_connect, $db_skill_insert_query);
    header("Location: add_skills.php");
}