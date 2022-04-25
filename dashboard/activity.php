<?php
require_once('./include/header.php');
require_once('./include/icons.php');
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Add Activity</h1>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="example-container" style="background: #fff; border: none !important; padding: 30px;">

                <!-- success sms -->
                <?php
                if (isset($_SESSION['success_sms'])) :
                ?>
                <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
                    <div class="alert-content">
                        <span class="alert-title">Success!</span>
                        <span class="alert-text"><?= ($_SESSION['success_sms']) ?></span>
                    </div>
                </div>
                <?php
                    unset($_SESSION["success_sms"]);
                endif;
                ?>

                <form action="activity_post.php" method="POST">
                    <div class="example-content">
                        <label class="form-label my-3">Activity name</label>
                        <input type="text" name="activity_name" class="form-control mb-2">

                        <label class="form-label my-3">Activity Count</label>
                        <input type="number" name="activity_count" class="form-control mb-2">

                        <label class="form-label mb-3">Activity Icon</label>
                        <i id="icon_show"></i>
                        <input readonly type="text" name="activity_icon" id="icon" class="form-control mb-2" value="">
                        <label class="form-label mb-2 mt-3">Choose Icon</label>
                        <div class="border rounded overflow-auto" style="height: 200px;">
                            <?php foreach ($fonts as $font) : ?>
                            <i id="<?= $font ?>" class="<?= $font ?> m-2 p-2 bg-success text-white fs-4"
                                onClick={handleClick(this.id)}></i>
                            <?php endforeach; ?>
                        </div>
                        <button type="submit" class="btn btn-success mt-3" name="activity_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once './include/footer.php' ?>

<script>
function handleClick(clicked_id) {
    document.getElementById('icon').value = clicked_id;
    document.getElementById('icon_show').className = clicked_id + " fs-3 ms-2";
}
</script>