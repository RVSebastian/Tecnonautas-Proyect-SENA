<?php 

include("db.php");

?>

<?php include("includes/header.php") ?>

<style>
a {
    color: var(--primary-color);
    text-decoration: none;
}

.ls {
    background-color: var(--panel-color);
}
</style>

<section class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <img src="./includes/img/perfil.jpg" alt="">
    </div>

    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-tachometer-fast-alt"></i>
                <span class="text">Dashboard</span>
            </div>
            <div class="boxes">
                <div class="box box1">
                    <i class="uil uil-document-layout-center"></i>
                    <span class="text">Total Post</span>
                    <span class="number"><?php
                        $query = "SELECT count(*) from task";
                        $result = mysqli_query($conn, $query);
                    foreach($result as $row) {
                         echo $row['count(*)'];
                      } ?></span>
                </div>
                <div class="box box2">
                    <i class="uil uil-comments"></i>
                    <span class="text">Comments</span>
                    <span class="number">loading</span>
                </div>
                <div class="box box3">
                    <i class="uil uil-share"></i>
                    <span class="text">Total Share</span>
                    <span class="number">loading</span>
                </div>
            </div>
        </div>

        <div class="activity">
            <div class="title">
                <i class="uil uil-clock-three"></i>
                <span class="text">Recent Activity</span>
            </div>

            <div class="activity-data">
                <div class="data names">
                    <span class="data-title">Id</span>
                    <?php
                        $query = "SELECT * FROM task";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                    <span class="data-list"><?php echo $row['id']?> </span>
                    <?php } ?>
                </div>
                <div class="data names">
                    <span class="data-title">Article</span>
                    <?php
                        $query = "SELECT * FROM task";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                    <span class="data-list"><input type="text" class="ls" disabled size="50"
                            value="<?php echo $row['title']?>"></span>
                    <?php } ?>
                </div>

                <div class="data names">
                    <span class="data-title">Category</span>
                    <?php
                        $query = "SELECT * FROM task";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                    <span class="data-list"><input type="text" class="ls" disabled size="20"
                            value="<?php echo $row['category']?>"></span>
                    <?php } ?>
                </div>
                <div class="data type">
                    <span class="data-title">Options</span>
                    <?php
                        $query = "SELECT * FROM task";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                    <span class="data-list" style="text-align: center;"><a
                            href="delete_task.php?id=<?php echo $row['id']?>" class="uil uil-trash-alt"></a>/<a
                            href="edit_task.php?id=<?php echo $row['id'] ?>" class="uil uil-pen"></a></span>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php") ?>