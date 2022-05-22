<?php
session_start();
// echo (new DateTime("now", new DateTimeZone('Asia/Dhaka')))->format('d-m-Y h:i:s A');
// die();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account?
                <a href="signIn.php">Login</a>
            </p>
            <form action="regestration_post.php" method="POST">
                <div class="auth-credentials m-b-xxl">
                    <label for="signUpUsername" class="form-label">Name</label>
                    <input type="text" class="form-control m-b-md <?php if (isset($_SESSION["name_error"])) {
                                                                        echo "is-invalid";
                                                                    } ?>" id="signUpUsername"
                        aria-describedby="signUpUsername" name="name" placeholder="Enter Name"
                        value="<?= (isset($_SESSION["old_name"])) ? ($_SESSION["old_name"]) : '' ?> ">

                    <!-- php code for show name error -->
                    <?php
                    if (isset($_SESSION["name_error"])) :
                    ?>
                    <div id="emailHelp" class="form-text m-b-md text-danger">
                        <?php
                            echo ($_SESSION["name_error"]);
                            ?>
                    </div>
                    <?php endif; ?>
                    <!-- php code end for show name error -->

                    <label for="signUpEmail" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control m-b-md <?php if (isset($_SESSION["email_error"])) {
                                                                                    echo "is-invalid";
                                                                                } ?>" id="signUpEmail"
                        aria-describedby="signUpEmail" placeholder="example@neptune.com"
                        value="<?= (isset($_SESSION["old_email"])) ? ($_SESSION["old_email"]) : '' ?>">

                    <!-- php code for show email error -->
                    <?php
                    if (isset($_SESSION["email_error"])) :
                    ?>
                    <div id=" emailHelp" class="form-text m-b-md text-danger">
                        <?php
                            echo ($_SESSION["email_error"]);
                            ?>
                    </div>
                    <?php endif; ?>
                    <!-- php code end for show email error -->

                    <!-- php code for show email valid error -->
                    <?php
                    if (isset($_SESSION['email_valid_error'])) :
                    ?>
                    <div class="alert alert-warning" role="alert">
                        <?= ($_SESSION['email_valid_error']); ?>
                    </div>
                    <?php endif; ?>
                    <!-- php code end for show email valid error -->

                    <label class="form-label">Phone Number</label>
                    <input type="text" class="form-control" placeholder="(xxx) xxx-xxxx" name="phone_no">

                    <label for="signUpPassword" class="form-label">Password</label>
                    <input type="password" name="password" id="pass" class="form-control <?php if (isset($_SESSION["password_error"])) {
                                                                                                echo "is-invalid";
                                                                                            } ?>" id="signUpPassword"
                        aria-describedby="signUpPassword" placeholder="Type your password">
                    <div class="mt-3">
                        <input type="checkbox" name="" id="show-password" onclick="myFunction()">
                        <label for="show-password" class="form-label mb-4">Show Password</label>
                    </div>

                    <!-- javascript code for show password -->
                    <script>
                    function myFunction() {
                        var x = document.getElementById("pass");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                    </script>

                    <!-- php code for show password error -->
                    <?php
                    if (isset($_SESSION["password_error"])) :
                    ?>
                    <div id="emailHelp" class="form-text m-b-md text-danger">
                        <?php
                            echo ($_SESSION["password_error"]);
                            ?>
                    </div>
                    <?php
                    // unset($_SESSION["password_error"]);
                    endif; ?>

                    <label for="signUpPassword" class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm-pass"
                        class="form-control <?= (isset($_SESSION["confirm_password_error"])) ? "is-invalid" : ''; ?>"
                        id="signUpPassword" aria-describedby="signUpPassword" placeholder="Type your password again">
                    <div class="mt-3">
                        <input type="checkbox" name="" id="show-conf-password" onclick="myConfirmFunction()">
                        <label for="show-conf-password" class="form-label mb-4">Show Confirm Password</label>
                    </div>

                    <!-- javascript code for show confirm password -->
                    <script>
                    function myConfirmFunction() {
                        var x = document.getElementById("confirm-pass");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                    </script>

                    <!-- php code for show confirm password error -->
                    <?php
                    if (isset($_SESSION["confirm_password_error"])) {
                    ?>
                    <div id="emailHelp" class="form-text m-b-md text-danger">
                        <?php
                            echo ($_SESSION["confirm_password_error"]);
                            ?>
                    </div>
                    <?php
                        // unset($_SESSION["confirm_password_error"]);
                    } ?>

                </div>

                <div class="auth-submit">
                    <button class="btn btn-primary" type="submit">Sign Up</button>
                </div>
            </form>
            <div class="divider"></div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="../assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <script src="../assets/js/main.min.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>

<?php
session_destroy();
?>