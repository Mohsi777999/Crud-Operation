<?php include 'header.php';
include('config.php');
?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php

    if (isset($_POST['showbtn'])) {
        $id = $_POST['sid'];
        $sql = "SELECT * FROM `student_data` WHERE `s_id` = '$id'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) { ?>

            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="hidden" name="sid" value="<?php echo $row['s_id']; ?>" />
                    <input type="text" name="sname" value="<?php echo $row['s_name']; ?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="saddress" value="<?php echo $row['s_address']; ?>" />
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <select name="sclass">
                        <?php
                        $sql2 = "SELECT * FROM `sclass`";
                        $result2 = mysqli_query($conn, $sql2);

                        while ($row1 = mysqli_fetch_array($result2)) {

                            if ($row['s_class'] == $row1['c_id']) {
                                $select = "selected";
                            } else {
                                $select = "";
                            }

                            echo "<option {$select} value='{$row1['c_id']}'>{$row1['c_name']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="sphone" value="<?php echo $row['s_phone']; ?>" />
                </div>
                <input class="submit" type="submit" value="Update" />
            </form>

            <?php
        }
    }

    ?>

</div>

</body>

</html>