<!-- header part start -->
<?php
session_start();
if (!isset($_SESSION['s_id'])) {
    header('location: ../authentication/error.php');
}
$page_name = explode('/', $_SERVER['PHP_SELF']);
$id = $_SESSION['s_id'];
require_once("db.php");
$profile_photo_name_query = "SELECT profile_photo_name FROM sign_in_users WHERE id = $id";
$db_profile_photo_name = mysqli_query($db_connect, $profile_photo_name_query);
$profile_photo_name = mysqli_fetch_array($db_profile_photo_name)['profile_photo_name'];
// $_SESSION['profile_photo_name'] = $profile_photo_name;
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
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="../uploads/profile_photos/<?= $profile_photo_name ?>" class="rounded-circle"
                            style="width: 50px; height: 50px;" alt="profile photo" />
                        <span class="activity-indicator"></span>
                        <span class="user-info-text"><?= ($_SESSION['s_name']) ?><br>
                            <!-- <span class="user-state-info"><?= ($_SESSION['s_email']) ?></span> -->
                        </span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="<?= (end($page_name) == 'dashboard.php') ? 'active-page' : '' ?>">
                        <a href="dashboard.php" class="active"><i
                                class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li>
                        <a href="calendar.html"><i class="material-icons-two-tone">calendar_today</i>Calendar<span
                                class="badge rounded-pill badge-success float-end">14</span></a>
                    </li>
                    <li class="<?= (end($page_name) == 'profile.php') ? 'active-page' : '' ?>">
                        <a href="profile.php" class="active"><i class="material-icons-two-tone">face</i>Profile</a>
                    </li>
                    <li>
                        <a href="../home_page/index.php" class="active" target="_blank"><i
                                class="material-icons-two-tone">home</i>Home
                            Page</a>
                    </li>
                    <li
                        class="<?= (end($page_name) == 'add_services.php' || end($page_name) == 'service_list.php') ? 'active-page' : '' ?> ">
                        <a href="./add_services.php"><i class="material-icons-two-tone">design_services</i>Services<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a class="<?= (end($page_name) == 'add_services.php') ? 'active' : '' ?>"
                                    href="./add_services.php">Add Service</a>
                            </li>
                            <li>
                                <a class="<?= (end($page_name) == 'service_list.php') ? 'active' : '' ?>"
                                    href="./service_list.php">Service List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?= (end($page_name) == 'activity.php') ? 'active-page' : '' ?>">
                        <a href="./activity.php"><i class="material-icons-two-tone">local_activity</i>Add Activity</a>
                    </li>
                    <li class="<?= (end($page_name) == 'brand_image.php') ? 'active-page' : '' ?>">
                        <a href="./brand_image.php"><i class="material-icons-two-tone">collections</i>Add Brand
                            Image</a>
                    </li>
                    <li class="<?= (end($page_name) == 'customer_sms.php') ? 'active-page' : '' ?>">
                        <a href="./customer_sms.php"><i class="material-icons-two-tone">email</i>Customer SMS</a>
                    </li>
                    <li class="<?= (end($page_name) == 'add_recent_project.php') ? 'active-page' : '' ?>">
                        <a href="./add_recent_project.php"><i class="material-icons-two-tone">work</i>Add Recent
                            Work</a>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="material-icons-two-tone">widgets</i>Widgets</a>
                    </li>
                    <!-- <li>
                        <a href="#"><i class="material-icons-two-tone">edit</i>Forms<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul>
                            <li>
                                <a href="forms-basic.html">Basic</a>
                            </li>
                            <li>
                                <a href="forms-input-groups.html">Input Groups</a>
                            </li>
                            <li>
                                <a href="forms-input-masks.html">Input Masks</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i
                                            class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu"
                                        aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i
                                                            class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text
                                                    of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i
                                                            class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text
                                                    of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">Create new repository</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a type="button" class="btn btn-danger" href="./logout.php"><span
                                            class="material-icons-outlined d-block">
                                            logout
                                        </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">

                    <!-- header part end  -->