<?php include 'header.php'; ?>
<?php include('config.php'); ?>

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post">

        <?php

        $stu_id = $_GET['id'];

        $sql = "SELECT * FROM `student_data` WHERE s_id = $stu_id";
        $result = mysqli_query($conn, $sql);

        while ($fetch = mysqli_fetch_array($result)) {
            ?>

            <div class="form-group">
                <label>Name</label>
                <input type="hidden" name="sid" value="<?php echo $fetch['s_id']; ?>" />
                <input type="text" name="sname" value="<?php echo $fetch['s_name']; ?>" />
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" name="saddress" value="<?php echo $fetch['s_address']; ?>" />
            </div>

            <!-- Drop down code start here -->

            <div class="form-group">
                <label>Class</label>
                <select name="sclass">

                <?php

                $sql2 = "SELECT * FROM `sclass`";
                $result2 = mysqli_query($conn, $sql2);

                while ($row = mysqli_fetch_array($result2)) {

                    if ($fetch['s_class'] == $row['c_id']) {
            
                        $select = "selected";
                    } else {
                        $select = "";
                    }
            
                    echo "<option {$select} value='{$row['c_id']}'>{$row['c_name']}</option>";
                }
                
                ?>
                </select>
            </div>

            <!-- Drop down code end here -->

            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="sphone" value="<?php echo $fetch['s_phone']; ?>" />
            </div>

            <?php
        }
        ?>

        <input class="submit" type="submit" value="Update" />
    </form>

</div>
</div>
</body>

</html>