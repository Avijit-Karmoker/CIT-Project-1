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
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
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
                            <td><?= $index++ ?></td>
                            <td><?= $service['service_name'] ?></td>
                            <td><?= $service['service_details'] ?></td>
                            <td><i class="<?= $service['icon'] ?>"></i></td>
                            <td><span class="badge <?php if ($service['status'] == 'Active') : echo 'badge-success';
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
                                <a href="service_list_edit.php?id=<?= $service['id'] ?>" name="edit"
                                    class="btn btn-info">Edit</a>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                        <?php if ($services_from_db->num_rows == 0) : ?>
                        <tr>
                            <td colspan="6" class="text-center text-danger">No active service to show</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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
</script>