<?php
require_once('./include/header.php');
$index = 1;

$db_skills_query = "SELECT * FROM skills";
$skills = mysqli_query($db_connect, $db_skills_query);

?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Add Skills</h1>
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
                            <th>Skill Name</th>
                            <th>Skill Details</th>
                            <th>Skill Percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($skills as $skill) :
                        ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $skill['skill_name'] ?></td>
                            <td><?= $skill['skill_details'] ?></td>
                            <td><?= $skill['skill_percentage'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php if ($skills->num_rows == 0) :
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
                <!-- <?php
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
                ?> -->

                <form action="add_skill_post.php" method="POST">
                    <div class="example-content">
                        <label class="form-label mb-3">Skill Name</label>
                        <input type="text" name="skill_name" class="form-control mb-2" placeholder="Skill name">

                        <label class="form-label my-3">Skill Details</label>
                        <textarea rows="4" type="text" name="skill_details" class="form-control mb-2"
                            placeholder="Skill details"></textarea>

                        <label class="form-label my-3">Skill Percentage</label>
                        <input type="number" name="skill_percentage" class="form-control mb-2"
                            placeholder="Skill percentage">

                        <button type="submit" class="btn btn-success mt-3" name="skill_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once('./include/footer.php') ?>