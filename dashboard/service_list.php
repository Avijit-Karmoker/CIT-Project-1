<?php
require_once("./include/header.php");
require_once('./include/icons.php');
//database services query to show non deleted services
$db_services_show_query = "SELECT * FROM services WHERE delete_status = 'no'";
$services_from_db = mysqli_query($db_connect, $db_services_show_query);

//database services query to show deleted services
$db_services_hide_query = "SELECT * FROM services WHERE delete_status = 'yes'";
$hide_services_from_db = mysqli_query($db_connect, $db_services_hide_query);
$index = 1;
$sl_no = 1;
?>
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="page-description">
                <h1>List Services</h1>
            </div>
        </div>
        <div class="col-md-6 text-end">
            <div class="page-description pe-0">
                <button type="button" class="btn btn-success m-b-sm" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter" style="margin-bottom: 5px;">
                    Undo Services
                </button>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 50%;">
                <div class="modal-content">
                    <div class="modal-header">
                        Deleted Services
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>SL No</th>
                                    <th>Service Name</th>
                                    <th>Service Description</th>
                                    <th>Service Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($hide_services_from_db as $hide_service) : ?>
                                <tr>
                                    <td><?= $sl_no++ ?></td>
                                    <td><?= $hide_service['service_name'] ?></td>
                                    <td><?= $hide_service['service_details'] ?></td>
                                    <td><i class="<?= $hide_service['icon'] ?>"></i></td>
                                    <td>
                                        <a href="service_undo.php?id=<?= $hide_service['id'] ?>"
                                            class="btn btn-success">Restore</a>
                                        <a href="service_delete.php?id=<?= $hide_service['id'] ?>"
                                            class="btn btn-danger permanent_delete">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php if ($hide_services_from_db->num_rows == 0) : ?>
                                <tr>
                                    <td colspan="5" class="text-center text-danger">No active service to show</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="example-container" style="background: #fff; border: none !important; padding: 30px;">
                <?php
                // echo ($services_from_db->num_rows);
                ?>
                <form action="service_check_delete.php" method="POST">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Select</th>
                                <th>SL No</th>
                                <th>Service Name</th>
                                <th>Service Details</th>
                                <th>Service Icon</th>
                                <th>Service Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($services_from_db as $service) : ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="service_check[]" value="<?= $service['id'] ?>">
                                </td>
                                <td><?= $index++ ?></td>
                                <td><?= $service['service_name'] ?></td>
                                <td><?= $service['service_details'] ?></td>
                                <td><i class="<?= $service['icon'] ?>"></i></td>
                                <td><span class="badge <?php if ($service['status'] == 'active') : echo 'badge-success';
                                                            else : echo 'badge-danger';
                                                            endif;
                                                            ?> text-capitalize">
                                        <?= $service['status'] ?>
                                    </span>
                                </td>
                                <!-- <form action="service_delete.php" method="POST">
                                <input type="hidden" name="id" value="<?= $service['id'] ?>" />
                                <td>
                                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                    <button type="submit" name="edit" class="btn btn-info">Edit</button>
                                </td>
                            </form> -->
                                <td>
                                    <button value="service_soft_delete.php?id=<?= $service['id'] ?>"
                                        class="btn btn-danger delete_btn">Delete</button>
                                    <button name="edit" id="<?= $service['id'] ?>" onClick={handleButtonClick(this.id)}
                                        type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#ModalCenter">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="ModalCenter" tabindex="-1"
                                aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" style="max-width: 55%;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Services</h5>
                                        </div>
                                        <form action="service_list_edit_post.php" method="POST">
                                            <div class="modal-body">
                                                <input readonly type="text" name="service_id" id="service"
                                                    class="form-control mb-2">
                                                <label class="form-label mb-3">Service Name</label>
                                                <input type="text" name="new_service_name" class="form-control mb-2"
                                                    placeholder="Your service name">

                                                <label class="form-label my-3">Service Details</label>
                                                <textarea rows="4" type="text" name="new_service_details"
                                                    class="form-control mb-2"
                                                    placeholder="Your service details"></textarea>

                                                <label class="form-label my-3">Icon</label>
                                                <i id="icon_show"></i>
                                                <input readonly type="text" name="new_service_icon" id="icon"
                                                    class="form-control mb-2" placeholder="Your service details">

                                                <label class="form-label mb-2 mt-3">Choose Icon</label>
                                                <div class="border rounded overflow-auto" style="height: 200px;">
                                                    <?php foreach ($fonts as $font) : ?>
                                                    <i id="<?= $font ?>"
                                                        class="<?= $font ?> m-2 p-2 bg-success text-white fs-4"
                                                        onClick={handleClick(this.id)}></i>
                                                    <?php endforeach; ?>
                                                </div>

                                                <label class="form-label my-3">Service Status</label>
                                                <select name="new_status" id="pet-select" class="form-control">
                                                    <option value="">--Please choose an option--</option>
                                                    <option class="form-control" value="active">Active</option>
                                                    <option class="form-control" value="deactive">Deactive</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="edit_service_submit"
                                                    class="btn btn-success">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>
                            <?php if ($services_from_db->num_rows == 0) : ?>
                            <tr>
                                <td colspan="6" class="text-center text-danger">No active service to show</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- href="service_list_edit.php?id=<?= $service['id'] ?>" -->

<?php require_once("./include/footer.php"); ?>
<script>
$(document).ready(function() {
    $('.delete_btn').click(function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = $(this).val();
            }
        })
    });
});
</script>

<script>
function handleClick(clicked_id) {
    document.getElementById('icon').value = clicked_id;
    document.getElementById('icon_show').className = clicked_id + " fs-3 ms-2";
}

function handleButtonClick(id) {
    console.log(id);
    document.getElementById('service').value = id;
}
</script>