<?php
session_start();
// print_r($_POST);

$name = $_POST['name'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$flag = false;

// name validation check
// if ($name) {
//     $Name = trim($name);
//     if (ctype_alpha($Name)) {
//         echo "Name is ok.";
//     } else {
//         $flag = true;
//         $_SESSION["name_error"] = "Name cannot contain number.";
//     }
// } else {
//     $flag = true;
//     $_SESSION["name_error"] = "Name field is empty";
// }


//with regular expression
if ($name) {
    if (preg_match("^[a-zA-Z]^", $name)) {
        // echo "Name is ok.";
        $_SESSION['old_name'] = $name;
    } else {
        $flag = true;
        $_SESSION["name_error"] = "Name cannot contain number.";
    }
} else {
    $flag = true;
    $_SESSION["name_error"] = "Name field is empty";
}


//email validation check without regular expression
// if ($email) {
//     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "Email is valid.";
//     } else {
//         $flag = true;
//         $_SESSION["email_error"] = "Please give a correct email address.";
//     }
// } else {
//     header("Location: index.php");
//     $_SESSION["email_error"] = "Email field is empty";
// }


//with regular expression
if ($email) {
    if (preg_match("^[a-zA-Z0-9_!#$%&'*+/=?`{|}~.-]+@[a-zA-Z0-9.-]+$^", $email)) {
        // echo "Email is valid.";
        $_SESSION['old_email'] = $email;
    } else {
        $flag = true;
        $_SESSION["email_error"] = "Please give a correct email address.";
    }
} else {
    $flag = true;
    $_SESSION["email_error"] = "Email field is empty";
}


//password validation check  without regular expression
// if ($password) {
//     if (strlen($password) >=8) {
//         // echo "Password is ok";
//     } else {
//         $flag = true;
//         $_SESSION["password_error"] = "Password must be 8 characters or more.";
//     }
// } else {
//     $flag = true;
//     $_SESSION["password_error"] = "Password field is empty";
// }


//with regular expression
if ($password) {
    if (preg_match("^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$^", $password)) {
        // echo "Password is ok";
    } else {
        $flag = true;
        $_SESSION["password_error"] = "Password must be 8 characters or more.";
    }
} else {
    $flag = true;
    $_SESSION["password_error"] = "Password field is empty";
}


//confirm password validation check
if ($confirm_password) {
    if ($confirm_password == $password) {
        // echo "Both password and confirm passsword are match.";
    } else {
        $flag = true;
        $_SESSION["confirm_password_error"] = "Confirm password dosen't match with password.";
    }
} else {
    $flag = true;
    $_SESSION["confirm_password_error"] = "Confirm password field is empty";
}

if ($flag) {
    header("Location: register.php");
} else {
    $db_connect = mysqli_connect('localhost', 'root', '', 'hw_7');
    $encrypted_passowrd = md5($password);
    // email valid for one time
    $check_email_validation = "SELECT COUNT(*) as 'validity' FROM sign_in_users WHERE email = '$email'";
    $db_check_email_validation = mysqli_query($db_connect, $check_email_validation);
    if (mysqli_fetch_assoc($db_check_email_validation)['validity'] == 1) {
        $_SESSION['email_valid_error'] = "Your email address has already exist";
        header('location: register.php');
    } else {
        $insert_data = "INSERT INTO sign_in_users (name, email, password, phone_no) VALUES ('$name','$email','$encrypted_passowrd', '$phone_no')";
        mysqli_query($db_connect, $insert_data);
        // sms send start
        // $url = "http://66.45.237.70/api.php";
        // $number = $phone_no;
        // $text = "Shama kamon aco?";
        // $data = array(
        //     'username' => "01834833973",
        //     'password' => "TE47RSDM",
        //     'number' => "$number",
        //     'message' => "$text"
        // );
        // $ch = curl_init(); // Initialize cURL
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $smsresult = curl_exec($ch);
        // $p = explode("|", $smsresult);
        // $sendstatus = $p[0];
        // sms send end
        header("Location: login.php");
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["success"] = "$name, Your account created successfully";
    }
}