<?php
require_once('./include/header.php');
$db_project_query = "SELECT * FROM recent_projects";
$projects = mysqli_query($db_connect, $db_project_query);
$index = 1;
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Add Recent Work</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="example-container" style="background: #fff; border: none !important; padding: 30px;">

                <div class="example-container" style="background: #fff; border: none !important; padding: 30px;">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>SL No</th>
                                <th>Project Category</th>
                                <th>Recent Project Name</th>
                                <th>Project Image</th>
                                <th>Project details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($projects as $project) : ?>
                            <tr>
                                <td><?= $index++ ?></td>
                                <td><?= $project['project_category'] ?></td>
                                <td><?= $project['project_name'] ?></td>
                                <td>
                                    <img class="w-100" style="height: 200px;"
                                        src="../uploads/project_photo/<?= $project['project_image'] ?>"
                                        alt="<?= $project['project_image'] ?>">
                                </td>
                                <td><?= $project['project_details'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="example-container" style="background: #fff; border: none !important; padding: 30px;">
                <!-- success sms -->
                <?php
                if (isset($_SESSION['project_add_success_sms'])) :
                ?>
                <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
                    <div class="alert-content">
                        <span class="alert-title">Success!</span>
                        <span class="alert-text"><?= ($_SESSION['project_add_success_sms']) ?></span>
                    </div>
                </div>
                <?php
                    unset($_SESSION["project_add_success_sms"]);
                endif;
                ?>
                <form action="add_recent_project_post.php" method="POST" enctype="multipart/form-data">
                    <div class="example-content">
                        <label class="form-label my-3">Project Category</label>
                        <input type="text" name="project_category" class="form-control mb-2">

                        <label class="form-label my-3">Project Name</label>
                        <input type="text" name="project_name" class="form-control mb-2">

                        <label class="form-label my-3">Project Image</label>
                        <input type="file" name="project_image" class="form-control mb-2">

                        <label class="form-label my-3">Project details</label>
                        <textarea type="text" name="project_details" class="form-control mb-2" rows="4"></textarea>

                        <button type="submit" class="btn btn-success mt-3" name="recent_work_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once('./include/header.php');
?>