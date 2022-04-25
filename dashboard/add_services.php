<?php
require_once("./include/header.php");
require_once('./include/icons.php');
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Add Service</h1>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="example-container" style="background: #fff; border: none !important; padding: 30px;">

                <!-- success sms -->
                <?php
                if (isset($_SESSION['service_add_success_sms'])) :
                ?>
                <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
                    <div class="alert-content">
                        <span class="alert-title">Success!</span>
                        <span class="alert-text"><?= ($_SESSION['service_add_success_sms']) ?></span>
                    </div>
                </div>
                <?php
                    unset($_SESSION["service_add_success_sms"]);
                endif;
                ?>

                <form action="add_services_post.php" method="POST">
                    <div class="example-content">
                        <label class="form-label mb-3">Service Name</label>
                        <input type="text" name="service_name" class="form-control mb-2"
                            placeholder="Your service name">

                        <label class="form-label my-3">Service Details</label>
                        <textarea rows="4" type="text" name="service_details" class="form-control mb-2"
                            placeholder="Your service details"></textarea>

                        <label class="form-label my-3">Icon</label>
                        <i id="icon_show"></i>
                        <input readonly type="text" name="service_icon" id="icon" class="form-control mb-2"
                            placeholder="Your service details">
                        <label class="form-label mb-2 mt-3">Choose Icon</label>
                        <div class="border rounded overflow-auto" style="height: 200px;">
                            <?php foreach ($fonts as $font) : ?>
                            <i id="<?= $font ?>" class="<?= $font ?> m-2 p-2 bg-success text-white fs-4"
                                onClick={handleClick(this.id)}></i>
                            <?php endforeach; ?>
                        </div>

                        <label class="form-label my-3">Service Status</label>
                        <select name="status" id="pet-select" class="form-control">
                            <option value="">--Please choose an option--</option>
                            <option class="form-control" value="active">Active</option>
                            <option class="form-control" value="deactive">Deactive</option>
                        </select>


                        <button type="submit" class="btn btn-success mt-3" name="service_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once("./include/footer.php"); ?>

<script>
function handleClick(clicked_id) {
    document.getElementById('icon').value = clicked_id;
    document.getElementById('icon_show').className = clicked_id + " fs-3 ms-2";
}
</script>