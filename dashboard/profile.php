<?php require_once('./include/header.php') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Profile</h1>
                <!-- <p><b><?= ($_SESSION['s_name']) ?></b>(<?= ($_SESSION['s_email']) ?>)</p> -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="example-container" style="background: #fff; border: none !important; padding: 30px;">
                <form action="profile_post.php" method="POST">
                    <div class="example-content">
                        <label class="form-label">Name</label>
                        <p><?= isset($_SESSION['update_sms']) ? $_SESSION['update_sms'] : '' ?></p>
                        <input type="text" class="form-control" name="name" value="<?= ($_SESSION['s_name']); ?>">
                        <button type="submit" class="btn btn-success mt-3" name="name_change">Change</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="example-container" style="background: #fff; border: none; padding: 30px;">
                <?php if (isset($_SESSION['profile_photo_update_sms'])) : ?>
                    <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
                        <div class="alert-content">
                            <span class="alert-title">Success!</span>
                            <span class="alert-text"><?= ($_SESSION['profile_photo_update_sms']) ?></span>
                        </div>
                    </div>
                <?php
                    unset($_SESSION["profile_photo_update_sms"]);
                endif; ?>
                <form action="profile_post.php" method="POST" enctype="multipart/form-data">
                    <div class="example-content">
                        <label class="form-label mb-4">Upload photo</label>
                        <input type="file" class="form-control" name="profile_photo">
                        <button type="submit" class="btn btn-success mt-3" name="image_submit">Upload Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="example-container" style="background: #fff; border: none !important; padding: 30px;">

                <!-- success sms -->
                <?php
                if (isset($_SESSION['password_update_sms'])) :
                ?>
                    <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
                        <div class="alert-content">
                            <span class="alert-title">Success!</span>
                            <span class="alert-text"><?= ($_SESSION['password_update_sms']) ?></span>
                        </div>
                    </div>
                <?php
                    unset($_SESSION["password_update_sms"]);
                endif;
                ?>

                <!-- password match error sms -->
                <?php
                if (isset($_SESSION['password_match_error'])) :
                ?>
                    <div class="alert alert-custom alert-indicator-right indicator-warning" role="alert">
                        <div class="alert-content">
                            <span class="alert-title">Warning!</span>
                            <span class="alert-text"><?= ($_SESSION['password_match_error']) ?></span>
                        </div>
                    </div>
                <?php
                    unset($_SESSION["password_match_error"]);
                endif;
                ?>

                <!-- password error sms -->
                <?php
                if (isset($_SESSION['password_error'])) :
                ?>
                    <div class="alert alert-custom alert-indicator-right indicator-warning" role="alert">
                        <div class="alert-content">
                            <span class="alert-title">Warning!</span>
                            <span class="alert-text"><?= ($_SESSION['password_error']) ?></span>
                        </div>
                    </div>
                <?php
                    unset($_SESSION["password_error"]);
                endif;
                ?>

                <!-- current password match error -->
                <?php
                if (isset($_SESSION['current_password_match_error'])) :
                ?>
                    <div class="alert alert-custom alert-indicator-right indicator-warning" role="alert">
                        <div class="alert-content">
                            <span class="alert-title">Warning!</span>
                            <span class="alert-text"><?= ($_SESSION['current_password_match_error']) ?></span>
                        </div>
                    </div>
                <?php
                    unset($_SESSION["current_password_match_error"]);
                endif;
                ?>

                <!-- form part start -->
                <form action="profile_post.php" method="POST">
                    <div class="example-content">
                        <!-- current password -->
                        <label class="form-label mb-3">Current Password</label>
                        <input type="password" name="current_password" id="pass" class="form-control mb-2" placeholder="Type your current password">
                        <div class="mt-3">
                            <input type="checkbox" name="" id="show-password" onclick="currentPassFunction()">
                            <label for="show-password" class="form-label mb-4">Show Password</label>
                        </div>
                        <!-- javascript code for show password -->
                        <script>
                            function currentPassFunction() {
                                var x = document.getElementById("pass");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>

                        <!-- new password  -->
                        <label class="form-label my-3">New Password</label>
                        <input type="password" name="new_password" id="new_pass" class="form-control mb-2" placeholder="Type your new password">
                        <div class="mt-3">
                            <input type="checkbox" name="" id="show-password" onclick="newPassFunction()">
                            <label for="show-password" class="form-label mb-4">Show Password</label>
                        </div>
                        <!-- javascript code for show password -->
                        <script>
                            function newPassFunction() {
                                var x = document.getElementById("new_pass");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>

                        <!-- confirm new password -->
                        <label class="form-label my-3">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_pass" class="form-control mb-2" placeholder="Type your password again">
                        <div class="mt-3">
                            <input type="checkbox" name="" id="show-password" onclick="confirmPassFunction()">
                            <label for="show-password" class="form-label mb-4">Show Password</label>
                        </div>
                        <!-- javascript code for show password -->
                        <script>
                            function confirmPassFunction() {
                                var x = document.getElementById("confirm_pass");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>

                        <button type="submit" class="btn btn-success mt-3" name="current_password_submit">Submit</button>
                        <div id="settingsCurrentPassword" class="form-text mt-2">Never share your password with anyone.
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once('./include/footer.php') ?>

<!-- $_SESSION['profile_photo_update_sms'] -->