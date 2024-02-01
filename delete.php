<?php include 'header.php';
include('config.php');
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>

    <?php

    if (isset($_POST['deletebtn'])) {
        $stu_id = $_POST['sid'];

        $sql = "DELETE FROM `student_data` WHERE `s_id` = '$stu_id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location:http://localhost/crud_html/index.php");
        } else {
            echo "<script>alert('Data not deleted')</script>";
        }
    }

    ?>
</div>
</div>
</body>

</html>