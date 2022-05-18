<?php include ("./include/header.php") ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Customer Service</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="example-container" style="background: #fff; border: none !important; padding: 30px;">

                <!-- success sms -->
                <?php
                if (isset($_SESSION['settings_update_success_sms'])) :
                ?>
                <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
                    <div class="alert-content">
                        <span class="alert-title">Success!</span>
                        <span class="alert-text"><?= ($_SESSION['settings_update_success_sms']) ?></span>
                    </div>
                </div>
                <?php
                    unset($_SESSION["settings_update_success_sms"]);
                endif;
                ?>

                <form action="settings_edit_post.php" method="POST" enctype="multipart/form-data">
                    <div class="example-content">
                        <?php
                        //get everything of settings from db
                        $db_settings_select_query = "SELECT * FROM settings";
                        $settings_from_db = mysqli_query($db_connect, $db_settings_select_query);
                        ?>
                        <!-- start a loop to get every data of settings -->
                        <?php foreach ($settings_from_db as $settings):?>
                        <label class="form-label mb-3"><?=ucwords(str_replace("_", " ", $settings['settings_name']))?></label>
                        <input type="text" name="<?=$settings['settings_name']?>" class="form-control mb-2" value="<?=str_replace("_", " ", $settings['settings_value'])?>">
                        <?php endforeach;?>

                        <button type="submit" class="btn btn-success mt-3" name="settings_update_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
</div>
<?php include ("./include/footer.php") ?>