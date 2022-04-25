<?php require_once('./include/header.php') ?>
<div class="container">
    <div class="row align-items-center">
        <div class="col">
            <div class="page-description">
                <h1>List Services</h1>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="example-container" style="background: #fff; border: none !important; padding: 30px;">
                <form action="service_list_edit.php" method="POST">
                    <label class="form-label mb-3">Service Name</label>
                    <input type="text" name="new_service_name" class="form-control mb-2"
                        placeholder="Your service name">

                    <label class="form-label my-3">Service Details</label>
                    <textarea rows="4" type="text" name="new_service_details" class="form-control mb-2"
                        placeholder="Your service details"></textarea>

                    <label class="form-label my-3">Icon</label>
                    <i id="icon_show"></i>
                    <input readonly type="text" name="new_service_icon" id="icon" class="form-control mb-2"
                        placeholder="Your service details">

                    <label class="form-label mb-2 mt-3">Choose Icon</label>
                    <div class="border rounded overflow-auto" style="height: 200px;">
                        <?php foreach ($fonts as $font) : ?>
                        <i id="<?= $font ?>" class="<?= $font ?> m-2 p-2 bg-success text-white fs-4"
                            onClick={handleClick(this.id)}></i>
                        <?php endforeach; ?>
                    </div>

                    <label class="form-label my-3">Service Status</label>
                    <select name="new_status" id="pet-select" class="form-control">
                        <option value="">--Please choose an option--</option>
                        <option class="form-control" value="active">Active</option>
                        <option class="form-control" value="deactive">Deactive</option>
                    </select>

                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once('./include/header.php') ?>