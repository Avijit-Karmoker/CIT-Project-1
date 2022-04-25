<?php
session_start();
$project_category = $_POST['project_category'];
$project_name = $_POST['project_name'];
$db_connect = mysqli_connect('localhost', 'root', '', 'hw_7');

print_r($_FILES);
if (isset($_POST['recent_work_submit'])) {
    //insert project_name & project_category into database
    $insert_projects_into_db = "INSERT INTO recent_projects (project_category, project_name) VALUES ('$project_category','$project_name')";
    mysqli_query($db_connect, $insert_projects_into_db);
    $id = mysqli_insert_id($db_connect);

    //file name
    $file_name = $_FILES['project_image']['name'];
    $file_name_after_explode = explode('.', $file_name);
    $file_extention = end($file_name_after_explode);
    $new_file_name = $id . '.' . $file_extention;
    // $_SESSION['new_file_name'] = $new_file_name;

    //code for uploaded image location
    $temp_location = $_FILES['project_image']['tmp_name'];
    $target_location = "../uploads/project_photo/" . $new_file_name;
    move_uploaded_file($temp_location, $target_location);
    //update brand photo name in database
    $project_image_update_query = "UPDATE recent_projects SET project_image = '$new_file_name' WHERE id = $id";
    mysqli_query($db_connect, $project_image_update_query);
    //end photo add
    $_SESSION['project_add_success_sms'] = "Your service add successfully";
    header("location: add_recent_project.php");
}