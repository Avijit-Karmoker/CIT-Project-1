<?php
session_start();
$db_connect = mysqli_connect('localhost', 'root', '', 'hw_7');

//code for update name
if (isset($_POST['name_change'])) {
    //name variable
    $old_name = $_SESSION['s_name'];
    $session_id = $_SESSION['s_id'];
    $updated_name = $_POST['name'];
    $db_name_change_query = "UPDATE sign_in_users SET name='$updated_name' WHERE id = $session_id";
    mysqli_query($db_connect, $db_name_change_query);
    $_SESSION['s_name'] = $updated_name;
    $_SESSION['update_sms'] = "Your name is changed from $old_name to $updated_name";
    header("location: profile.php");
}

//code for update password
if (isset($_POST['current_password_submit'])) {
    //password variable
    $current_password = md5($_POST['current_password']);
    $new_password = $_POST['new_password'];
    $confirm_password = md5($_POST['confirm_password']);
    $password_select_query = "SELECT password FROM sign_in_users WHERE id = $session_id";
    $db_password_query = mysqli_query($db_connect, $password_select_query);
    $db_current_password = mysqli_fetch_assoc($db_password_query)['password'];
    if ($current_password == $db_current_password) {     //current password checking
        if (preg_match("^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$^", $new_password)) {
            $encrypted_new_password = md5($new_password);
            if ($encrypted_new_password == $confirm_password) {       //password match checking
                $db_password_change_query = "UPDATE sign_in_users SET password='$encrypted_new_password' WHERE id = $session_id";
                mysqli_query($db_connect, $db_password_change_query);
                $_SESSION['password_update_sms'] = "Your password update successfully";
                header("location: profile.php");
            } else {
                $_SESSION['password_match_error'] = "Your password dosen't match";
                header("location: profile.php");
            }
        } else {
            $_SESSION['password_error'] = "Password must be contain character, number and special character and length is grater that 8";
            header("location: profile.php");
        }
    } else {
        $_SESSION['current_password_match_error'] = "Your current password dosen't match";
        header("location: profile.php");
    }
}

//code for image upload
if (isset($_POST['image_submit'])) {
    //code for set image name
    $id = $_SESSION['s_id'];
    echo $id;
    $file_name = $_FILES['profile_photo']['name'];
    $file_name_after_explode = explode('.', $file_name);
    $file_extention = end($file_name_after_explode);
    $new_file_name = $id . '.' . $file_extention;
    // $_SESSION['new_file_name'] = $new_file_name;
    //code for uploaded image location
    $temp_location = $_FILES['profile_photo']['tmp_name'];
    $target_location = "../uploads/profile_photos/" . $new_file_name;
    move_uploaded_file($temp_location, $target_location);
    //update profile photo name in database
    $profile_photo_update_query = "UPDATE sign_in_users SET profile_photo_name='$new_file_name' WHERE id = $id";
    mysqli_query($db_connect, $profile_photo_update_query);
    $_SESSION['profile_photo_update_sms'] = "Your profile photo updated successfully";
    header("location: profile.php");
}

//code for add services