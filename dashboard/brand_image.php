<?php
require_once('./include/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Profile</h1>
                <!-- <p><b><?= ($_SESSION['s_name']) ?></b>(<?= ($_SESSION['s_email']) ?>)</p> -->
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="example-container" style="background: #fff; border: none; padding: 30px;">
            <?php if (isset($_SESSION['photo_update_sms'])) :
            ?>
            <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
                <div class="alert-content">
                    <span class="alert-title">Success!</span>
                    <span class="alert-text"><?= ($_SESSION['photo_update_sms']) ?></span>
                </div>
            </div>
            <?php
                unset($_SESSION["photo_update_sms"]);
            endif;
            ?>
            <form action="brand_image_post.php" method="POST" enctype="multipart/form-data">
                <div class="example-content">
                    <label class="form-label mb-4">Upload Brand Photo</label>
                    <input type="file" class="form-control" name="brand_photo">
                    <button type="submit" class="btn btn-success mt-3" name="brand_image_submit">Upload Image</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once('./include/footer.php');
?>