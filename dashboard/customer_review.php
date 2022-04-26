<?php
require_once("./include/header.php");
$index = 1;

$db_reviews_query = "SELECT * FROM customer_reviews";
$reviews = mysqli_query($db_connect, $db_reviews_query);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Customer Service</h1>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="example-container" style="background: #fff; border: none !important; padding: 30px;">
                <?php
                // echo ($services_from_db->num_rows);
                ?>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>SL No</th>
                            <th>Customer Name</th>
                            <th>Review Details</th>
                            <th>Customer Position</th>
                            <th>Customer Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reviews as $review) :
                        ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $review['customer_name'] ?></td>
                            <td><?= $review['review_details'] ?></td>
                            <td><?= $review['customer_position'] ?></td>
                            <td><?= $review['customer_image'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php if ($reviews->num_rows == 0) :
                        ?>
                        <tr>
                            <td colspan="6" class="text-center text-danger">No active service to show</td>
                        </tr>
                        <?php endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
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

                <form action="customer_review_post.php" method="POST" enctype="multipart/form-data">
                    <div class="example-content">
                        <label class="form-label mb-3">Customer Name</label>
                        <input type="text" name="customer_name" class="form-control mb-2" placeholder="Customer Name">

                        <label class="form-label my-3">Review Details</label>
                        <textarea rows="4" name="review_details" class="form-control mb-2"
                            placeholder="Review Details"></textarea>

                        <label class="form-label my-3">Customer Position</label>
                        <input type="text" name="customer_position" class="form-control mb-2"
                            placeholder="Customer Position">

                        <label class="form-label my-3">Upload Customer Image</label>
                        <input type="file" name="customer_image" class="form-control mb-2">

                        <button type="submit" class="btn btn-success mt-3" name="service_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once("./include/footer.php"); ?>